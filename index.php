<?php
session_start();
// Connexion à la base de données
try {
    $database = new PDO('mysql:host=localhost;dbname=mindmap; charset=utf8', 'root', 'simplonco');
}

catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
}

if (isset($_POST['loginform'])) 
{
	$loginmail = htmlspecialchars($_POST['loginmail']);
	$loginpassword = sha1($_POST['loginpassword']);
	if (!empty($_POST['loginmail']) AND !empty($_POST['loginpassword'])) 
	{
		if (filter_var($loginmail, FILTER_VALIDATE_EMAIL)) 
		{
			$userquery = $database->prepare("SELECT * FROM user WHERE mail = ? AND password = ?");
			$userquery->execute(array($loginmail, $loginpassword));
			$userexists = $userquery->rowCount();
			if ($userexists == 1) 
			{
				$userinfo = $userquery->fetch();
				$_SESSION['id'] = $userinfo['id'];
				$_SESSION['name'] = $userinfo['name'];
				$_SESSION['mail'] = $userinfo['mail'];
				header("Location: profil.php?id=".$_SESSION['id']);

			} else {
				$alert = "... le mail et le mot de passe ne correspondent pas ...";
			}

		} else {
			$alert = "... merci d'indiquer une adresse mail valide ...";
		}

	} else {
		$alert = "... merci de remplir tous les champs ...";
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
						<h2>Login</h2>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="loginmail">Mail > </label>
					</td>
					<td>
						<input type="email" id="loginmail" name="loginmail" placeholder="Enter e-mail" value="<?php if (isset($loginmail)) { echo $loginmail; } ?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="loginpassword">Password > </label>
					</td>
					<td>
						<input type="password" id="loginpassword" name="loginpassword" placeholder="Enter password"/>
					</td>
				</tr>
				<tr>
					<td></td>
					<td align="center">
						<br/>
						<input type="submit" name="loginform" value="Login"/>
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