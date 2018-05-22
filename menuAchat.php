<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>La Fourmillière</title>
  <link rel="stylesheet" href="css/styles.css">

</head>
<body>
	<header>
	<ul id="ulHeader">
	<li>Joueur : Pseudo</li>
	<li>Amis</li>
	<li>Options</li>
	<li>Logout</li>
	<li>Date</li>
	</ul>
	</header>
	<div id="ressources">
	<table id="tblRessources">
		<tr><th>Nombre de Fourmis</th><th>Terre</th><th>Pierre</th><th>Nourriture</th></tr>
		<tr><td id="nbFourmis">1</td><td>0</td><td>0</td><td>0</td></tr>		
	</table>
	</div>
	<nav>
	<ul class="list">
	<li>Métiers</li>
	<li>Ressources</li>
	<li>Recherche</li>
	<li>Camps</li>
	</ul>
	</nav>
	<main>
	<div id="menu">
		<table>
		<?php 
		for($i = 0; $i < 21; $i++){
		?>
		<tr>
			<td  rowspan="2" ><img src="./images/fourmi.png"></img></td>
			<td  rowspan="2">Nom de la fourmi! </td>			
			<td>Prix: 18 ressoures !</td>	
			<td rowspan="2">
				<input type="number" id="inputAchatFourmi" >
				<input type="submit" id="btnAchatFourmi" value="Acheter">
			</td>			
		<tr>
			<td>Temps de création: 3sec!</td>
		</tr>			
		</tr>
		<?php }?>
		</table>
	</div>
	</main>
	<footer>LeGroupeDesFourmis © 2018 - CFPT Informatique - Genève</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./jQuery/script.js"></script>
</body>
</html>