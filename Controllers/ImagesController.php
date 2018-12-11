<?php
include('Models/Images.php');

    /* On crée les images sur le navigateur  */

    //On définit le type d'image pour que le PHP interprète les caractères
    header('Content-type: image/jpeg');

    //On créer une image sur le navigateur d'un point de vue du PHP car il ne peut pas travailler directement dessus
    $img = imagecreatefromjpeg($_POST['image']);

    //On ajoute de la couleur au texte
    $blue = imagecolorallocate($img, 0, 0, 255);

    //On ajoute une police au texte, on lui indique le chemin + le nom du document
    $font_path = 'c:/wamp64/www/generateurDeMeme/css/Aller_Bd.ttf';

    //On ajoute du texte
    $text =$_POST['texte'];

    //On lui attribut (une taille, une rotation, X, Y, la police, le texte qu'on a écrit)
    imagettftext($img, 50, 0, 0, 150, $blue, $font_path, $text);

    //Créer une vraie image JPEG (Mais elle n'existe pas sur le disque dur! On l'affiche simplement) 
    //imagejpeg($img,$chemin.$nom); On renseigne le chemin en paramètre pour l'enregistrer sur le disque dur
    imagejpeg($img);
    

    //stocker en BDD

    //rediriger vers la page du meme

    //Elimination : plus besoin de représentation. 
    imagedestroy($img);
