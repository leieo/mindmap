<?php

// Connexion à la base de données
try {
    $database = new PDO('mysql:host=localhost;dbname=mindmap; charset=utf8', 'root', 'simplonco');
}

catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
}

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

	<?php

	// Je récupère toutes les données
	$query = $database->query('SELECT * FROM user');

	// Je récupère chaque entrée (ligne) une par une ...
	while ($data = $query->fetch()) {
	?>
	
	<!-- ... et affiche une à une les données qu'elle contient. -->
	<p>
		<strong>Member <?php echo $data['id']; ?> </strong><br>
		Name : <?php echo $data['name']; ?> <br>
		Email : <?php echo $data['email']; ?> <br>
		Password : <?php echo $data['password']; ?>

	</p> 

	<?php
	}

	// Je clotûre le traitement de la requête
	$query->closeCursor();


	// Je récupère les id et les noms
	$browse = $database->query('SELECT id, name FROM user');

	?>
	<p>
		<?php
			// Je récupère chaque entrée (ligne) une par une ...
			while ($username = $browse->fetch()) {
		?>
		
		<!-- ... et affiche une à une les données qu'elle contient. -->
		<strong> <?php echo $username['id']; ?> </strong>
		<?php echo $username['name']; ?> <br>

		<?php
			}

			// je termine la requête
			$browse->closeCursor();
		?>
	</p>

</body>
</html>