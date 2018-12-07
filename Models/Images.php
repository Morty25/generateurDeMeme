<?php
            try
            {
                // On se connecte à MySQL
                $bdd = new PDO('mysql:host=localhost;dbname=generator', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            }
            catch(Exception $e)
            {
                // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
            }
            
    
        /*  Fonction pour afficher les images de la bibliothèque  */ 
        function afficheImages() {
        global $bdd;
        // $images=nom de veriable , image=nom de table en sql
        $images = $bdd->query('SELECT * FROM images');

        return $images->fetchAll();

        }