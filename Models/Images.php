                       <!-- Pas de Balise HTML dans le model -->
<?php
/*  On se connecte à la BDD  */
include('connexion.php');
    
/*  Fonction pour afficher les images de la bibliothèque  */ 
    function afficheImages() {
        global $bdd;
        $images = $bdd->query('SELECT url FROM images');
        return $images->fetchAll();
    }

    
