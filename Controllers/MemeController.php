<?php
include('Models/Meme.php');

  ////Set the Content Type,Précise l'extension de l'image
header('Content-type: image/jpeg');

// var = Crée une nouvelle image depuis un fichier ou une URL
// $_POST["Rendu"] = chemin complet du fichier image
$templateimg = imagecreatefromjpeg($_POST["Rendu"]);
// Attribue une couleur au texte
$white = imagecolorallocate($templateimg, 255,0, 215);
// Le chemin de la police d'écriture
$font_path = 'C:/xampp/htdocs/generateurDeMeme/css/Aller_Bd.ttf';
// Set Text to Be Printed On Image
$_POST["textehaut"];
$_POST["textebas"];
// Insère un texte dans une image
// Intval sert à convertir des valeurs d'une variable en valeur numérique.
// // Print Text On Image (60=fontsize,0=rotation,0=x and 100=y)
// imagettftext( $imagevar, 60, 0, 0, 100, $black, $font_path, $text); 

imagettftext($templateimg, 50, 0,0, 70 ,$white, $font_path, $_POST["textehaut"]);
imagettftext($templateimg, 50, 0,0, 420 ,$white, $font_path, $_POST["textebas"]);
// imagettftext($template, 50, 0, $white, $font_path, $_POST["textehaut"]);
// imagettftext($template, 50, 0 ,$white, $font_path, $_POST["textebas"]);

// Affichage de l'image vers le navigateur ou dans un fichier
imagejpeg($templateimg);

// La supprime des fichiers temporaire
imagedestroy($templateimg); 
