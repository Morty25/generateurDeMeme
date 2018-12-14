<?php
include('Models/connectionBDD.php');
/***Ajoute les memes dans la base de données***/
// Insérer $cheminImageFinale et $nom
function insertMemeUrl($cheminImageFinale, $nom) {
	global $bdd;
	$insert = $bdd -> prepare("INSERT INTO `mm`(`url_memes`, `titre`, `cheminlocal`) VALUES (?,?,?);");
	$insert -> execute([$cheminImageFinale, $nom, $cheminImageFinale]);
	$insert -> fetchAll();
}
// function pickAFewMemes() {
// 	global $bdd;
// 	$pickMemes = $bdd -> prepare ("SELECT * FROM `mm` LIMIT 15 ;");
// 	$pickMemes-> execute();
// 	$pickMemes->fetchAll();
// }