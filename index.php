<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Marcel's Gästebuch</title>
<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="wrapper">
	<h2>Hallo und Willkommen auf Marcel's Gästebuch</h2>
	<div class="textbox">
		<?php
		include_once 'functions.php';
		if(file_exists('./daten/eintraege.txt')) {
			$recoveredArray = array_reverse(holeEintraege());
		} else {
			$recoveredArray = array_reverse(generateDummyData());
		}
		foreach ($recoveredArray as $index) {
		$datum = explode(' ',$index['datum']);?>
		<div id="eintrag">
			<p id="titel"><?php echo $index['titel'];?></p>
			<blockquote id="inhalt"><?php echo $index['inhalt'];?></blockquote>
			<p id="autor">Verfasst von <?php if($index['homepage'] != null){ ?>
				<a id="homepage" href="http://<?php echo $index['homepage']; ?>"><?php echo $index['name'] ?></a>
				<?php } else {?>
				<?php  echo $index['name']; }?> am <?php echo $datum[0];?> um <?php echo $datum[1];?>
			</p>
		</div>
		<?php }?>
		<div>
			<a href="eintrag_formular_anzeigen.php"><button type="button" class="button">Eintrag verfassen</button></a>
		</div>
	</div>
	</div>
</body>
</html>