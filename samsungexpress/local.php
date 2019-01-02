<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">
<head>
<title>삼성운수::SAMSUNGEXPRESS</title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">


<meta name="viewport" content="width=320, initial-scale=0.5, minimum-scale=0.5, maximum-scale=1.0, user-scalable=1">

<script language="JavaScript">
	window.scrollTo(0, 0.9);
</script>
</head> 

<body>
<?php
	include('./database/include.php');
	
?>

<?php
	db_connect();
	$id = $_GET['id'];
	$name = $_GET['name'];
	$query = "SELECT * FROM astomusic." . $id;
	$result = mysql_query($query) or die('Error, failed.');
	//echo $result;
	echo "<img src ='./img/local_midtop.png'><br>";
	echo "<div style = 'position:relative; left:2.5em; font-size:14px;'><b>" . $name . " 우수업체 현황</b></div>";
	while($row = mysql_fetch_array($result)) {
		echo "<br>";
		echo "<div style = 'position:relative; left:3em; font-size:12px;'>업체상호 : " . $row['name'] . "<br>";
		echo "대표전화 : <a href='tel:" . $row['tel'] . "'>" . $row['tel'] . "</a><br>";
		echo "업체정보 : " . $row['info'] . "</div><br>";
	}
	
	db_disconnect();
	
?>
</body>

</html>