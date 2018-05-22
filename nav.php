<?php 
require_once("functions.php");
 

?>
<?php if(IsLogged()){
	
	?>
	
	<nav>
	<ul class="list">
	<li> <a href="menuAchat.php">Métiers</a></li>
	<li>Ressources</li>
	<li>Recherche</li>
	<li>Camps</li>
	</ul>
	</nav>
	
	<?php
	
	}else{     
		
		?>
		
		<nav>
			<ul class="list">
				
			</ul>
		</nav>
		
		<?php
		
	} 
	
	?>