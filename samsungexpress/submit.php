<?php
	include('./database/include.php');
	
?>

<?php
	db_connect();
	
	$type = $_GET['type'];
	$year = $_GET['year'];
	$month = $_GET['month'];
	$day = $_GET['day'];
	
	$start = $_GET['start'];
	$end = $_GET['end'];
	
	$name = $_GET['name'];
	$phone = $_GET['cellphone'];
	
	$query = "INSERT INTO astomusic.request (name, phone, start, end, type, year, month, day) VALUES ('$name', '$phone', '$start', '$end', '$type', '$year', '$month', '$day')";
	
	mysql_query($query) or die('Error, insert failed.');

/*	
	
	$flags = mail("astomusic@naver.com", $phone, $request);

	if($flags) {
		echo "Success !!";
	} else {
		echo "Failed !!";
	}
	
	$from = "astomusic@naver.com";
	$to = "astomusic@naver.com";
	$subject = "test";
	$message = "<html><body>";
	$message .= $request;
	$message .= $phone;
	$message .= "</body></html>";
	
	$result = send_mail($from, $to, $subject, $message);
	echo $result;
*/
	db_disconnect();

	echo "<html xmlns='http://www.w3.org/1999/xhtml' lang='ko' xml:lang='ko'>
<head>
<title>삼성운수::SAMSUNGEXPRESS</title>
<meta name='apple-mobile-web-app-capable' content='yes'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<link rel='stylesheet' type='text/css' href='style.css'>

<meta name='viewport' content='width=320, initial-scale=0.5, minimum-scale=0.5, maximum-scale=1.0, user-scalable=1'>

<script language='JavaScript'>
	window.scrollTo(0, 0.9);
</script>
</head>

<body>
	<a href='#'><img src='./img/completed.png'>
</body>
</html>";
	exit();

?>

<?php
	function send_mail($from, $to, $subject, $message) {
		$charset = 'uft-8';
		$body = iconv('uft-8','euc-kr',$message);
		$encoded_subject = "=?".$charset."?B?".base64_encode($subject)."?=\n";
		$encoded_to = "\"=?".$charset."?B?".base64_encode("samsungexpress")."?=\"<".$to.">";
		$encoded_from = "\"=?".$charset."?B?".base64_encode("user_request")."?=\"<".$from.">";
		$header = "MIME-Version: 1.0\n".
		"Content-Type: test/html; charset=eur-kr; format=flowed\n".
		"To: ".$to."\n".
		"From: ".$from."\n".
		"Return-Path".$from."\n".
		"um:content-classes:message\n".
		"Content-Transfer-Encoding: 8bit\n";
		
		$mail_sent = @mail($encoded_to, $encoded_subject, $body, $header);
		
		return $mail_sent;
	}
?>