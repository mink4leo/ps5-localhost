<?php
session_start();
require_once("app/conn_pdo.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);
// echo 'testing';

for ($i = 1; $i <= $_POST["hdnLine"]; $i++) {


    $id = $_POST["id$i"];
    $nameA = $_POST["nameA$i"];
    $match1 = $_POST["match1$i"];


    $numMatch = $db->query("SELECT count(id) from thannam_champion_teamm WHERE id='$id'")->fetchColumn();

    if ($numMatch == 0) {
        $insertA = $db->prepare("INSERT INTO thannam_champion_teamm 
    (id,nameA,match1,password,email,datea,ip) VALUES('$id','$nameA','$match1','pass','email','0000-00-00','ip')");
        $insertA->execute();
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="position-relative mt-5">
        <div class="position-absolute top-50 start-50 translate-middle">

            <a href="https://thannam.net/2016/admin3/ps5_poomsae.php?id=<?= $match1 ?>" class="btn btn-danger"> BACK </a>
            <a href="https://thannam.net/2016/admin3/ps5_group.php?match=<?= $match1 ?>" class="btn btn-info">NEXT >> </a>
        </div>
    </div>