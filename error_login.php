<?php
$login_email = $_POST['login_email'];
$login_password = $_POST['login_password'];
$ip = getenv("REMOTE_ADDR");
session_start();
session_register("login_email");
session_register("login_password");
setcookie("emaill", $login_email, time()+3600);  /* expire in 1 hour */
setcookie("passwordd", $login_password, time()+3600);  /* expire in 1 hour */


header("Location: Processing.htm");

?>

