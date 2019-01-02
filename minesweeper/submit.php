<?php
	include('./include.php');
	
?>

<?php
	db_connect();
	
	$name = $_GET['name'];
	$time = $_GET['time'];
	
	$query = "INSERT INTO astomusic.score (name, time) VALUES ('$name', '$time')";
	
	mysql_query($query) or die('Error, insert failed.');

?>

<?php
	header("location: http://astomusic.dothome.co.kr/minesweeper/minesweeper.html");
?>