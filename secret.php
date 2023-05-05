<?php
session_start();
if(isset($_SESSION['login'])) {
	$login = $_SESSION['login'];
	echo "Welcome  $login <br>";
	echo "message secret<br>";
	echo "<a href='logout.php'>logout</a>";
	$last_logout = $_COOKIE["last_logout"];
	echo " <br>last logout: $last_logout";
} else {
	header('Location: form.html');
	exit();
}
?>