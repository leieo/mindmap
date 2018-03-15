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
</head>
<body>
	<h1><?php echo 'Hello World' ?></h1>


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
		$update = $database->prepare('UPDATE user SET name = :newname, email = :newmail WHERE name = :oldname');
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


	<!-- Écriture -->
	<?php

	$id = '';
	$name = 'test';
	$email = 'test@te.st';
	$password = 'test';

	try {
		$add = $database->prepare('INSERT INTO user(name, email, password) VALUES (:name, :email, :password)');
		$add->execute(array(
			'name' => $name,
			'email' => $email,
			'password' => $password
		));

		echo 'ajouter ça marche / ';
	}

	catch(Exception $e)

	{
	        die('Erreur : '.$e->getMessage());
	}

	$add->closeCursor();

	?>

	<?php
	try {
			$database->exec('DELETE FROM user WHERE id%2=0 AND name=\'modif\'');
			echo 'supprimer au poil / ';
	} catch(Exception $e) {
	        die('Erreur : '.$e->getMessage());
	}
	/*
	$nb_deletions = 
	echo $nb_deletions . ' entrées ont été supprimées !';
	*/
	?>



</body>
</html>