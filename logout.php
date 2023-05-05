<?php
session_start();
session_destroy();
setcookie("last_logout",date("m/d/y H:i"),time()+10*24*60*60);
header('Location: form.html');
exit();
?>