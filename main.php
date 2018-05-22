<?php 
require_once("functions.php");
 

?>
<?php if(IsLogged()){
	
	?>
	
	<main>
	
	<h1>Bienvenue sur le jeux des fourmis vous avez une reine pour commencer !</h1>
		<h2>Vous allez recevoir des fourmis toutes les 3 secondes</h2>
	
	</main>
	
	<?php
	
	}else{     
		
		?>
		
		<main>
	
		<?php include("loginForm.php"); ?>
		<?php include("registerForm.php"); ?>
	
		</main>
		
		<?php
		
	} 
	
	?>