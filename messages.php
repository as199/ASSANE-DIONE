<!DOCTYPE html>
<html>
<head>
	<title>affichage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="general">
		<div class="entete">
		<h1 class="h1">Tableau</h1>
		</div>
	<div class="containerm">
		<table border="2px solid" class="tableaum">
<tr><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Numéro</th><th>Genre</th><th>Satisfait</th><th>Langue</th></tr>
<?php 
	$messages = file_get_contents('messages.json');
	$messages = json_decode($messages, true);
	for ($i=0; $i <count($messages) ; $i++) :

		 ?>
<tr><td><?php echo $messages[$i]['nom']; ?></td><td><?php echo $messages[$i]['prenom']; ?></td><td><?php echo $messages[$i]['adresse']; ?></td><td class="num"><?php echo $messages[$i]['numero']; ?></td><td><?php echo $messages[$i]['genre']; ?></td><td><?php echo $messages[$i]['satisfait']; ?></td><td><?php echo $messages[$i]['langue']; ?></td></tr> 
<?php endfor;  ?>
</table>
	</div>
	</div>
	
	
	
</body>
</html>