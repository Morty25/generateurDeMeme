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
</nav>

<div class="view">
    <img class="logo" src="images/logo-super-generator.png">
</div>

</header>

<main role="main">
        <div class="album py-5">

            <div class="container">
                <div class="row">
                    <?php foreach ($images as $key => $image):?>
                        <div class="col-md-4">
                             <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" src= "<?= 'memedone/'.$image['image']?>">
                               
                             </div>
                         </div>
                            <?php endforeach; ?> 
                </div>
                    
               
            </div>
           
        </div>
       
    </main>
         <footer class="footer">
                <div class="container">
                    <!-- <a id="on-fb" href="https://www.facebook.com">Facebook</a>
                    <a id="on-tw" href="https://twitter.com">Twitter</a><br> <br> -->

                    <span >Crated by Laura, Anjum, alain and Emilie : ACS students .copy rights 2018</span>
                </div>
         </footer>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/js.js"></script>
</body>
</html>

