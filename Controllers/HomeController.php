                    <!-- Pas de Balise HTML dans le controller -->
<?php
include('Models/Images.php');

$images = afficheImages();
// $MM= imagejpeg($img,$chemin);


include('Views/HomeView.php');