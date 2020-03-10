<?php
switch ($_SESSION['language']) {
case 'English':
	include_once $path."langs/english.php";
	break;
case 'Turkish':
	include_once $path."langs/turkish.php";
	break;
default:
	$_SESSION['language'] = "Turkish";
	include_once $path."langs/turkish.php";
	break;
}
?>