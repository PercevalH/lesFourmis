<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>La Fourmillière</title>
  <link rel="stylesheet" href="css/styles.css">

</head>
<body>
	<?php 
	include("header.php");
	include("ressources.php");
	include("nav.php");
	?>
	
	<main>
	<div id="menu">
		<table>
		<?php 
		for($i = 0; $i < 21; $i++){
		?>
		<tr>
		<?php if($i%2 == 0){ ?>
			<td  rowspan="2" ><img src="./images/fourmi.png"></img></td>
		<?php } else{ ?> 
		<td  rowspan="2" ><img src="./images/fourmiRouge.png"></img></td>
		<?php } ?>
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