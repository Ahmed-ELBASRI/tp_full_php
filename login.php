<?php
if(isset($_POST['email']) && isset($_POST['password'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	if(!empty($email) && $email == strrev($password)) {
		session_start();
		$_SESSION['login'] = $email;
		header('Location: secret.php');
		exit();
	} else {
		header("location : form.html");
	}
}
?>