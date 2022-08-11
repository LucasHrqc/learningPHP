<?php
/* 
    Destroying session and cleaning cookies when logging out.
*/
session_start();
session_destroy();
unset($_COOKIE['usuario']);
setcookie('usuario', '');
header("Location: http://php.localhost/index.php");