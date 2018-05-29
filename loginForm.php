<form method="post" action="./login.php">
	<table>
	<tr><td><p>Email</p></td><td><input type="email" name="email" value="<?php if(isset($email)){echo $email;} ?>"></td><td><p><?php if(isset($errors["email"])){echo $errors["email"];} ?></p></td></tr>
	<tr><td><p>Mot de passe</p></td><td><input type="password" name="password"></td><td><p><?php if(isset($errors["password"])){echo $errors["password"];} ?></p></td></tr>
	<tr><td><button type="submit">login</button></td><td><p></p></td></tr>		
		
	</table>
</form>