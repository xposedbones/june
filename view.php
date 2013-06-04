<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bonne fête Félicia!</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,700,300' rel='stylesheet' type='text/css'>
	<script src="js/jquery.js"></script>
	<script src="js/masonry.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<?php
		include("connect.php");
		$r = $db->query("SELECT * FROM message ORDER BY id DESC");?>
		
		<div id="message">
			<?php while($test = $r->fetch()): ?>
			<article>
				<div class="content" data-author="Bonne fête de: <?php echo $test['name']; ?>"><p><?php echo $test['content'] ?></p>
				<?php if($test['describe'] !== ""): ?>
					<div class="desc">Félicia en un mot: <strong><?php echo $test['describe'] ?></strong></div>
				<?php endif; ?>
				</div>
				
			</article>
			<?php endwhile;	?>
		</div>
	
</body>
</html>