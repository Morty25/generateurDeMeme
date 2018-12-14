                        
                        <!-- Balise HTML dans la vue -->
<!DOCTYPE html>
<html lang = "fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Super Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/Style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<!--Main Navigation-->
<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="Home">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Generator">Meme Generator</a>
            </li>
        </ul>
    </div>
    <div class="socialmedia">
        <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
        <a href="https://twitter.com" target="_blank" class="fa fa-twitter"></a>
     </div>
</nav>

<div class="view">
    <img class="logo" src="images/logo-super-generator.png">
</div>

</header>


<section id='carousel'>

<!-- inseration of images into carousel -->

<section id='carousel' >
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                        <?php foreach ($images as $key => $valueimages) : ?>
                            <?php if( $key % 3 == 0) { ?>
                                <div class="carousel-item <?php if($key ==0 ) echo 'active'; ?>">
                            <?php } ?>
                            <img class="miniature"id='MM' alt='images de MM' src="images/memes/<?=$valueimages['url']?>">
                            <?php if ($key % 3 == 2 ) { ?>
                            </div>
                            <?php } ?>
                        <?php endforeach;  ?>
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
<div class="container">
        <div class="row">
            <article id="article" class="col-md-8" onmousedown="curseur(event);">
  

                <div id="texteHaut"> coucou </div>
                <div id="texteBas"> coucou </div>
                <div id="image"></div>
            </article>
            <article id="commande" class="col-md-4">

            <section>

</section> 
                <h2>Commande</h2>
                <form action="?page=meme" method="post" enctype="multipart/form-data">
                    <input name="textehaut"id="inputEnvoyeUn" type="text" oninput="envoyerTextUn()" />
                    <input name="textebas" id="inputEnvoyeDeux" type="text" oninput="envoyerTextDeux()" />
                    <input type="hidden" id="Rendu" name="Rendu" value=""><br/>
                                <option value="rien">Rien</option>
                                <option value="divUn">Div Un</option>
                                <option value="divDeux">Div Deux</option>
                            </select>
                <input type="range" min="10" max="100" step="1" value="25" id="inputRange" oninput="grossirText()">
            </article>
   
        </div>   
           
</div>
        <button type="submit" value="Génère ton mème" id="bouton_envoi"  name="envoyer"  >Génère votre mème</button>            
                     
</form>
         
        <footer class="footer">
                <div class="container">
            

                    <span >Crated by Laura, Anjum, alain and Emilie : ACS students .copy rights 2018</span>
                </div>
         </footer>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>  
    <script src="js/js.js"></script>
</body>
</html>

