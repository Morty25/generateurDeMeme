                       <!-- Pas de Balise HTML dans le model -->
                       <?php
/*  On se connecte à la BDD  */
include('connexion.php');
  
// // Send Image to Browser, give varible name from create image
// imagejpeg( $imagevar);

// // Clear Memory ,imagedestroy is php predefined funtion () frees any memory associated with an image ,$imagevar is variable which i created on top
// imagedestroy( $imagevar); 





//     //function to retrive meme already done from table mm.

function getAllMeme() {
    global $bdd;

    $images =$bdd->query('SELECT * FROM mm');

    return $images->fetchAll();

}

