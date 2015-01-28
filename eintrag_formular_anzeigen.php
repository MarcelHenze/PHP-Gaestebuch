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
	<h2>Neuen Beitrag verfassen</h2>
	<div>
		<form class="eintragbox" action="./eintrag_speichern.php" method="post">
			<div>
				<p>Titel:</p>
				<input type="text" name="titel" placeholder="Titel"
					required="required">
			</div>
			<div>
				<p>Inhalt:</p>
				<textarea name="inhalt" placeholder="Eintrag" required="required"></textarea>
			</div>
			<div>
				<p>Name:</p>
				<input type="text" name="name" placeholder="Name" required="required">
			</div>
			<div>
				<p>E-Mail:</p>
				<input type="email" name="email" placeholder="email@email.de">
			</div>
			<div>
				<p>Homepage:</p>
				<input type="text" name="homepage"
					placeholder="http://www.homepage.de">
			</div>
			<div>
				<button type="submit" class="button">Eintrag verfassen</button>
				<a href="index.php"><button type="button" class="button">Zurück zum Gästebuch</button></a>
			</div>
		</form>
	</div>
	</div>
</body>