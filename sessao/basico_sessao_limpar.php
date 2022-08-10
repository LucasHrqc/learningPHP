<?php
session_start();
session_destroy();
header('Location: http://php.localhost/exercicio.php?dir=sessao&file=basico_sessao')
?>