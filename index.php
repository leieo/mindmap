<?php
// Récupération des données
try {
    $database = new PDO('mysql:host=localhost;dbname=mindmap; charset=utf8', 'root', 'simplonco');
}

catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
}

$query = $database->query('SELECT name FROM user WHEN id = 1');

?>


<!-- Affichage -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mindmap</title>
</head>
<body>
	<h1><?php echo 'Hello World' ?></h1>

</body>
</html>