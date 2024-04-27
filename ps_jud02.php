<?php
session_start();
require_once("app/conn_pdo.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

$stmt_start = $db->prepare("SELECT * FROM $dataStart");
$stmt_start->execute();
$res = $stmt_start->fetch(PDO::FETCH_ASSOC);
#---------------
if ($res['poomsae'] == '1') {
    $psp = 'POOMSAE INDIVIDUAL';
    $ps = 1;
    // $dataa = 'thannam_champion_poomse';
}
if ($res['poomsae'] == '2') {
    $psp = 'POOMSAE  PAIR';
    $ps = 2;
    // $dataa = 'thannam_champion_poomse2';
}
if ($res['poomsae'] == '3') {
    $psp = 'POOMSAE TEAM';
    $ps = 3;
    // $dataa = 'thannam_champion_poomse3';
}

//=====================PLAYER
$player_select = $db->prepare("SELECT * From thannam_champion_poomsae where id ='$res[idstart]'");
$player_select->execute();
$row = $player_select->fetch(PDO::FETCH_ASSOC);

//=========== UPDATE SCORE
$update_score0 = $db->prepare("UPDATE thannam_champion_poomsae SET totalA3 = '0.00' WHERE id = '$row[id]' ");
$update_score0->execute();
// $update_stmt = $db->prepare("UPDATE thannam_match SET judNum = '$jnum' WHERE id = '$jid'");
if (isset($_REQUEST['submitA'])) {
    $accA = $_REQUEST['accA'];
    $preA = $_REQUEST['preA'];
    $j2 = $_REQUEST['j2'];
    $totalB = $accA + $preA;

    $update_score = $db->prepare("UPDATE $dataStart SET acc2='$accA', present2='$preA', totala2 = '$totalB' WHERE id = '$j2' ");
    $update_score->execute();
    echo "<script language='javascript'> window.location='ps_jude.php?j=$j2'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POOM 1</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><?php echo $row['nameA']; ?></a>
    </nav>

    <div class="container mt-3">
        <div class="col-12">
            <h3 class="text-center">POOM 2</h3>

            <form action="" method="POST">
                <input type="hidden" name="j2" value="<?= $_GET['j'] ?>">
                <div class="form-group">
                    <label for="inputPassword" class="col-sm col-form-label">ACC</label>
                    <div class="col-sm">
                        <select name="accA" id="accA" class="form-control form-control-lg" onFocus="startCalc();" onBlur="stopCalc();">
                            <?php
                            for ($x = 4.0; $x > 0.0; $x = $x - 0.1) { ?>
                                <option value="<?php echo $x; ?>"><?php echo number_format($x, 1); ?></option>
                            <?php   } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword" class="col-sm col-form-label">PRE</label>
                    <div class="col-sm">
                        <select name="preA" id="preA" class="form-control form-control-lg" onFocus="startCalc();" onBlur="stopCalc();">
                            <?php
                            for ($x = 6.0; $x > 0.0; $x = $x - 0.1) { ?>
                                <option value="<?php echo $x; ?>"><?php echo number_format($x, 1); ?></option>
                            <?php   } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm">
                        <input type="submit" name="submitA" class="btn btn-primary btn-lg btn-block" value="SUBMIT">
                    </div>
                </div>


            </form>
        </div>
    </div>

</body>

</html>