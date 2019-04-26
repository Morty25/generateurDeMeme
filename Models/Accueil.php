 <?php
    /*  On se connecte à la BDD  */
    include('connexion.php');

    //     //function to retrive meme already done from table mm.
    function getAllMeme()
    {
        global $bdd;

        $images = $bdd->query('SELECT * FROM mm');

        return $images->fetchAll();
    }
