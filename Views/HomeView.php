<!-- Pas de HTML dans les models et controllers : première balise HTML dans la vue-->
<!DOCTYPE html>
<html lang = "fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Super Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css"/>
</head>
<body>

<!-- Echo images via url de la BDD grâce à la fonction afficheImages() dans images.php  -->
<?php foreach ($images as $valueimages) {?>
    <img alt="images de MM" src="Images/<?php echo $valueimages['url'];?>">
<?php }?>



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
    <input type="hidden" name="image" value="Images/bat&cat.jpg">
</div>
<div class="button">
    <input type="submit" name="Enregistrer" value="Enregistrer">
    <input type="submit" name="Telecharger" value="Télécharger">
</div>
</form>

</body>
</html>
