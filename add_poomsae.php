<?php
session_start();
require_once("app/conn_pdo.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);
// echo 'testing';
$match = $_GET['match'];

for ($i = 1; $i <= $_POST["hdnLine"]; $i++) {

    $id = $_POST["id$i"];
    $idteam = $_POST["idteam$i"];
    $nameA = $_POST["nameA$i"];
    $nameB = $_POST["nameB$i"];
    $nameC = $_POST["nameC$i"]; 

    $sex = $_POST["sex$i"];
    $match1 = $_POST["match1$i"];
    $catA = $_POST["catA$i"];

    $ps_cat = $_POST["ps_cat$i"]; 


    $numMatch = $db->query("SELECT count(id) from thannam_champion_poomsae WHERE id='$id'")->fetchColumn();

    if ($numMatch == 0) {
        $insertA = $db->prepare("INSERT INTO thannam_champion_poomsae 
    (id,idteam,nameA,nameB,nameC,match1,sex,catA,ps_cat) VALUES('$id','$idteam','$nameA','$nameB','$nameC','$match1','$sex','$catA','$ps_cat')");
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


            <a href="https://thannam.net/2016/admin3/ps5_poomsae.php?id=<?= $match ?>" class="btn btn-danger"> BACK </a>
            <a href="https://thannam.net/2016/admin3/ps5_teamm.php?match=<?= $match ?>" class="btn btn-info">NEXT >> </a>
        </div>
    </div>