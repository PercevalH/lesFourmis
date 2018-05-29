<?php 
require_once("functions.php");
 

?>
<?php if(IsLogged()){
	
	?>
	<div id="ressources">
		<table id="tblRessources">
			<tr><th>Nombre de Fourmis</th><th>Terre</th><th>Pierre</th><th>Nourriture</th></tr>
			<tr><td id="nbFourmis">1</td><td id="nbTerre">0</td><td id="nbPierre">0</td><td id="nbNourriture">0</td></tr>		
		</table>
	</div>
	
	<?php
	
	}else{     
		
		?>
		
		<div id="ressources">
			<table id="tblRessources">						
			</table>
		</div>
		
		<?php
		
	} 
	
	?>