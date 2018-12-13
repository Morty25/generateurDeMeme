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


    
// /* Fonction pour stocker les mm réalisés (image) */
//     function stockMM($img,$chemin) {
//         global $bdd;
//         $MM= $bdd->prepare("INSERT INTO mm ('image') VALUES ( ?)");
//         return $MM->execute(array($_POST['image']));
//         // $id_MMrecuperer = $bdd->lastInsertId();
//     }


// // Send Image to Browser, give varible name from create image
// imagejpeg( $imagevar);

// // Clear Memory ,imagedestroy is php predefined funtion () frees any memory associated with an image ,$imagevar is variable which i created on top
// imagedestroy( $imagevar); 

