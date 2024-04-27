<?php
session_start();
require_once("app/conn_pdo.php");

//============= MATCH
$match_stmt = $db->prepare("SELECT * FROM thannam_match WHERE id = '" . $_SESSION['match'] . "' ");
$match_stmt->execute();
$match_res = $match_stmt->fetch(PDO::FETCH_ASSOC);

//=============START
$stmt_start = $db->prepare("SELECT * FROM $dataStart_flag");
$stmt_start->execute();
$res = $stmt_start->fetch(PDO::FETCH_ASSOC);
#---------------  


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>THANNAM SCORE POOMSAE</title> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .hello {
            line-height: 200px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 100px;
            font-weight: bold;
            -webkit-animation-name: wave;
            animation-name: wave;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            /* font-family: "Righteous", cursive; */
            -webkit-text-stroke-width: 3px;
            -webkit-text-stroke-color: black;
        }

        .hello:nth-of-type(1) {
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-delay: 0.55s;
            animation-delay: 0.55s;
        }

        .hello:nth-of-type(2) {
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
        }

        .hello:nth-of-type(3) {
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-delay: 0.05s;
            animation-delay: 0.05s;
        }

        .hello:nth-of-type(4) {
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-delay: -0.2s;
            animation-delay: -0.2s;
        }

        @-webkit-keyframes wave {

            40%,
            50% {
                transform: translate(-50%, -65%) scale(1.05);
            }

            0%,
            90%,
            100% {
                transform: translate(-50%, -45%) scale(0.95);
            }
        }

        @keyframes wave {

            40%,
            50% {
                transform: translate(-50%, -65%) scale(1.05);
            }

            0%,
            90%,
            100% {
                transform: translate(-50%, -45%) scale(0.95);
            }
        }
    </style>

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
    // echo $numman1;

    $stmt_select = $db->prepare("SELECT * FROM $dataStart_flag WHERE r1 > 0");
    $stmt_select->execute();
    $numman1 = $stmt_select->rowCount();

    $red_select = $db->prepare("SELECT * from $dataStart_flag WHERE r1 = '2'");
    $red_select->execute();
    $redWin = $red_select->rowCount();
    $blue_select = $db->prepare("SELECT * from $dataStart_flag WHERE r1 = '1'");
    $blue_select->execute();
    $blueWin = $blue_select->rowCount();


    if ($numman1 == 3) {
        if ($redWin > $blueWin) {
            $bgg = "danger";
            $bg = "RED";
        } else if ($redWin < $blueWin) {
            $bgg = "primary";
            $bg = "BLUE";
        } else {
            $bgg = "";
            $bg = "";
        }
    }
 
    ?>

    <div class="row justify-content-md-center">
        <!-- <div class="row  row-cols-3 row-cols-md-3 g-4 text-center"> -->
        <div class="col-md-2">
            <div class="card text-white bg-<?= $bgg; ?>">
                <div class="card-body text-center">
                    <h5 class="card-title">ROUND 1</h5>
                    <p class="card-text"><i class="bi bi-check-circle-fill"></i></p>
                </div>
            </div>
        </div>
          
    </div>

    <?php if ($bgg != $bgg2 && $bgg3 != "") { ?>
        <div class='hello' style='color: <?= $bg3 ?>'>
            <?= $bg3 ?> WIN
        </div>
    <?php } ?>

    <?php if ($bgg == $bgg2 && $bgg != "") { ?>
        <div class='hello' style='color: <?= $bg ?>'>
            <?= $bg ?> WIN
        </div>
    <?php } ?>





</body>

</html>