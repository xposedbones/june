<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bonne fête Félicia!</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,700,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php include("connect.php");
		$q = $db->query("SELECT * FROM message");
		$messages = $q->fetch();
	?>
	<div class="wrap">
		<h1>Bonne fête Félicia!</h1>
		<?php if(isset($_GET['status']) && $_GET['status'] === "yay"):  ?>
		<h1>Merci!</h1>
	<?php endif; ?>
	<?php if(isset($_GET['status']) && $_GET['status'] === "nay"):  ?>
		<h1>Stp :(</h1>
	<?php endif; ?>
		<p>Laisse lui un beau petit (ou gros) message pour lui dire à quel point <strong>tu l'aime</strong>!</p>
		<form action="send.php" method="post">
			<input type="text" name="name" placeholder="Ton nom">
			<textarea name="content" placeholder="Ton message pour Félicia"></textarea>
			<input type="text" name="desc" placeholder="Décris Félicia en un mot (optionnel)">
			<button>Envoye ton voeux</button>
		</form>
	</div>
</body>
</html>