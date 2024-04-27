<?php
session_start();
require_once("app/conn_pdo.php");

error_reporting(0);
// ini_set('display_errors', 1);

$stmt_start = $db->prepare("SELECT * FROM $dataStart_flag");
$stmt_start->execute();
$res = $stmt_start->fetch(PDO::FETCH_ASSOC);
#---------------
// if ($res['poomsae'] == '1') {
//     $psp = 'POOMSAE INDIVIDUAL';
//     $ps = 1;
//     // $dataa = 'thannam_champion_poomse';
// }
// if ($res['poomsae'] == '2') {
//     $psp = 'POOMSAE  PAIR';
//     $ps = 2;
//     // $dataa = 'thannam_champion_poomse2';
// }
// if ($res['poomsae'] == '3') {
//     $psp = 'POOMSAE TEAM';
//     $ps = 3;
//     // $dataa = 'thannam_champion_poomse3';
// }

//=====================PLAYER
$player_select = $db->prepare("SELECT * From thannam_champion_poomsae where id ='$res[idstart1]'");
$player_select->execute();
$row = $player_select->fetch(PDO::FETCH_ASSOC);

//=====================CATA
$catA_select = $db->prepare("SELECT * FROM thannam_champion_groupteam WHERE id ='$row[catA]'");
$catA_select->execute();
$catA = $catA_select->fetch(PDO::FETCH_ASSOC);

//=========== UPDATE SCORE
// $update_score0 = $db->prepare("UPDATE thannam_champion_poomsae SET totalA3 = '0.00' WHERE id = '$row[id]' ");
// $update_score0->execute();
// $update_stmt = $db->prepare("UPDATE thannam_match SET judNum = '$jnum' WHERE id = '$jid'");
// if (isset($_REQUEST['submitA'])) {
//     $accA = $_REQUEST['accA'];
//     $preA = $_REQUEST['preA'];
//     $j2 = $_REQUEST['j2'];
//     $totalB = $accA + $preA;

//     $update_score = $db->prepare("UPDATE $dataStart SET acc='$accA', present='$preA', totala = '$totalB' WHERE id = '$j2' ");
//     $update_score->execute();
//     echo "<script language='javascript'> window.location='ps_jud_flag.php?j=$j2'</script>";
// }

if ($_REQUEST['flagA'] == 'yes') {
    $j2 = $_REQUEST['j2'];

    if ($_GET['roundA'] == 1) {
        if ($_REQUEST['s1'] == 'BLUE') {
            $update_score = $db->prepare("UPDATE $dataStart_flag SET r1 = 1 WHERE id = '$j2' ");
            $update_score->execute();
            echo "<script language='javascript'> window.location='ps_jud_flag.php?j=$j2'</script>";
        }
        if ($_REQUEST['s2'] == 'RED') {
            $update_score = $db->prepare("UPDATE $dataStart_flag SET r1 = 2 WHERE id = '$j2' ");
            $update_score->execute();
            echo "<script language='javascript'> window.location='ps_jud_flag.php?j=$j2'</script>";
        }
        if ($_REQUEST['s3'] == 'CLEAR') {
            $update_score = $db->prepare("UPDATE $dataStart_flag SET r1 = 0 WHERE id = '$j2' ");
            $update_score->execute();
            echo "<script language='javascript'> window.location='ps_jud_flag.php?j=$j2'</script>";
        }
    }
    if ($_GET['roundA'] == 2) {
        if ($_REQUEST['s1'] == 'BLUE') {
            $update_score = $db->prepare("UPDATE $dataStart_flag SET r2 = 1 WHERE id = '$j2' ");
            $update_score->execute();
            echo "<script language='javascript'> window.location='ps_jud_flag.php?j=$j2'</script>";
        }
        if ($_REQUEST['s2'] == 'RED') {
            $update_score = $db->prepare("UPDATE $dataStart_flag SET r2 = 2 WHERE id = '$j2' ");
            $update_score->execute();
            echo "<script language='javascript'> window.location='ps_jud_flag.php?j=$j2'</script>";
        }
        if ($_REQUEST['s3'] == 'CLEAR') {
            $update_score = $db->prepare("UPDATE $dataStart_flag SET r2 = 0 WHERE id = '$j2' ");
            $update_score->execute();
            echo "<script language='javascript'> window.location='ps_jud_flag.php?j=$j2'</script>";
        }
    }
    if ($_GET['roundA'] == 3) {
        if ($_REQUEST['s1'] == 'BLUE') {
            $update_score = $db->prepare("UPDATE $dataStart_flag SET r3 = 1 WHERE id = '$j2' ");
            $update_score->execute();
            echo "<script language='javascript'> window.location='ps_jud_flag.php?j=$j2'</script>";
        }
        if ($_REQUEST['s2'] == 'RED') {
            $update_score = $db->prepare("UPDATE $dataStart_flag SET r3 = 2 WHERE id = '$j2' ");
            $update_score->execute();
            echo "<script language='javascript'> window.location='ps_jud_flag.php?j=$j2'</script>";
        }
        if ($_REQUEST['s3'] == 'CLEAR') {
            $update_score = $db->prepare("UPDATE $dataStart_flag SET r3 = 0 WHERE id = '$j2' ");
            $update_score->execute();
            echo "<script language='javascript'> window.location='ps_jud_flag.php?j=$j2'</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยกธง</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    
    <style>
        .btn {
            width: 100%;
            margin-top: 60px;
            padding: 40px;
            font-size: 40px;
            font-weight: bold;
        }

        .clear {
            width: 20%;
            margin-top: 60px;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <a class="navbar-brand" href="#"><?php echo $catA['namegroup']; ?></a>
    </nav>

    <div class="container mt-3">
        <div class="col-12">
            <h3 class="text-center"><?php echo $catA['namegroup']; ?></h3>
            <h3 style="text-align: center;">ROUND <?= $_GET['roundA'] ?></h3>

            <form action="" method="POST">
                <input type="hidden" name="j2" value="<?= $_GET['j'] ?>">
                <input type="hidden" name="flagA" value="yes">

                <div class="form-group">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 text-right form-inline">
                            <input type="submit" name="s2" class="btn btn-danger btn-lg btn-block" value="RED">
                        </div>
                        <div class="col-sm-4 text-right form-inline">
                            <input type="submit" name="s1" class="btn btn-primary btn-lg btn-block" value="BLUE">
                        </div>

                    </div>
                    <center>
                        <input type="submit" name="s3" class="btn-secondary clear" value="CLEAR">
                    </center>
                </div>


            </form>
        </div>
    </div>

</body>

<script src="js/bootstrap.bundle.min.js"></script>

</html>