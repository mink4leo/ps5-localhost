<?php  
// $db_host = "localhost";
// $db_user = "root";
// $db_password = "";
// $db_name = "thannam2";

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "thannam";

try { 
    $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("SET CHARACTER SET utf-8");
} catch (PDOException $e) {
    $e->getMessage();
}

$dataStart = 'thannam_poomse_start5' ;
$dataStart_flag = 'thannam_poomse_start5_flag' ;