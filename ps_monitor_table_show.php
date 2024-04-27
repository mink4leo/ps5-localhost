<?php
session_start();
require_once("app/conn_pdo.php");

//==============MATCH judNum
$stmt_match = $db->prepare("SELECT * FROM thannam_match WHERE id = '$_SESSION[match]'");
$stmt_match->execute();
$resmatch = $stmt_match->fetch(PDO::FETCH_ASSOC);

// echo $resmatch['id'];

//===============START
$stmt_start = $db->prepare("SELECT * FROM $dataStart");
$stmt_start->execute();
$res = $stmt_start->fetch(PDO::FETCH_ASSOC);
#---------------
$dataa = 'thannam_champion_poomsae';

if ($res['lastAGE'] <> 0) {
    if ($res['lastAGE'] == '1') {
        $psp = 'POOMSAE INDIVIDUAL';
        $ps = 1;
        $pscat = 2;
    }
    if ($res['lastAGE'] == '2') {
        $psp = 'POOMSAE  PAIR';
        $ps = 2;
        $pscat = 3;
        // $dataa = 'thannam_champion_poomse2';
    }
    if ($res['lastAGE'] == '3') {
        $psp = 'POOMSAE TEAM';
        $ps = 3;
        $pscat = 4;
        // $dataa = 'thannam_champion_poomse3';
    }
    if ($res['lastAGE'] == '6') {
        $psp = 'FREE STYLE';
        $ps = 6;
        $pscat = 8;
        // $dataa = 'thannam_champion_poomse3';
    }

    //====================
    $stmt_select = $db->prepare("SELECT * FROM $dataStart WHERE totala <> 0");
    $stmt_select->execute();
    $numman = $stmt_select->rowCount();

    //=====================PLAYER
    $player_select = $db->prepare("SELECT * From $dataa where id='$res[lastID]'");
    $player_select->execute();
    $num_member = $player_select->rowCount();
    $row = $player_select->fetch(PDO::FETCH_ASSOC);

    //====================category
    $cat_group = $db->prepare("SELECT * from thannam_champion_groupteam  where id = '$row[catA]'");
    $cat_group->execute();
    $row_cat = $cat_group->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE</title>
    <style>
        * {
            /* margin: 0; */
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(147deg, #2c0352 20%, #f22626 54%);
            font-family: 'Fira Sans', sans-serif;
            height: 100vh;
            font-size: 25px;
        }

        .container {
            width: 98%;
            margin: auto;
            margin-top: 50px;
        }

        .text-center {
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .bg-white {
            color: #ccc;
        }

        .shadow-light {
            text-shadow: 3px 2px 3px #960380;
        }

        .text-yellow {
            color: yellow;
        }


        /*====================================================*/

        .table {
            margin: auto;
            width: 100%;
            border-collapse: collapse;
        }

        .table thead tr {
            color: aliceblue;
            background: -webkit-linear-gradient(left, rgb(76, 2, 75), #960380, #f34194);
        }

        .table thead th {
            /* border: 2px solid rgb(156, 7, 111); */
            padding: 20px;
            text-shadow: 3px 2px 3px #960380;
        }

        .table tbody td {
            background: rgb(249, 238, 243);
            border: 2px solid #ccc;
            padding: 15px;
            color: #2c0352;
            font-weight: bolder;
            text-shadow: 0 1px 4px #f39ce7;
        }

        .text-center {
            align-content: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php
        $player_cat = $db->prepare("SELECT * FROM $dataa where catA = '$row[catA]' and sex = '$res[lastSex]' order by totalA3 desc");
        $player_cat->execute();
        $numPlayer = $player_cat->rowCount();

        $player_Medal = $db->prepare("SELECT * FROM $dataa where catA = '$row[catA]' and sex = '$res[lastSex]' and totalA3 > 0");
        $player_Medal->execute();
        $numMedal = $player_Medal->rowCount();
        ?>
        <h1 class="bg-white text-center shadow-light">
            <?php
            if ($res['lastSex'] == 'F') {
                echo 'FEMALE';
            } else {
                echo 'MALE';
            }
            echo ' - ';
            echo strtoupper($row_cat['namegroup']);
            ?>
        </h1>
        <h2 class="text-yellow text-center shadow-light"><?php echo $psp; ?></h2>

        <table class="table">
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>NAME</th>
                    <th>TEAM</th>
                    <th>ACC</th>
                    <th>PRE</th>
                    <th>SCORE</th>
                    <th>MEDAL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $a = 1;
                while ($a <= $numPlayer) {
                    $rs_cat = $player_cat->fetch();
                    // while ($rs_cat = $player_cat->fetch()) {
                    $team_select = $db->prepare("SELECT * FROM thannam_champion_teamm WHERE id = '$rs_cat[idteam]'");
                    $team_select->execute();
                    $team = $team_select->fetch();

                    if ($numPlayer == $numMedal) {
                        if ($a == 1) {
                            $totalG = 'GOLD';
                            $bg = 'linear-gradient(to bottom right, red, yellow)';
                        }
                        if ($a == 2) {
                            $totalG = 'SILVER';
                            $bg = 'linear-gradient(to bottom right,#ccc, #a6969d, #fff)';
                            // $bg = 'linear-gradient(to bottom right, #750b0b, #bb1111, #ccc, #fff)';
                        }
                        if ($a == 3 or $a == 4) {
                            $totalG = 'BRONZE';
                            // $bg = 'linear-gradient(to bottom right, #a6969d, #fff)';
                            $bg = 'linear-gradient(to bottom right, #750b0b, #bb1111, #ccc, #fff)';
                            // $bg = 'brown';
                        }
                    }

                ?>
                    <tr>
                        <td>
                            <?php
                            echo $rs_cat['nameA'];
                            if ($rs_cat['nameB'] <> "") {
                                echo ', ';
                                echo $rs_cat['nameB'];
                            }
                            if ($rs_cat['nameC'] <> "") {
                                echo ', ';
                                echo $rs_cat['nameC'];
                            }
                            echo '<br>';
                            ?>
                        </td>
                        <td class="text-left"><?php echo $team['nameA']; ?></td>
                        <td class="text-center">
                            <?php
                            if ($rs_cat['acc3'] <> "0.00") {
                                echo $rs_cat['acc3'];
                            }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php
                            if ($rs_cat['pre3'] <> "0.00") {
                                echo $rs_cat['pre3'];
                            }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php
                            if ($rs_cat['totalA3'] <> "0.00") {
                                echo $rs_cat['totalA3'];
                            }
                            ?>
                        </td>

                        <td class="text-center" style="background:<?= $bg; ?>">
                            <?php echo $totalG ?>
                        </td>
                    </tr>
                <?php
                    $a++;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>