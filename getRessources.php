<?php 
    session_start();
    $db = new PDO('mysql:host=localhost;dbname=mydb','root');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	try 
	{	
		foreach($db->query('SELECT * from tbl_ressources where IdUser = '.$_SESSION["IdUser"].';') as $row) {
            $differenceInSeconds = strtotime(date("Y-m-d H:i:s")) - strtotime($row["LastConnection"]);
            $_SESSION["Gold"] = $row["Nb_Gold"] + 1*$differenceInSeconds;
            $_SESSION["Brownies"] = $row["Nb_Brownies"]+ 0.2*$differenceInSeconds;
		}
        
	}catch(PDOException $ex) {
	echo "An Error occured!"; // user friendly message
	error_log($ex->getMessage());
	}
    
    $Json = array(
		"Gold" => $_SESSION['Gold'],
		"Brownies" => $_SESSION['Brownies']		
	);
echo json_encode($Json);

?>