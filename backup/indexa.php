<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.


$dbh = new PDO('mysql:host=localhost;dbname=memegenerator', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


function getAllImages() {
    global $dbh;
// $images=nom de veriable , image=nom de table en sql
    $images = $dbh->query('SELECT * FROM images');

    return $images->fetchAll();
  

// }
//       //Set the Content Type
//       header('Content-type:image/jpeg');

//       // Create Image From Existing File
//       $imagevar = imagecreatefromjpeg('frog.jpg');

//       // Allocate A Color For The Text (color in rgb)
//       $black = imagecolorallocate( $imagevar, 255,0, 0);

//       // Set Path to Font File
//       $font_path = 'C:/xampp/htdocs/generateurDeMeme/Aller_Bd.ttf';

//       // Set Text to Be Printed On Image
//       $text = "i am king of dirty water!";

//       // Print Text On Image (60=fontsize,0=rotation,0=x and 100=y)
//       imagettftext( $imagevar, 60, 0, 0, 100, $black, $font_path, $text);



//       // Send Image to Browser, give varible name from create image
//       imagejpeg( $imagevar);

//       // Clear Memory ,imagedestroy is php predefined funtion () frees any memory associated with an image ,$imagevar is variable which i created on top
//       imagedestroy( $imagevar);
?