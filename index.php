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
	<button id="btnThomas">Logout</button>
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
	<li><a href="menuAchat.php">Métiers</a></li>
	<li>Ressources</li>
	<li>Recherche</li>
	<li>Camps</li>
	</ul>
	</nav>
	<main>
	
	<h1>Bienvenue sur le jeux des fourmis vous avez une reine pour commencer !</h1>
		<h2>Vous allez recevoir des fourmis toutes les 3 secondes</h2>
	
	</main>
	<footer>LeGroupeDesFourmis © 2018 - CFPT Informatique - Genève</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./jQuery/script.js"></script>
</body>
</html>