<?php
session_start();

$_SESSION['user'] = 0;
$_SESSION['update'] = 0;
header("Location: http://localhost/project15");
?>