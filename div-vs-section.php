<?php

// Connexion à la base de données
try {
    $database = new PDO('mysql:host=localhost;dbname=mindmap; charset=utf8', 'root', 'simplonco');
}

catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
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
	<div id="form" align="center">
		<h2>Register</h2>
		<form method="POST" action="">
			<table>
				<tr>
					<td>
						<label for="name">Name : </label>
					</td>
					<td>
						<input type="text" id="name" name="name" placeholder="Choose a name">
					</td>
				</tr>
				<tr>
					<td>
						<label for="mail1">Mail : </label>
					</td>
					<td>
						<input type="text" id="mail1" name="mail1" placeholder="Your e-mail">
					</td>
				</tr>
			</table>
		</form>   
	</div>                                                   

</body>
</html>