
<!-- Pas de Balise HTML dans le controller -->
<?php
include('Models/Accueil.php');
// calling the function gelAllMeme to use them for HomeView.php
$images = getAllMeme();
include('Views/HomeView.php');

