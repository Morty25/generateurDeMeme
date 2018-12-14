<?php
$host = '127.0.0.1';
	$db = 'generator';
	$user ='root';
	$pass = '';
	$charset = 'utf8mb4';
	$dbh = "mysql:host=$host;dbname=$db;charset=$charset";
	$options = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
	];
	try {
		$dbh = new PDO($dbh, $user, $pass, $options);
	
	} catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}
	


	// either for sever
// 	$servername = "localhost";
// $username = "anjumh";
// $password = "hGXzpppioQHWmQ==";
// $dbname = "anjumh_generator";






// try {
//     $conn = new PDO("mysql:host=promo-24.codeur.online;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// }
// catch(PDOException $e) {
//     echo "Error: " . $e->getMessage();
