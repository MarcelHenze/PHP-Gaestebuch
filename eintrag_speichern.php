<?php
include_once 'functions.php';
$titel = htmlspecialchars($_POST['titel']);
$inhalt = nl2br(htmlspecialchars($_POST['inhalt']));
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$homepage = htmlspecialchars($_POST['homepage']);
$erstellungszeitpunkt = date('d.m.Y H:i:s');
$eintraege = array(
		'titel'=>$titel,
		'inhalt'=>$inhalt,
		'name'=>$name,
		'email'=>$email,
		'homepage'=>$homepage,
		'datum'=>$erstellungszeitpunkt);
setzeEintraege($eintraege);

header("Location: eintrag_danke.php");
?>