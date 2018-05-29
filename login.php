<?php 
require_once("functions.php");


$email = filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, "password",FILTER_SANITIZE_STRING);
$errors = array();



if(empty($email) or strlen($email)<2){
	$errors["email"]="L'email n'est pas valide";
}
if(empty($password) or strlen($password)<5){
	$errors["password"]="Le mot de passe doit contenir au moins 5 caractères";
}

	

if(empty($errors)){		
	
	login($email,$password);
	
}else{
	include "index.php";
}




















?>