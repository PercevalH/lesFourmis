<form method="post" action="./register.php">
	<table>
	<tr><td><p>Email</p></td><td><input type="email" name="email" value="<?php if(isset($email)){echo $email;} ?>"></td><td><p><?php if(isset($errors["email"])){echo $errors["email"];} ?></p></td></tr>
	<tr><td><p>Pseudo</p></td><td><input type="text" name="pseudo" value="<?php if(isset($pseudo)){echo $pseudo;} ?>"></td><td><p><?php if(isset($errors["pseudo"])){echo $errors["pseudo"];} ?></p></td></tr>
	<tr><td><p>Mot de passe</p></td><td><input type="password" name="password"></td><td><p><?php if(isset($errors["password"])){echo $errors["password"];} ?></p></td></tr>
	<tr><td><button type="submit">Sign in</button></td><td><p></p></td></tr>		
	</table>
</form>