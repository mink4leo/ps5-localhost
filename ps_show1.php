<?php
session_start();
require_once("app/conn_pdo.php");

error_reporting(0);

// echo 'sdfsdf';
//============= MATCH
$match_stmt = $db->prepare("SELECT * FROM thannam_match WHERE id = '" . $_SESSION['match'] . "' ");
$match_stmt->execute();
$match_res = $match_stmt->fetch(PDO::FETCH_ASSOC);

//=============START
$stmt_start = $db->prepare("SELECT * FROM $dataStart");
$stmt_start->execute();
$res = $stmt_start->fetch(PDO::FETCH_ASSOC);
#---------------
if ($res['lastAGE'] == '1') {
    $psp = 'POOMSAE INDIVIDUAL';
    $ps = 1;
    // $dataa = 'thannam_champion_poomse';
}
if ($res['lastAGE'] == '2') {
    $psp = 'POOMSAE  PAIR';
    $ps = 2;
    // $dataa = 'thannam_champion_poomse2';
}
if ($res['lastAGE'] == '3') {
    $psp = 'POOMSAE TEAM';
    $ps = 3;
    // $dataa = 'thannam_champion_poomse3';
}
if ($res['lastAGE'] == '4') {
    $psp = 'FREE STYLE';
    $ps = 6;
    // $dataa = 'thannam_champion_poomse3';
}

//====================POOM1
$stmt_select = $db->prepare("SELECT * FROM $dataStart WHERE totala <> 0");
$stmt_select->execute();
$numman = $stmt_select->rowCount();

//====================POOM2
//====================
$stmt_select2 = $db->prepare("SELECT * FROM $dataStart WHERE totala2 <> 0");
$stmt_select2->execute();
$numman2 = $stmt_select2->rowCount();

//=====================PLAYER
$player_select = $db->prepare("SELECT * From thannam_champion_poomsae where id='$res[idstart]' and match1='$_GET[match]'");
$player_select->execute();
$num_member = $player_select->rowCount();
$row = $player_select->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THANNAM SCORE POOMSAE</title>
    <script type="text/JavaScript">
        // <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
    </script>
</head>

<body onLoad="JavaScript:AutoRefresh(5000);">



    <?php if ($numman > 0) { ?>
        <table class="table text-center">
            <thead class="table-success">
                <th>POOM 1</th>
                <th>ACC</th>
                <th>PRE</th>
                <th>TOTAL</th>
            </thead>
            <tbody>
                <?php
                $totalAcc = 0;
                $totalPre = 0;
                while ($rs1 = $stmt_select->fetch()) {
                ?>
                    <tr>
                        <td class="font-weight-bolder">J<?php echo $rs1['id']; ?></td>
                        <td><?php echo $rs1['acc']; ?></td>
                        <td><?php echo $rs1['present']; ?></td>
                        <td><?php echo $rs1['totala']; ?></td>
                    </tr>
                <?php
                    $totalAcc += $rs1['acc'];
                    $totalPre += $rs1['present'];
                }
                ?>
                <?php
                if ($numman == $match_res['judNum']) {
                    $totalAcc2 = $totalAcc / $match_res['judNum'];
                    $totalPre2 = $totalPre / $match_res['judNum'];
                ?>
                    <tr class="font-weight-bolder">
                        <td></td>
                        <td class="table-warning "><?php echo number_format($totalAcc2, 2); ?></td>
                        <td class="table-warning "><?php echo number_format($totalPre2, 2); ?></td>
                        <td class="bg-danger text-warning">
                            <?php
                            $totalALL =  number_format($totalAcc2,2) + number_format($totalPre2,2);
                            echo number_format($totalALL, 2);
                            ?>
                        </td>
                    </tr>
                <?php
                    if ($row['totalA3'] == 0) {
                        $update_score = $db->prepare("UPDATE thannam_champion_poomsae SET 
                        acc='$totalAcc2', pre='$totalPre2', totalA = '$totalALL', 
                        acc3='$totalAcc2', pre3='$totalPre2', totalA3 = '$totalALL' 
                        WHERE id = '$res[idstart]' ");
                        $update_score->execute();
                    }
                }
                ?>
            </tbody>
        </table>
    <?php } ?>


    <?php ///========POOM2
    if ($numman2 > 0) { ?>
        <table class="table text-center">
            <thead class="table-primary">
                <th>POOM 2</th>
                <th>ACC</th>
                <th>PRE</th>
                <th>TOTAL</th>
            </thead>
            <tbody>
                <?php
                $totalAccB = 0;
                $totalPreB = 0;
                while ($rs2 = $stmt_select2->fetch()) {
                ?>
                    <tr>
                        <td class="font-weight-bolder">J<?php echo $rs2['id']; ?></td>
                        <td><?php echo $rs2['acc2']; ?></td>
                        <td><?php echo $rs2['present2']; ?></td>
                        <td><?php echo $rs2['totala2']; ?></td>
                    </tr>
                <?php
                    $totalAccB += $rs2['acc2'];
                    $totalPreB += $rs2['present2'];
                }
                ?>
                <?php
                if ($numman2 == $match_res['judNum']) {
                    $totalAccB2 = $totalAccB / $match_res['judNum'];
                    $totalPreB2 = $totalPreB / $match_res['judNum'];
                ?>
                    <tr class="font-weight-bolder">
                        <td></td>
                        <td class="table-warning "><?php echo number_format($totalAccB2, 2); ?></td>
                        <td class="table-warning "><?php echo number_format($totalPreB2, 2); ?></td>
                        <td class="bg-danger text-warning">
                           <?php
                            $totalALLB2 =  number_format($totalAccB2,2) + number_format($totalPreB2,2);
                            echo number_format($totalALLB2, 2);
                            ?>
                        </td>
                    </tr>
                <?php
                    // if ($row['totalA3'] == 0) {
                    //     $update_score = $db->prepare("UPDATE thannam_champion_poomsae SET 
                    //     acc='$totalAcc2', pre='$totalPre2', totalA = '$totalALL', 
                    //     acc3='$totalAcc2', pre3='$totalPre2', totalA3 = '$totalALL' 
                    //     WHERE id = '$res[idstart]' ");
                    //     $update_score->execute();
                    // }
                }
                ?>
            </tbody>
        </table>
    <?php
    }
    ?>




    <?php
    // 2 POOM PLUS ++++++++++++++++++++

    $p_totalAcc2 = 0;
    $p_totalPre2 = 0;
    if ($numman2 == $match_res['judNum']) {

        $p_totalAcc2 = ($totalAcc2 + $totalAccB2)/2;
        $p_totalPre2 = ($totalPre2 + $totalPreB2)/2;
        // $p_totalAcc22 = $totalAcc22;

    ?>
        2 POOM

        <table class="table">
            <tr class="font-weight-bolder">
                <td></td>
                <td class="table-warning "><?php echo number_format($p_totalAcc2, 2); ?></td>
                <td class="table-warning "><?php echo number_format($p_totalPre2, 2); ?></td>
                <td class="bg-danger text-warning">
                    <?php
                    $totalALL123 =  $p_totalAcc2 + $p_totalPre2;
                    echo number_format($totalALL123, 2);
                    ?>
                </td>
            </tr>
        </table>
    <?php
    }
    ?>

</body>

</html>