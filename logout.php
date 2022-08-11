<?php

session_start();
session_destroy();
header("Location: http://php.localhost/index.php");