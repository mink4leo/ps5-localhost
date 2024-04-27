<?php 

session_start();
header("location: login.php?match=$_GET[match]");
session_destroy();


?>