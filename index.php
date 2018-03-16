<?php

// Connexion à la base de données
try {
    $database = new PDO('mysql:host=localhost;dbname=mindmap; charset=utf8', 'root', 'simplonco');
}

catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
}

if (isset($_POST['registerform'])) {
	if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['password']) AND !empty($_POST['password2'])) {
		$name = htmlspecialchars($_POST['name']);
		$mail = htmlspecialchars($_POST['mail']);
		$mail2 = htmlspecialchars($_POST['mail2']);
		$password = sha1($_POST['password']);
		$password2 = sha1($_POST['password2']);

		$namelength = strlen($name);
		if ($namelength <= 255) {

			$maillength = strlen($mail);
			if ($maillength <= 255) {

				if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

					if ($mail == $mail2) {

						if ($password == $password2) {
							echo '... tout est bon ...';
						} else {
							$error = "password check not ok";
						}
					} else {
						$error = "mail check not ok";
					}
				} else {
					$error = "mail non valide";
				}
			} else {
				$error = "mail trop long";
			}
		} else {
			$error = "pseudo trop long";
		}
	} else {
		$error = "All fields are required ...";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mindmap</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Cutive+Mono&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
	<div align="center">
		<form method="POST" action="">
			<table>
				<tr>
					<td></td>
					<td align="center">
						<h2>Register</h2>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="name">Name > </label>
					</td>
					<td>
						<input type="text" id="name" name="name" placeholder="Choose a name">
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mail">Mail > </label>
					</td>
					<td>
						<input type="email" id="mail" name="mail" placeholder="Your e-mail">
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mail2"> > </label>
					</td>
					<td>
						<input type="email" id="mail2" name="mail2" placeholder="Confirm your e-mail">
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="password">Password > </label>
					</td>
					<td>
						<input type="password" id="password" name="password" placeholder="Your password">
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="password2"> > </label>
					</td>
					<td>
						<input type="password" id="password2" name="password2" placeholder="Confirm your password">
					</td>
				</tr>
				<tr>
					<td></td>
					<td align="center">
						<br>
						<input type="submit" name="registerform" value="Register">
					</td>
				</tr>
			</table>
		</form>      
		<?php
		if (isset($error)) {
			echo '<strong class="warning">'.$error.'</strong>';
		}
		?>    
	</div>
</body>
</html>