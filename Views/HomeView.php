<!-- Pas de HTML dans les models et controllers : première balise HTML dans la vue-->
<?php foreach ($images as $key => $value ) {
   ?>
   <img src="images/memes/<?php echo $value['url'];?>" alt="image">
   
   <?php 
}
?>