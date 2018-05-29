<?php 
require_once("functions.php");
 

?>
<?php 

if(IsLogged()){
	
	?>
	<header>
	<ul id="ulHeader">
	<li>Joueur : <?php if(IsLogged()){echo $_SESSION["pseudo"];} ?></li>
	<li><?php include("logoutForm.php"); ?></li>
	<li><?php echo date("d-m-Y H:i");?></li>
	</ul>
	</header>
	<?php
	
	}else{     
		
		?>
		
		<header>
		<ul id="ulHeader">
		<li><?php echo date("d-m-Y H:i");?></li>
		</ul>
		</header>
		
		<?php
		
	} 
	
	?>



