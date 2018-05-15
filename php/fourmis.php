<?php 

class fourmis{
	
private $_role;
private $_pdv;
private $_force;
private $_defense;
private $_img;
private $_tempsCreation;
private $_cout;
private $_niveauReine;

	function creerFourmi(){
		$this->_role = "ouvriere";
		$this->_pdv = 10;
		$this->_force = 2;
		$this->_defense = 5;
		$this->_img = "";
		$this->_tempsCreation = 10;
		$this->_cout = 1;
		this->_niveauReine = 1;
	}
	
	function __construct($role, $pdv, $force, $defense, $img, $tempsCreation, $cout, $niveauReine){
		$this->_role = $role;
		$this->_pdv = $pdv;
		$this->_force = $force;
		$this->_defense = $defense;
		$this->_img = $img;
		$this->_tempsCreation = $tempsCreation;
		$this->_cout = $cout;
		this->_niveauReine = $niveauReine;
	}
}


?>