<?php
session_start();
require_once("app/conn_pdo.php");

//==============MATCH judNum
$stmt_match = $db->prepare("SELECT * FROM thannam_match WHERE id = '$_SESSION[match]'");
$stmt_match->execute();
$resmatch = $stmt_match->fetch(PDO::FETCH_ASSOC);

//===============START
$stmt_start = $db->prepare("SELECT * FROM $dataStart");
$stmt_start->execute();
$res = $stmt_start->fetch(PDO::FETCH_ASSOC);
#---------------
if ($res['idstart'] <> 0) {
    if ($res['poomsae'] == '1') {
        $psp = 'INDIVIDUAL';
        $ps = 1;
        $pscat = 2;
        // $dataa = 'thannam_champion_poomse';
    }
    if ($res['poomsae'] == '2') {
        $psp = ' PAIR';
        $ps = 2;
        $pscat = 3;
        // $dataa = 'thannam_champion_poomse2';
    }
    if ($res['poomsae'] == '3') {
        $psp = 'TEAM';
        $ps = 3;
        $pscat = 4;
        // $dataa = 'thannam_champion_poomse3';
    }

    //====================
    $stmt_select = $db->prepare("SELECT * FROM $dataStart WHERE totala <> 0");
    $stmt_select->execute();
    $numman = $stmt_select->rowCount();

    //=====================PLAYER
    $player_select = $db->prepare("SELECT * From thannam_champion_poomsae where id='$res[idstart]' and ps_cat = '$pscat'");
    $player_select->execute();
    $num_member = $player_select->rowCount();
    $row = $player_select->fetch(PDO::FETCH_ASSOC);

    $cat_stmt = $db->prepare("SELECT * FROM thannam_champion_groupteam where id='$row[catA]'");
    $cat_stmt->execute();
    $cata = $cat_stmt->fetch(PDO::FETCH_ASSOC);

    //===========
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONITOR</title>
    <style>
        .mt_5 {
            margin: auto;
            width: 90%;
            margin-top: 30px;
            /* border: 1px solid; */
        }

        .width-200 {
            width: 120px;
        }

        .flex {
            display: flex;
        }

        .flex>div {
            padding: 0 10px 0 10px;
        }

        .mt-100 {
            margin-top: 200px;
        }

        .head2 {
            color: #000;
            font-size: 30px;
            font-weight: bold;
            /* text-shadow: 2px 2px 4px #000; */
        }

        .card1 {
            margin: auto;
            margin-top: 30px;
            margin-bottom: 10px;
            /* display: flex; */
            width: 90%;
            background-color: antiquewhite;
            padding: 20px;
            border-radius: 3px;
            text-align: center;
        }

        .card1 h1 {
            font-size: 30px;
        }

        .card2 {
            margin: auto;
            margin-top: 10px;
            /* display: grid; */
            width: 90%;
            /* background-color: #f6b323; */
            /* padding: 20px; */
            border-radius: 15px;
            text-align: center;
            font-size: 28px;
            font-weight: bolder;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            /* border: 1px solid #fff; */
        }

        .table .td {
            width: 10%;
        }



        .table .p30 {
            width: 30%;
            text-align: center;
        }

        .card2 h1 {
            font-size: 180px;
            font-weight: bold;
        }

        .card2 h2 {
            font-size: 80px;
            font-weight: bold;
        }

        /* .table2 {
            width: 100%;
        } */

        .totalA {
            font-size: 170px;
            height: 200px;
            color: #fff;
            text-shadow: 3px 3px #783d3d;
            /* border: 2px solid #e8b709; */
            border-radius: 15px;
            background: -webkit-linear-gradient(right, #761f47, #7f0b91, #b1326e);
        }

        .acc {
            display: flex;
            font-size: 40px;
            text-shadow: 3px 3px #783d3d;
            color: #fff;
        }

        .acc .acc1 {
            margin: 30px 30px 30px 0;
            font-size: 40px;
            text-shadow: 3px 3px #783d3d;
            color: #fff;
            /* background: linear-gradient(rgb(239, 38, 38), #912114); */
        }

        .acc .acc2 {
            width: 50%;
            height: 120px;
            font-size: 80px;
            border: 2px solid #ccc;
            border-radius: 15px;
            padding: 20px;
            background: linear-gradient(rgb(232, 18, 18), #e8b709);
        }


        .pre {
            display: flex;
            font-size: 40px;
            text-shadow: 3px 3px #783d3d;
            color: #fff;
        }

        .pre .pre1 {
            margin: 30px 30px 30px 0;
            font-size: 40px;
            text-shadow: 3px 3px #783d3d;
            color: #fff;
            /* background: linear-gradient(rgb(239, 38, 38), #912114); */
        }

        .pre .pre2 {
            margin-left: 5px;
            width: 50%;
            height: 120px;
            font-size:80px;
            border: 2px solid #ccc;
            border-radius: 15px;
            padding: 20px;
            background: linear-gradient(rgb(89, 157, 230), #1f66ea);
        }

        .w_gd {
            background: linear-gradient(#fff, #ccc);
            color: #761f47;
            /* font-size: 550px; */
        }

        .green_gd {
            background: linear-gradient(rgb(125, 244, 51), #208e23);
            height: 160px;
            width: 33%;
        }

        .red_gd {
            background: linear-gradient(rgb(241, 93, 7), #ce0707);
            height: 160px;
        }

        .table2 {
            width: 100%;
            /* border-collapse: collapse; */
        }

        .table2 td {
            font-size: 55px;
            border-radius: 13px;
            /* border: 1px solid rgb(16, 17, 16); */
            padding: 25px;
            /* color: #edeee6; */
            text-shadow: 3px 2px 3px #8d6969;
        }

        /*=======================*/

        .wrapper {
            width: 180px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
        }

        .wrapper .title {
            padding: 10px 30px 10px 30px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            line-height: 20px;
            color: #fff;
            user-select: none;
            border-radius: 15px 15px 0 0;
            background: linear-gradient(-135deg, #c850c0, #4158d0);
        }

        .wrapper .body {
            padding: 10px 30px 10px 30px;
            font-size: 20px;
            font-weight: bolder;
            text-align: center;
            line-height: 20px;
        }

        /*============*/

        .wait {
            margin-top: 40px;
            text-align: center;
        }

        .wait-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }

        .wait-next {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .wait-next div {
            font-size: 100px;
            padding: 20px;
        }
    </style>
</head>

<body>

    <?php if ($res['idstart'] == 0) { ?>
        <div class="wait">
            <div class="wait-next mt-100">
                <div>NEXT</div>
                <div><img src="img/arrow.png" class="width-200"></div>
            </div>
            <img src="img/please-wait.gif" class="wait-img" alt="">
        </div>
    <?php } else { ?>
        <div class="mt_5">
            <table class="table">
                <tr>
                    <td>
                        <div class="flex">
                            <div>
                                <img src="img/arrow.png" class="width-200">
                            </div>
                            <div>
                                <div class="head2">
                                    <?php if ($ps == 1) { ?>
                                        <?php echo $row['id']; ?> -
                                        <?php echo $row['nameA']; ?>
                                    <?php } else { ?>
                                        <?php
                                        if ($num_member > 0) {
                                            $stmt_pair = $db->prepare("SELECT * FROM thannam_champion_poomsae WHERE id = '$res[idstart]'");
                                            $stmt_pair->execute();
                                            $num_pair = $stmt_pair->rowCount();

                                            while ($rs_pair = $stmt_pair->fetch()) {
                                                echo $rs_pair['id'];
                                                echo ' - ';
                                                echo $rs_pair['nameA'];
                                                if ($rs_pair['nameB'] <> "") {
                                                    echo ', ';
                                                    echo $rs_pair['nameB'];
                                                }
                                                if ($rs_pair['nameC'] <> "") {
                                                    echo ', ';
                                                    echo $rs_pair['nameC']; 
                                                }
                                            }
                                        } else {
                                            echo '<h2>NO PLAYER</h2>';
                                        }
                                        ?>
                                    <?php } ?>
                                    <br>
                                    <?php
                                    echo strtoupper($cata['namegroup']);
                                    // echo $cata['id'];
                                    ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="td">
                        <div class="wrapper">
                            <div class="title">
                                <?php echo $psp; ?>
                            </div>
                            <div class="body">
                                POOMSAE
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>



        <?php
        $stmt_score = $db->prepare("SELECT * FROM $dataStart where acc <> 4");
        $stmt_score->execute();

        $totalAcc = 0;
        $totalPre = 0;
        while ($rs_score = $stmt_score->fetch()) {
            $totalAcc += $rs_score['acc'];
            $totalPre += $rs_score['present'];
        }

        //===============
        $totalAcc2 = $totalAcc / $resmatch['judNum'];
        $totalPre2 = $totalPre / $resmatch['judNum'];
        $alltotal = number_format($totalAcc2, 2) + number_format($totalPre2, 2);

        ?>

        <div class="card2">
            <table class="table">
                <tr>
                    <td class="p30">
                        <div class="acc">
                            <div class="acc1">ACC</div>
                            <div class="acc2">
                                <?php
                                if ($numman == $resmatch['judNum']) {
                                    echo number_format($totalAcc2, 2);
                                }
                                ?>
                            </div>
                        </div>
                    </td>
                    <td class="totalA">
                        <?php
                        if ($numman == $resmatch['judNum']) {
                            echo number_format($alltotal, 2);
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="pre">
                        <div class="pre1">PRE</div>
                        <div class="pre2">
                            <?php
                            if ($numman == $resmatch['judNum']) {
                                echo number_format($totalPre2, 2);
                            }
                            ?>
                        </div>
                    </td>
                    <td>
                        <table class="table2">
                            <tr class="w_gd">
                                <?php
                                for ($x = 1; $x <= $resmatch['judNum']; $x++) {
                                    if ($x == 1){
                                        $judeName = "R";
                                    } else if ($x == 2){
                                        $judeName = "J1";
                                    } else if ($x == 3){
                                        $judeName = "J2";
                                    }
                                ?>
                                    <td><?= $judeName; ?></td>
                                <?php } ?>
                            </tr>
                            <?php
                            $start_stmt = $db->prepare("SELECT * FROM $dataStart limit $resmatch[judNum]");
                            $start_stmt->execute();
                            ?>
                            <tr class="green_gd">
                                <?php
                                while ($res_start = $start_stmt->fetch()) {
                                ?>
                                    <td width="30%">
                                        <?php
                                        if ($res_start['totala'] <> "0.00") {
                                            echo $res_start['acc'];
                                        }
                                        ?>
                                    </td>
                                <?php } ?>
                            </tr>

                            <tr class="red_gd">
                                <?php
                                $start_stmt = $db->prepare("SELECT * FROM $dataStart limit $resmatch[judNum]");
                                $start_stmt->execute();
                                while ($res_start = $start_stmt->fetch()) {
                                ?>
                                    <td>
                                        <?php
                                        if ($res_start['totala'] <> "0.00") {
                                            echo $res_start['present'];
                                        }
                                        ?>
                                    </td>
                                <?php } ?>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    <?php } ?>
    <center style="margin-top:50px;">THANNAM POOMSAE SCORE v3.1</center>
</body>

</html>