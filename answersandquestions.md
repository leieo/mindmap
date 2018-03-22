# Penser à ...

##database
si on utilise le hachage, password > TEXT (VARCHAR peux être trop court)

##conditions formulaire d'inscription
+ all fields > !empty
+ pseudo length
+ pseudo déjà existant
+ email length
+ email valide > filter_var($mail, FILTER_VALIDATE_EMAIL)
+ email déjà existant
+ mail 1 == mail 2
+ password 1 == password 2



# À élucider

##phpMyAdmin 
+ database > mindmap
+ table > user
+ column > password
pourquoi est-ce une clé primaire ?



# Recherche

##idée de balise "repère" d'alignement en css

Exemple de situation : 

`
<table>
	<tr>
		<td>Colonne de gauche</td>
		<td>* - Colonne de droite</td>
	</tr>
</table>
`

Je veux positionner un élément (un bloc de texte par exemple) qui se situe en dessous de cette table (donc qui n'est pas enfant, seulement voisin). 

J'aimerai __ajuster l'alignement vertical__ de cet élément et, plus précisement, aligner le bord gauche de ce bloc de texte avec l'étoile __*__, sans pour autant devoir mettre ce bloc de texte dans la table (car cela pourrait par exemple élargir ma colonne de droite, et tout déplacer).

Comment faire ? 

...

Imaginons une balise magique <magic/> à laquelle on donnerait un attribut, et qu'on pourrait placer où on veut. Cet attribut appellerait l'id de la balise à positioner. 

Par défaut, l'alignement se fait à gauche en prenant la position du point "magic" comme position de référence. Dans la balise à positioner, on pourrait préciser à l'aide d'un attribut si on veut aligner à ce point le bord gauche, le bord droit ou encore le centre du bloc.

En code, ça donnerait :

`
<table>
	<tr>
		<td>Colonne de gauche</td>
		<td><magic for="super">* - Colonne de droite</td>
	</tr>
</table>
<p id="super">Ouais youpi hop, fusée c'est trop super génial. Maintenant, le bord gauche de ce bloc de texte est aligné avec l'étoile qui se trouve dans la colonne de droite de la table.</p>
`