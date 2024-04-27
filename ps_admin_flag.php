<?php
session_start();
require_once('app/conn_pdo.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

//==========JudeNum
$stmt_jude = $db->prepare("SELECT * FROM thannam_match where id = '" . $_SESSION['match'] . "'");
$stmt_jude->execute();
$res_jude = $stmt_jude->fetch(PDO::FETCH_ASSOC);

$flagA = $db->prepare("SELECT * FROM thannam_poomse_start5_flag WHERE idstart1>0");
$flagA->execute();
$numflag_1 = $flagA->rowCount();
$res_ho = $flagA->fetch();

//===========SEARCH
if (isset($_POST['keyword'])) {
    $keyword = strtoupper($_POST['keyword']);
    $key0 =  substr($keyword, 0, 3);
    if ($key0 == 0) {
        $keyw = substr($keyword, 4);
    } else {
        $keyw = $keyword;
    }
    //===============
    if ($key0 == 'PS1') {
        $psp = 'POOMSAE INDIVIDUAL';
        $ps = 1;
        $pscat = 2;
    } else if ($key0 == 'PS2') {
        $psp = 'POOMSAE PAIR';
        $ps = 2;
        $pscat = 3;
    } else if ($key0 == 'PS3') {
        $psp = 'POOMSAE TEAM';
        $ps = 3;
        $pscat = 4;
    } else if ($key0 == 'HSS') {
        $psp = 'HOSHINSUL';
        $ps = 3;
        $pscat = 4;
    }

    #----------------------------------- 
    $stmt_member1 = $db->prepare("SELECT * FROM thannam_champion_poomsae WHERE id = '$keyw' AND match1='$_SESSION[match]'");
    $stmt_member1->execute();
    $rs_ps1 = $stmt_member1->rowCount();
    $rs_member1 = $stmt_member1->fetch();
    //================================CHECK thannam_poomse_start5_flag


    if ($rs_ps1 > 0 && $numflag_1 == 0) {
        $update_stmt = $db->prepare("UPDATE thannam_poomse_start5_flag SET idstart1='$keyw', lastID='$keyw'  WHERE  id<6");
        $update_stmt->execute();
        header("location:ps_admin_flag.php");
    }
    if ($numflag_1 > 0) {
        $update_stmt2 = $db->prepare("UPDATE thannam_poomse_start5_flag SET idstart2='$keyw', lastID='$keyw'  WHERE  id<6");
        $update_stmt2->execute();
        header("location:ps_admin_flag.php");
    }

    #================================================================


    // //===============SEARCh MEMBER
    // $stmt_member = $db->prepare("SELECT * FROM thannam_champion_poomsae WHERE id = '$keyw'");
    // $stmt_member->execute();
    // $num_member = $stmt_member->rowCount();
    // $rs_member = $stmt_member->fetch(PDO::FETCH_ASSOC);
}
//=========== NEXT PLAYER
if (isset($_GET['nnext'])) {
    $update_next = $db->prepare("UPDATE $dataStart_flag SET idstart1='0', idstart2='0', flagA='0', catA='0', r1='0', r2='0', r3='0' where  id<6");
    $update_next->execute();
    header("location:ps_admin_flag.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN SETTING </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

</head>

<body>
    <?php include('menu.php'); ?>

    <div class="container mt-5">
        <div class="row">

            <?php
            // echo $numflag_1;
            if ($numflag_1 == 0) {
            ?>
                <div class="col">
                    <h4 class="text-center">NO PLAYER</h4>
                </div>

            <?php } else { ?>
                <div class="col-6">
                    <?php
                    // echo $res_ho['idstart1'];
                    $bluePalyer_select = $db->prepare("SELECT * FROM thannam_champion_poomsae WHERE id='$res_ho[idstart1]'");
                    $bluePalyer_select->execute();
                    $rs_blue = $bluePalyer_select->fetch();
                    //===============================================================
                    $redPalyer_select = $db->prepare("SELECT * FROM thannam_champion_poomsae WHERE id='$res_ho[idstart2]'");
                    $redPalyer_select->execute();
                    $rs_red = $redPalyer_select->fetch();
                    ?>
                    <div class="card-group">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">BLUE PLAYER</div>
                            <div class="card-body">
                                <?php
                                if (isset($rs_blue['nameA'])) {
                                ?>
                                    <h5 class="card-title">
                                        <?php
                                        echo $rs_blue['nameA'];
                                        echo '<br>';
                                        echo $rs_blue['nameB'];
                                        ?>
                                    </h5>
                                <?php } ?>
                                <p class="card-text">TEAM</p>
                            </div>
                        </div>

                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">RED PLAYER</div>
                            <div class="card-body">
                                <?php
                                if (isset($rs_red['nameA'])) {
                                ?>
                                    <h5 class="card-title">
                                        <?php
                                        echo $rs_red['nameA'];
                                        echo '<br>';
                                        echo $rs_red['nameB'];
                                        ?>
                                    </h5>
                                <?php } ?>
                                <p class="card-text">TEAM</p>
                            </div>
                        </div>
                    </div>
                    <a href="?nnext=yes" class="btn btn-success mt-3 d-grid btn-block">NEXT</a>
                </div>

                <div class="col-6">
                    <div id="showDatatotal"></div>
                </div>

            <?php } ?>
        </div>
    </div>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        $(function() {
            setInterval(function() {
                var getData = $.ajax({
                    url: "ps_show_score.php",
                    data: "match=<?= $_SESSION['match']; ?>",
                    async: false,
                    success: function(getData) {
                        $("div#showDatatotal").html(getData); // ส่วนที่ 3 นำข้อมูลมาแสดง
                    }
                }).responseText;
            }, 3000);
        });
    </script>
</body>

</html>