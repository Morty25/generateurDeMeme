<?php
/*  On se connecte à la BDD  */
    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=generator;charset=UTF8", "root", "Lolorainbow!");
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
            
    
/*  Fonction pour afficher les images de la bibliothèque  */ 
    function afficheImages() {
        global $bdd;
        $images = $bdd->query('SELECT url FROM images');
        return $images->fetchAll();
    } 


/* Fonction pour stocker les mm réalisés (insert titre + image) */
    function stockMM($chemin) {
        global $bdd;
        $MM= $bdd->prepare("INSERT INTO mm ('titre', 'image') VALUES (?, ?)");
        return $MM->execute(array($_POST['titre'], $_POST['image']));
        // $id_MMrecuperer = $bdd->lastInsertId();
    }