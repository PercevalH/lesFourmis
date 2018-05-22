<?php 
function IsLogged(){
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	return isset($_SESSION["logged"]);
}

function IsAllowed($action){
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	return in_array($action,$_SESSION["rights"]);
}

function save(){
    $db = getConnexion();

	try 
	{	
		$db->query('UPDATE tbl_ressources set Nb_Fourmi = '.$_SESSION["Fourmi"].' where Id_User = '.$_SESSION["IdUser"].';');			
	} catch(PDOException $ex) 
	{
	echo "An Error occured!"; // user friendly message
	error_log($ex->getMessage());
	}

}

function displayPlayers(){
    $db = getConnexion();
	
	try 
	{	
		echo "All Users : <br>";
		foreach($db->query('SELECT Pseudo_User from tbl_user') as $row) {
			echo $row["Pseudo_User"]."<br>";
		}
	}catch(PDOException $ex) {
	echo "An Error occured!"; // user friendly message
	error_log($ex->getMessage());
	}
}

function getConnexion(){
	
	$server = "10.134.96.109";
	$dbName = "lesFourmis";
	$dbUser = "root";
	$dbPassword = "";
	
	static $db = null;
	if($db === null){
		$db = new PDO("mysql:host=$server;dbname=$dbName",$dbUser,$dbPassword);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}
	return $db;
	
	
}

function createAccount($email,$pseudo,$password){
	$db = getConnexion();

	try 
	{	
		$salt = uniqid();
		$password = md5($password.$salt);
		$db->query('INSERT INTO tbl_user (Email_User,Pseudo_User,Pwd_User,Salt_User) VALUES ("'.$email.'","'.$pseudo.'","'.$password.'","'.$salt.'")');
		$userId = $db->lastInsertId();		
        $db->query('INSERT INTO tbl_ressources (Id_User,Dttm_LastSave,Nb_Fourmi) VALUES ("'.$userId.'","'.date("Y-m-d H:i:s").'","0")');
		header("Location: index.php");
	} catch(PDOException $ex) 
	{
	echo "An Error occured!"; // user friendly message
	error_log($ex->getMessage());
	}
}

function login($email,$password){
	
	$db = getConnexion();

	try 
	{
		foreach($db->query('SELECT Id_User,Pseudo_User,Pwd_User,Salt_User from tbl_user where Email_User like "'.$email.'";') as $row) 
		{
			if(md5($password.$row["Salt_User"]) == $row["Pwd_User"]){
				
				if (session_status() == PHP_SESSION_NONE) {
					session_start();
				}
				
				$_SESSION["logged"] = true;
                $_SESSION["IdUser"] = $row["Id_User"];
				$_SESSION["email"] = $email;
				$_SESSION["pseudo"] = $row["Pseudo_User"];
		
				//foreach($db->query('SELECT DISTINCT Cd_Permission from tbl_userrole join tbl_permission on tbl_permission.Id_Role=tbl_userrole.Id_Role where Id_User='.$row["Id_User"].' and tbl_permission.Id_Role=tbl_userrole.Id_Role') as $permission) {
				//	$_SESSION["rights"][] = $permission["Cd_Permission"];
				//}
				header("Location: index.php");
			
			}else{
				include "index.php";
			}

		}		
	} catch(PDOException $ex) 
	{
	echo "An Error occured!"; // user friendly message
	error_log($ex->getMessage());
	}
}




?>