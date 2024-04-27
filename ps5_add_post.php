<?php
session_start();
require_once('app/conn_pdo.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);


$numMatch = $db->query("SELECT count(id) from thannam_match WHERE id='$_POST[id]'")->fetchColumn();

if ($numMatch == 0) {
    $insertA = $db->prepare("INSERT INTO thannam_match (id,nameA,pass) VALUES('$_POST[id]', '$_POST[nameA]', '$_POST[pass]')");
    $insertA->execute();
} else {
    echo 'Already exists';
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD MATCH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="position-relative mt-5">
        <div class="position-absolute top-50 start-50 translate-middle">
            <a href="https://thannam.net/2016/admin3/ps5_add.php?id=<?= $_POST['id'] ?>" class="btn btn-danger"> BACK </a>
            <a href="https://thannam.net/2016/admin3/ps5_poomsae.php?match=<?= $_POST['id'] ?>" class="btn btn-info">NEXT >> </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>