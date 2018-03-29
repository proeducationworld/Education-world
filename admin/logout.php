<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
session_start();
unset($_SESSION["admin"]);
session_destroy();
$url = "../index.php";
header("Location:$url");
?>
