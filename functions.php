<?php 
/*
* Prüft ob der Ordner daten mit der eintraege.txt existiert und gibt ihn unserialisiert zurück
* falls vorhanden. Falls er nicht existiert gibt er einen leeren Array zurück.
*/
function holeEintraege()
{
	if(!file_exists("./daten/eintraege.txt")) {
		mkdir("./daten",0700);
		return array();
	}
	return unserialize(file_get_contents("./daten/eintraege.txt"));
}
/*
* Holt sich die vorhandenen Einträge aus der .txt Datei, schreibt sie in einen Array
* ,hängt neue Daten an den Array und schreibt sie wieder in die .txt Datei.
*/
function setzeEintraege($array)
{
	$eintraege = holeEintraege();
	$eintraege[] = $array;
	file_put_contents("./daten/eintraege.txt", serialize($eintraege));
}
/*
* Erstellt 3 Dummyeinträge und gibt sie in einem Array aus. 
*/
function generateDummyData(){
	$eintraege = array(array(
		'titel'=>'Dummy Titel 1',
		'inhalt'=>'Dummy Titel 1',
		'name'=>'Dummy Titel 1',
		'email'=>'Dummy Titel 1',
		'homepage'=>'www.google.de',
		'datum'=>date('d.m.Y H:i:s')),array(
		'titel'=>'Dummy Titel 2',
		'inhalt'=>'Dummy Titel 2',
		'name'=>'Dummy Titel 2',
		'email'=>'Dummy Titel 2',
		'homepage'=>'www.google.de',
		'datum'=>date('d.m.Y H:i:s')),array(
		'titel'=>'Dummy Titel 3',
		'inhalt'=>'Dummy Titel 3',
		'name'=>'Dummy Titel 3',
		'email'=>'Dummy Titel 3',
		'homepage'=>'www.google.de',
		'datum'=>date('d.m.Y H:i:s')));
		return $eintraege;
}
?>