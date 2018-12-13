                    <!-- Pas de Balise HTML dans le controller -->
<?php
include('Models/Images.php');

$images = getAllMeme();


include('Views/HomeView.php');
