<?php
session_start();
// Connexion à la base de données
try {
    $database = new PDO('mysql:host=localhost;dbname=mindmap; charset=utf8', 'root', 'simplonco');
}

catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
}

if (isset($_GET['id']) AND $_GET['id'] > 0) {
	$getid = intval($_GET['id']);
	$userquery = $database->prepare('SELECT * FROM user WHERE id = ?');
	$userquery->execute(array($getid));
	$userinfo = $userquery->fetch();
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

<?php 
	if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) 
	{
?>
	
	<header align="right">
		<a href="">My account</a>  |  <a href="./logout.php">Log out</a>
	</header>
	<div align="center">
		<table>
			<tr>
				<td></td>
				<td align="left">
					<h2>Welcome <?php echo $userinfo['name']; ?> ! </h2>
				</td>
			</tr>
			<tr>
				<td align="right">
					Pseudo > 
				</td>
				<td>
					<?php echo $userinfo['name']; ?>
				</td>
			</tr>
			<tr>
				<td align="right">
					Mail > 
				</td>
				<td>
					<?php echo $userinfo['email']; ?>
				</td>
			</tr>
		</table>
	</div>

<?php 
		} else { 
			header("Location: error.php");
		}

	} else {
		header("Location: error.php");
	}
?>

</body>
</html>