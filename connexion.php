<?php
/*  connexion à personnaliser pour chacun des utilisateurs */
// $servername = "localhost";
// $username = "anjumh";
// $password = "hGXzpppioQHWmQ==";
// $dbname = "anjumh_generator";
//     try
//     {
//         $bdd = new PDO("mysql:host=promo-24.codeur.online;dbname=$dbname", $username, $password);
//     }
//     catch(Exception $e)
//     {
//         die('Erreur : '.$e->getMessage());
//     }
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "generator";
    try
    {
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }