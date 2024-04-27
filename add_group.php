<?php
session_start();
require_once("app/conn_pdo.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);
// echo 'testing';

for ($i = 1; $i <= $_POST["hdnLine"]; $i++) {

    $id = $_POST["id$i"];
    $namegroup = $_POST["namegroup$i"];
    $idgroup = $_POST["idgroup$i"];
    $match1 = $_POST["match1$i"];
    $catNum = $_POST["catNum$i"];



    $numMatch = $db->query("SELECT count(id) from thannam_champion_groupteam WHERE id='$id'")->fetchColumn();

    if ($numMatch == 0) {
        $insertA = $db->prepare("INSERT INTO thannam_champion_groupteam 
    (id,namegroup,idgroup,match1,catNum) VALUES
    ('$id','$namegroup','$idgroup','$match1','$catNum')");
        $insertA->execute();
    }
} ?>

<a href="https://thannam.net/2016/admin3/ps5_add.php?id=<?= $match1 ?>">NEXT >> </a>