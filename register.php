<?php 
require_once("./functions.php");

$pseudo = filter_input(INPUT_POST, "pseudo",FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, "password",FILTER_SANITIZE_STRING);
$errors = array();


if(empty($pseudo) or strlen($pseudo)<2){
	$errors["pseudo"]="Le pseudo n'est pas valide";
}
if(empty($email) or strlen($email)<2){
	$errors["email"]="L'email n'est pas valide";
}
if(empty($password) or strlen($password)<5){
	$errors["password"]="Le mot de passe doit contenir au moins 5 caractères";
}

	

if(empty($errors)){		
	createAccount($email,$pseudo,$password);
}else{
	include "index.php";
}




















?>