<?php

// Connexion à la base de données
try {
    $database = new PDO('mysql:host=localhost;dbname=mindmap; charset=utf8', 'root', 'simplonco');
}

catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
}

if (isset($_POST['registerform'])) {

	$name = htmlspecialchars($_POST['name']);
	$mail = htmlspecialchars($_POST['mail']);
	$mail2 = htmlspecialchars($_POST['mail2']);
	$password = sha1($_POST['password']);
	$password2 = sha1($_POST['password2']);

	if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['password']) AND !empty($_POST['password2'])) {

		$namelength = strlen($name);
		if ($namelength <= 255) {

			$namequery = $database->prepare('SELECT * FROM user WHERE name = :name');
			$namequery->execute(array('name' => $name));
			$nameexists = $namequery->rowCount();
			if ($nameexists == 0) {

				$maillength = strlen($mail);
				if ($maillength <= 255) {

					if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

						$mailquery = $database->prepare('SELECT * FROM user WHERE email = :email');
						$mailquery->execute(array('email' => $mail));
						$mailexists = $mailquery->rowCount();
						if ($mailexists == 0) {

							if ($mail == $mail2) {

								if ($password == $password2) {
									$insertuser = $database->prepare("INSERT INTO user(name, email, password) VALUES (:name, :email, :password)");
									$insertuser->execute(array(
										'name' => $name,
										'email' => $mail,
										'password' => $password
									));
									//
									$alert = "Welcome ! <br/><br/> You can log in <a href=\"./login.php\">here</a>";
									// OU
									// header('Location : index.php');
									// $_SESSION['registered'] = "... compte créé ..."

								} else {
									$alert = "... les mots de passe doivent être identiques ...";
								}
							} else {
								$alert = "... les adresses mail doivent être identiques ...";
							}
						} else {
							$alert = "... mail already exists ...";
						}
					} else {
						$alert = "... merci d'indiquer une adresse mail  valide ...";
					}
				} else {
					$alert = "... le mail est trop long ...";
				}
			} else {
				$alert = "... name already exists";
			}
		} else {
			$alert = "... le nom est trop long ...";
		}
	} else {
		$alert = "All fields are required ...";
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
	<header align="right">
		Log in <a href="./login.php">here</a>
	</header>
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
						<input type="text" id="name" name="name" placeholder="Choose a name" value="<?php if (isset($name)) { echo $name; } ?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mail">Mail > </label>
					</td>
					<td>
						<input type="email" id="mail" name="mail" placeholder="Your e-mail" value="<?php if (isset($mail)) { echo $mail; } ?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mail2"> > </label>
					</td>
					<td>
						<input type="email" id="mail2" name="mail2" placeholder="Confirm your e-mail" value="<?php if (isset($mail2)) { echo $mail2; } ?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="password">Password > </label>
					</td>
					<td>
						<input type="password" id="password" name="password" placeholder="Your password"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="password2"> > </label>
					</td>
					<td>
						<input type="password" id="password2" name="password2" placeholder="Confirm your password"/>
					</td>
				</tr>
				<tr>
					<td></td>
					<td align="center">
						<br/>
						<input type="submit" name="registerform" value="Register"/>
					</td>
				</tr>
			</table>
		</form>  
		<br/>    
		<?php
		if (isset($alert)) {
			echo '<strong class="alert">'.$alert.'</strong>';
		}
		?>    
	</div>
</body>
</html>