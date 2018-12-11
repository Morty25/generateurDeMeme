
<?php
/*  connexion à personnaliser pour chacun des utilisateurs */
    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=generator;charset=UTF8", "root", "");
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
            
 