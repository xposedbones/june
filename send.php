<?php 
	include("connect.php");
	$n = htmlspecialchars($_POST["name"]);
	$c = htmlspecialchars($_POST['content']);
	$d = htmlspecialchars($_POST['desc']);

	if($n === "" || $c === "" || $d === ""){
		header("Location: index.php?status=nay");
		exit();
	}

	//$db->query("INSERT INTO message (name,content,describe) VALUES (`$n`, `$c`, `$d`)");
	$req = $db->query('INSERT INTO message (`name`, `content`, `describe`) VALUES ('.$db->quote($n).','.$db->quote($c).','.$db->quote($d).')');
	header("Location: index.php?status=yay");
?>