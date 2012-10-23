<!DOCTYPE html>
<html>
	<head>
		<title>Florian Dejonckheere</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet" type="text/css">
		<link href="/style.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8" />
	</head>
	<body>
		<div id="container">
			<div id="title">Florian Dejonckheere</div>
			<nav>
<?php
	$file = "menu.html";
	$fMenu = fopen($file, "r");
	$sMenu = fread($fMenu, filesize($file));
	fclose($fMenu);
	echo $sMenu;
?>
			</nav>
			<div id="content">
				<article>
					<span class="artTitle">Contact</span>
					<div class="artText">
						<?php
$sName = $_POST['name'];
$sEmail = $_POST['email'];
$sText = $_POST['text'];
$sError = "";

if(empty($sName)) $sName = "Anonymous";
//if(empty($sName)) $sError += "You have not entered a valid name.<p>";
if(empty($sEmail)) $sError += "You have not entered a valid email.<p>";
if(empty($sText)) $sError += "You have not entered a valid body.<p>";

if(!empty($sError)){
	echo "Errors occurred while sending the message. See below for details.<p>";
	echo $sError;
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
	$date = date('d/m/Y');
	$time = date('H:i:s');
	$sToken = substr(md5($ip),0,6);


	$headers = "From: {$sEmail}" . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$emailbody = "<p>{$sText}</p>
	<p>This message was sent by <strong>{$sName}</strong> from the IP Address: <strong>{$ip}</strong> on <strong>{$date}</strong> at <strong>{$time}</strong></p>";
	mail("florian+contact@floriandejonckheere.be","New message from {$sToken} ",$emailbody,$headers);
	echo "Message sent. <a href='index.html'>Return to the homepage</a>";
}
?>
					</div>
				</article>
			</div>
			<footer>
				<a href="/secure.html" title="Secure login"><img src="//icons/lock.png" alt="Lock" /></a> - Design by Florian Dejonckheere
			</footer>
		</div>
	</body>
</html>
