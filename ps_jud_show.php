<?php
session_start();
require_once("app/conn_pdo.php");

error_reporting(0);
// ini_set('display_errors',1);
//==============MATCH judNum
$stmt_match = $db->prepare("SELECT * FROM thannam_match where id = '$_GET[match]'");
$stmt_match->execute();
$resmatch = $stmt_match->fetch(PDO::FETCH_ASSOC);

//===============START
$stmt_start = $db->prepare("SELECT * FROM $dataStart");
$stmt_start->execute();
$res = $stmt_start->fetch(PDO::FETCH_ASSOC);
#---------------
if ($res['idstart'] <> 0) {
    if ($res['poomsae'] == '1') {
        $psp = 'POOMSAE INDIVIDUAL';
        $ps = 1;
        $pscat = 2;
        // $dataa = 'thannam_champion_poomse';
    }
    if ($res['poomsae'] == '2') {
        $psp = 'POOMSAE  PAIR';
        $ps = 2;
        $pscat = 3;
        // $dataa = 'thannam_champion_poomse2';
    }
    if ($res['poomsae'] == '3') {
        $psp = 'POOMSAE TEAM';
        $ps = 3;
        $pscat = 4;
        // $dataa = 'thannam_champion_poomse3';
    }
    if ($res['poomsae'] == '8') {
        $psp = 'POOMSAE TEAM';
        $ps = 6;
        $pscat = 8;
        // $dataa = 'thannam_champion_poomse3';
    }
    //====================
    $stmt_select = $db->prepare("SELECT * FROM $dataStart WHERE totala <> 0");
    $stmt_select->execute();
    $numman = $stmt_select->rowCount();

    //=====================PLAYER
    $player_select = $db->prepare("SELECT * From thannam_champion_poomsae where id='$res[idstart]'");
    $player_select->execute();
    $num_member = $player_select->rowCount();
    $row = $player_select->fetch(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THANNAM SCORE POOMSAE</title>
    <script type="text/JavaScript">
        <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
    </script>
    <style>
        /* img {
            /* width: 90%; 
        } */

        h4 {
            font-size: 60px;
            margin-top: 30px;
            color: blue;
        }

        .waitA {
            text-align: center;
        }

        .waitB {
            border: 2px solid orangered;
            color: #fff;
            font-size: 30px;
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #21D4FD;
            background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);


            /* text-shadow: #2BD2FF; */
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);


        }
    </style>
</head>

<body onLoad="JavaScript:AutoRefresh(5000);">


    <?php if ($res['idstart'] > 0) { ?>

        <h2 class="text-center">JUDGE <?php echo $_GET['j']; ?></h2>
        <div class="card text-center">
            <div class="card-header">
                <?php if ($ps == 1) { ?>
                    <h4><?php echo $row['nameA']; ?></h4>
                <?php } else { ?>
                    <?php
                    if ($num_member > 0) {
                        $stmt_pair = $db->prepare("SELECT * FROM thannam_champion_poomsae WHERE id = '$res[idstart]'");
                        $stmt_pair->execute();
                        $num_pair = $stmt_pair->rowCount();

                        while ($rs_pair = $stmt_pair->fetch()) {
                            echo $rs_pair['nameA'];
                            if ($rs_pair['nameB'] <> "") {
                                echo ', ';
                                echo $rs_pair['nameB'];
                            }
                            if ($rs_pair['nameC'] <> "") {
                                echo ', ';
                                echo $rs_pair['nameC'];
                            }
                            echo '<br>';
                            // echo $pscat;
                            // echo 'wwww';
                        }
                    } else {
                        echo '<h2>NO PLAYER</h2>';
                    }
                    ?>
                <?php } ?>
                <?php echo $psp; ?>
            </div>
            <div class="card-body">
                
                <a href="ps_jud01.php?j=<?= $_GET['j'] ?>" class="btn btn-success btn-lg ">POOMSAE 1</a>
                <a href="ps_jud02.php?j=<?= $_GET['j'] ?>" class="btn btn-primary btn-lg ">POOMSAE 2</a>
                <a href="ps_jud_flag.php?j=<?= $_GET['j'] ?>" class="btn btn-danger btn-lg ">ยกธง</a>
                <a href="ps_jud01_new.php?j=<?= $_GET['j'] ?>" class="btn btn-info btn-lg ">POOMSAE 1 (New)</a>
                <a href="ps_jud01_free.php?j=<?= $_GET['j'] ?>" class="btn btn-success btn-lg "  style="background-color: #da30f8;">PS FREE</a>
            </div>

        </div>
    <?php } else { ?>
        <div class="col waitA">
            <h4 class="text-center">
                รอแป๊บ
            </h4>
            <div class="waitB">WAITING FOR NEXT PLAYER</div>
        </div>
    <?php } ?>

</body>

</html>