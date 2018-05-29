<?php 
session_start();
$_SESSION['listFourmis'] = [];
if(isset($_POST['nbFourmis'])){

$nbFourmis = $_POST['nbFourmis'];
echo $nbFourmis;

}
else{
	$nbFourmis = 1;
	echo "no var";
}
class Fourmis{
	
	
private $_role;
private $_pdv;
private $_force;
private $_defense;
private $_img;
private $_tempsCreation;
private $_cout;
private $_niveauReine;
	


	function __construct($role, $pdv, $force, $defense, $img, $tempsCreation, $cout, $niveauReine){
		$this->_role = $role;
		$this->_pdv = $pdv;
		$this->_force = $force;
		$this->_defense = $defense;
		$this->_img = $img;
		$this->_tempsCreation = $tempsCreation;
		$this->_cout = $cout;
		$this->_niveauReine = $niveauReine;
	}
}
for($i = 0;$i<$nbFourmis;$i++){
$fourmis = new Fourmis("ouvriere", 10, 2, 5, "#", 10, 1, 1);
array_push($_SESSION['listFourmis'], $fourmis);
}
$_SESSION['toJson'] = array(
	"NbFourmis" => count($_SESSION['listFourmis'])
);
echo json_encode($_SESSION['toJson']);





?>