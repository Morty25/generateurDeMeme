                        
                        <!-- Balise HTML dans la vue -->
<!DOCTYPE html>
<html lang = "fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Super Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css"/>
</head>
<body>
<section id='carousel'>

<!-- Echo images via url de la BDD grâce à la fonction afficheImages() dans images.php  -->

    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner ">
            <!-- <div class="divAffichageImages">
            </div> -->
            <div class="carousel-item active">
                <?php foreach ($images as $key => $valueimages) {
                    if($key < 4){
                    echo "<img id='MM' alt='images de MM' src=images/memes/".$valueimages['url'].">";
                    }
                } 
                ?>
            </div>
            <div class="carousel-item">
                <?php foreach ($images as $key => $valueimages) {
                    if($key < 9 && $key > 4){
                    echo "<img id='MM' alt='images de MM' src=images/memes/".$valueimages['url'].">";
                    }
                } 
                ?>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Par la</span>
        </a>
        <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Par ici</span>
        </a>
    </div>
</section>
    


<!-- Formulaire pour avoir la variable POST pour stocker les mm réalisés (fonction stockMM)  -->
<form action="?page=Images" method="post">
    <div>
        <label for="titre">Titre du MM:</label>
        <input type="text" name="titre" id="titre">
    </div>
    <div>
        <label for="texte">Texte :</label>
        <input type="text" name="texte" id="texte">
    </div>
    <div>
        <input type="hidden" name="image" value="<?php.$_POST['image']?>">
    </div>
    <div class="button">
        <input id="MM" type="submit" name="Enregistrer" value="Enregistrer">
        <input type="submit" name="Telecharger" value="Télécharger">
    </div>
</form>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>
