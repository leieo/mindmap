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
	<h1><?php echo 'Hello World' ?></h1>
	<h2>Afficher un titre en h2</h2>
	<h3>Afficher un titre en h3</h3>
	<h4>Afficher un titre en h4</h4>
	<h5>Afficher un titre en h5</h5>
	<h6>Afficher un titre en h6</h6>        
	<br/>
	<h1><span class="feature">+</span></h1>
	<br/>
	<h3 class="feature">Test</h3>                                                   

<!-- Affichage -->
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
	$browse = $database->query('SELECT id, name FROM user ORDER BY id DESC LIMIT 0, 2');

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


<!-- Modification -->
	<?php

	$newname = 'modif';
	$newmail = 'modif@mod.if';
	$oldname = 'test';

	try {
		$update = $database->prepare('UPDATE user SET name = :newname, email = :newmail WHERE name = :oldname AND id%2 = 0');
		$update->execute(array(
		'newname' => $newname,
		'newmail' => $newmail,
		'oldname' => $oldname
		));

		echo 'modifier ok / ';
	} catch(Exception $e) {
	        die('Erreur : '.$e->getMessage());
	}

	$update->closeCursor();

	?>

</body>
</html>