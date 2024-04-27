<?php  
$db_host = "localhost";
$db_user = "thannam_thuser2";
$db_password = "70024269";
$db_name = "thannam_dbname2";

try { 
    $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("SET CHARACTER SET utf-8");
} catch (PDOException $e) {
    $e->getMessage();
}