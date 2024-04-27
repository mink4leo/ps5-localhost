<?php
session_start();
require_once("app/conn_pdo.php");

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

//============= MATCH
$match_stmt = $db->prepare("SELECT * FROM thannam_match WHERE id = '" . $_SESSION['match'] . "' ");
$match_stmt->execute();
$match_res = $match_stmt->fetch(PDO::FETCH_ASSOC);

//=============START
$stmt_start = $db->prepare("SELECT * FROM $dataStart_flag");
$stmt_start->execute();
$res = $stmt_start->fetch(PDO::FETCH_ASSOC);
#--------------- 


// //=====================PLAYER
// $player_select = $db->prepare("SELECT * From thannam_champion_poomsae where id='$res[idstart]' and match1='$_GET[match]'");
// $player_select->execute();
// $num_member = $player_select->rowCount();
// $row = $player_select->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THANNAM SCORE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script type="text/JavaScript">
        // <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
    </script>
</head>

<body onLoad="JavaScript:AutoRefresh(5000);">



    <?php
    $score_select = $db->prepare("SELECT * FROM $dataStart_flag");
    $score_select->execute();
    ?>
    <div class="card-group">
        <?php
        while ($row = $score_select->fetch()) {
            if ($row['r1'] == 2) {
                $colorA = "danger";
                $colorB = "RED";
            } else if ($row['r1'] == 1) {
                $colorA = "primary";
                $colorB = "BLUE";
            } else {
                $colorA = "";
                $colorB = "";
            }
        ?>
            <div class="card text-white bg-<?= $colorA; ?> mb-3" >
                <div class="card-header bg-dark text-center" style="font-size: 24px;">J<?= $row['id'] ?></div>
                <div class="card-body text-white text-center" style="font-size: 24px;"><?= $colorB; ?> <i class="bi bi-flag"></i></div>
            </div>
        <?php } ?>
    </div>
 
 

</body>

</html>