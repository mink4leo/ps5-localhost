<?php
session_start();
require_once("app/conn_pdo.php");


//==============MATCH judNum
$stmt_match = $db->prepare("SELECT * FROM thannam_match");
$stmt_match->execute();
$resmatch = $stmt_match->fetch(PDO::FETCH_ASSOC);

//===============START
$stmt_start = $db->prepare("SELECT * FROM thannam_poomse_start");
$stmt_start->execute();
$res = $stmt_start->fetch(PDO::FETCH_ASSOC);
#---------------
if ($res['idstart'] <> 0) {
    if ($res['poomsae'] == '1') {
        $psp = 'INDIVIDUAL';
        $ps = 1;
        $dataa = 'thannam_champion_poomse';
    }
    if ($res['poomsae'] == '2') {
        $psp = ' PAIR';
        $ps = 2;
        $dataa = 'thannam_champion_poomse2';
    }
    if ($res['poomsae'] == '3') {
        $psp = 'TEAM';
        $ps = 3;
        $dataa = 'thannam_champion_poomse3';
    }

    //====================
    $stmt_select = $db->prepare("SELECT * FROM thannam_poomse_start WHERE totala <> 0");
    $stmt_select->execute();
    $numman = $stmt_select->rowCount();

    //=====================PLAYER
    $player_select = $db->prepare("SELECT * From $dataa where id='$res[idstart]'");
    $player_select->execute();
    $num_member = $player_select->rowCount();
    $row = $player_select->fetch(PDO::FETCH_ASSOC);

    $cat_stmt = $db->prepare("SELECT * FROM thannam_champion_groupteam where id='$row[age]'");
    $cat_stmt->execute();
    $cata = $cat_stmt->fetch(PDO::FETCH_ASSOC);

    //===========
}
?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_monitor.css?v=<?= date("hisA") ?>">
    <!-- <link rel="stylesheet" href="style_monitor.css"> --> 
    <div class="mt_5">
        <table class="table">
            <tr>
                <td width="20%">
                    <div class="wrapper">
                        <div class="title">
                            <?php echo $psp; ?>
                        </div>
                        <div class="body">
                            POOMSAE
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex">
                        <!-- <div>
                            <img src="img/arrow.png" class="width-200">
                        </div> -->
                        <div>
                            <h1><?php echo $row['nameA']; ?></h1>
                            <h2><?php echo $cata['namegroup']; ?></h2>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>



    <?php
    $stmt_score = $db->prepare("SELECT * FROM thannam_poomse_start");
    $stmt_score->execute();

    $totalAcc = 0;
    $totalPre = 0;
    while ($rs_score = $stmt_score->fetch()) {
        $totalAcc += $rs_score['acc'];
        $totalPre += $rs_score['present'];
    }

    $totalAcc2 = $totalAcc / $resmatch['judNum'];
    $totalPre2 = $totalPre / $resmatch['judNum'];
    $alltotal = $totalAcc2 + $totalPre2;
    ?>

    <div class="card2">
        <table class="table">
            <tr>
                <td class="acc"> ACC <span><?php echo number_format($totalAcc2, 2) ?></span></td>
                <td class="totalA">
                    <h1><?php echo number_format($alltotal, 2); ?></h1>
                </td>
            </tr>
            <tr>
                <td class="pre"> PRE <span><?php echo number_format($totalPre2, 2) ?></span></td>
                <td>
                    <table class="table2">
                        <tr class="white">
                            <td>R</td>
                            <td>J1</td>
                            <td>J2</td>
                        </tr>
                        <?php
                        $start_stmt = $db->prepare("SELECT * FROM thannam_poomse_start");
                        $start_stmt->execute();
                        ?>
                        <tr class="green_gd">
                            <?php
                            while ($res_start = $start_stmt->fetch()) {
                            ?>
                                <td><?php echo $res_start['acc']; ?></td>
                            <?php } ?>
                        </tr>

                        <tr class="red_gd">
                            <?php
                            $start_stmt = $db->prepare("SELECT * FROM thannam_poomse_start");
                            $start_stmt->execute();
                            while ($res_start = $start_stmt->fetch()) {
                            ?>
                                <td><?php echo $res_start['present']; ?></td>
                            <?php } ?>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>