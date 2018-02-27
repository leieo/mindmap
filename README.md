### Projet professionnel
###### élaboré dans le cadre de la formation 'Développeur.euse web' à Simplon.co, pour l'obtention du titre professionnel 'développeur logiciel'.

# Assistant de création de projet (moodboard)

Création d'un outil en ligne qui permet de rassembler en un même endroit les références et inspirations qui servent à la création d'un projet. Images, photos, plans, schémas, vidéos, podcasts, lectures, citations, musiques entendues, captures d'écran, lieux visités. L'outil peut également être utilisé directement pour produire du contenu (notes, photos, commentaires, etc.) 

L'utilisateur se connecte pour accéder à son compte personnel sur lequel il peut initier un ou plusieurs projets.

L'usage de base est **gratuit**. Les projets en cours sont **publics** et consultables par tous.

[description du projet](#description)
[lots fonctionnels & user stories](#lots_us)
[objectif visé](#objectif)

***

## <a name="description"></a>Description du projet


### Outils

###### Bibliothèque

C'est là où sont stockés les différents éléments. Elle contient tout le matériau de travail accumulé par l'utilisateur au fil du projet.

+ mots clés
+ images
+ liens
+ extraits de textes et notes
+ sons / vidéos
+ mindmaps


###### Mood board (ou espace de travail)

C'est un espace virtuel où apparaissent les éléments que l'utilisatrice choisit d'utiliser.

1. On peut supprimer des éléments du mood board, mais ils seront toujours présents dans la librairie.
2. On y voit non seulement les éléments, mais aussi les liens et l'arborescence qui déterminent la manière dont ils sont reliés et organisés entre eux. 
3. On peut enregistrer des versions successives du mood board


###### Timeline

Elle permet de retracer l'avancée du projet depuis sa création. On peut y voir à quel moment chaque élément a été ajouté, et quand la moodboard a été modifiée.

Le projet peut être découpé en différentes phases ( par exemple : analyse - recherches - développement - prototype) clairement visibles sur la timeline.


###### Groupe

Chaque utilisateur qui a un compte a la possibilité de participer à un projet partagé entre plusieurs utilisateurs.

L'outil indique alors pour chaque élément ou modification quel membre du projet en est l'auteur.


### Exemples de profils ciblés

+ Développeur.euse d'applications
+ Romancier.ères
+ Cineastes
+ Vidéastes
+ Menuisières.iers
+ Créateurs.trices de mode
+ Bricoleurs / Hackeuses / Bidouilleuses (domotique)
+ Youtubeurs.euses
+ Compagnies de théâtre


### Mots clés

Scrapbook -
Draft / Brouillon -
Share / Partage -
Mindmap / Carte d'organisation d'idées


***

## <a name="lots_us"></a>Lots fonctionnels & User stories

#### lot 1. > Connection

+ **us 1.1.** > En tant que **visiteur**, je peux m'enregistrer et créer un compte, pour devenir créateur ou contributeur d'un projet.

+ **us 1.2.** > En tant qu'**utilisatrice**, je peux me connecter à mon espace personnel, et ainsi 
accéder aux fonctionnalités gratuites de l'outil.


#### lot 2. > Création de projet

+ **us 2.1.** > En tant qu'**utilisatrice**, je peux ajouter un nouveau projet et le nommer, parce que j'ai besoin d'un nouvel espace où rassembler mes idées, dédié à un projet spécifique.


#### lot 3. > Ajout d'éléments

+ **us 3.1.** > En tant qu'**utilisatrice**, je peux ajouter des éléments (images, textes, liens, vidéos, musiques) en les uploadant depuis l'ordinateur ou en les enregistrant, pour stocker au même endroit toutes mes sources d'inspiration.

+ **us 3.2.** > En tant qu'**utilisatrice**, je peux créer des éléments (mots clés, notes, *photos depuis la caméra interne*, *prise de son depuis le micro intégré*), pour alimenter les bibliothèques de mes projets.


#### lot 4. > Organisation des éléments

+ **us 4.1.** > En tant qu'**utilisatrice**, je peux associer ces éléments à un projet (ou plusieurs), pour alimenter les bibliothèques de mes projets.

+ **us 4.2.** > En tant qu'**utilisatrice**, je peux organiser mon espace de travail (moodboard) en choisissant d'y afficher ou non les éléments issus de la bibliothèque. Cela me permet de visualiser les éléments nécessaires au développement actuel du projet, tout en ayant à disponibilité (dans la bibliothèque) les éléments de ses phases de développement passées ou futures.

+ **us 4.3.** > En tant qu'**utilisatrice**, je peux attribuer à chaque élément un degré d'importance, afin d'agir sur la hiérarchisation des éléments du moodboard.

+ **us 4.4.** > En tant qu'**utilisatrice**, je peux organiser l'une de mes bibliothèques en taguant ses éléments, et/ou en leur attribuant une couleur, afin de consulter facilement tous les éléments d'une même catégorie.

+ **us 4.5.** > En tant qu'**utilisatrice**, je peux organiser mon espace de travail (moodboard) en reliant entre eux les éléments affichés. Cela me permet de matérialiser visuellement les liens entre mes idées.


#### lot 5. > Partage


+ **us 5.1.** > En tant que **visiteur**, je peux parcourir les différents projets, leurs bibliothèques et leurs moodboards, pour avoir un aperçu de l'outil et des fonctionnalités qu'il propose aux personnes inscrites.

+ **us 5.2.** > En tant qu'**utilisatrice**, je peux copier un url ou générer des badges, afin de partager mon projet par mail, sur les réseaux sociaux ou ailleurs.


##### lot 6. > Enregistrement de versions

+ **us 6.1.** > En tant qu'**utilisatrice**, je peux enregistrer l'organisation de mon espace de travail à un instant T, pour en conserver plusieurs versions.

+ **us 6.2.** > En tant qu'**utilisatrice**, je peux consulter les versions antérieures de mon espace de travail, pour visualiser l'évolution de mon projet.


##### lot 7. > Projets de groupe

+ **us 7.1.** > En tant qu'**utilisatrice**, je peux inviter une autre personne utilisatrice à contribuer à mon projet, pour en faire un projet collectif.

+ **us 7.2.** > En tant qu'**utilisatrice**, je peux accepter une invitation à contribuer à un projet, pour rejoindre un projet collectif.

+ **us 7.3.** > En tant que **contributrice** d'un projet collectif, je peux voir quel membre est l'auteur de chacune des modifications du projet, pour suivre les contributions apportées au projet.


##### lot 8. > Timeline

+ **us 8.1.** > En tant qu'**utilisatrice**, je peux visualiser une timeline de l'un de mes projets, afin de voir à quels moments et comment le projet a été modifié depuis sa création.

+ **us 8.2.** > En tant qu'**utilisatrice**, je peux indiquer que j'amorce une nouvelle phase de mon projet, parce que j'ai besoin de montrer l'avancement de mon projet.

+ **us 8.3.** > En tant qu'**utilisatrice contributrice** d'un projet collectif, je peux proposer à l'équipe d'amorcer une nouvelle phase du projet, ou confirmer la proposition de changement de phase émise par un membre de l'équipe.


##### lot 9. > Version premium

+ **us 9.1.** > En tant qu'**utilisatrice privilégiée**, je peux passer un (ou plusieurs) de mes projets en mode privé, pour protéger la confidentialité de mes projets en cours. (-> professionnels)

+ **us 9.2.** > En tant qu'**utilisatrice privilégiée**, j'ai accès à une version datée des timelines des autres projets, et je peux voir quel membre est auteur d'une contribution sur les projets collectifs.  (-> recruteurs)

***

## <a name="objectif"></a>Objectif visé

La version présentée pour la certification comprendra au moins :
+ les lots fonctionnels **1.**, **2.** et **3.** 
+ le lot **4.**, à l'exception de la user story **4.5.**
+ la première partie du lot **5.** (**us 5.1.**)

Les versions suivantes pourront inclure, par ordre de priorité : 
+ la complétion du lot **4.**
+ la complétion du lot **5.**
+ les autres lots fonctionnels

