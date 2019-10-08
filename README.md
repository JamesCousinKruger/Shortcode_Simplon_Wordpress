Création d'un plugin permettant d'ajouter une description de la formation "Référent Numérique en Entreprises" avec un simple shortcode : [simplon].

Procédure de création :

1. Création d’un fichier PHP avec un éditeur de code.

2. Ouvrir la balise PHP et renseigner l'en-tête : 
    - Plugin Name
    - Plugin URI
    - Description
    - Author
    - Version
    - Author URI

3. Création d’une fonction appelé “shortcode_simplon” dans laquelle je renseigne tous le code HTML et CSS nécessaire au rendu souhaité.

4. Enfin, j’utilise la fonction “add_shortcode” pour que Wordpress puisse interpréter mon shortcode.



Procédure de test : 

1. Installation et activation du plugin sur un WordPress local

2. Création d’une page avec un bloc “code court”

3. Renseignement du shortcode “[simplon]” dans le champ associé

4. Prévisualisation de la page et vérification du bon fonctionnement du plugin
