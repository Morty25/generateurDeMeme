                    <!-- Pas de Balise HTML dans le controller -->
<?php
include('Models/Images.php');

$MM = afficheImages();
// $MM= imagejpeg($img,$chemin);


include('Views/HomeView.php');
