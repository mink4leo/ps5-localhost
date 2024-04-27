<?php
session_start();
require_once('app/conn_pdo.php');

error_reporting(0);
// error_reporting(E_ALL);
// ini_set('Display_errors',1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN SETTING</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/sweetalert2.all.min.js"></script>
    <link href="css/sweetalert2.min.css" rel="stylesheet">
    <?php


    //==========JudeNum
    $stmt_jude = $db->prepare("SELECT * FROM thannam_match where id = '" . $_SESSION['match'] . "'");
    $stmt_jude->execute();
    $res_jude = $stmt_jude->fetch(PDO::FETCH_ASSOC);

    //===========SEARCH
    if (isset($_POST['keyword'])) {
        $keyword = strtoupper($_POST['keyword']);
        $key0 =  substr($keyword, 0, 3);
        // if ($key0 == 0) {
        if ($key0 <> "") {
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
        } else if ($key0 == 'FRE') {
            $psp = 'FREE STYLE';
            $ps = 6;
            $pscat = 8;
        } else {

            if ($key0 == 'KYO') {
                $statusID = 'IDCARD -> ต่อสู้ ';
                $textA = 'CHECK ID CARD';
            } else if ($key0 == 'SPD') {
                $statusID = 'IDCARD -> SPEED ';
                $textA = 'CHECK ID CARD';
            } else{
                $statusID = 'มีบางอย่างผิดพลาด';
                $textA = 'CHECK ID CARD';
            }
    ?>
            <script>
                $(document).ready(function() {
                    Swal.fire({
                        icon: 'error',
                        title: '<?= $statusID; ?>',
                        text: '<?= $textA; ?>',
                    });
                });
            </script>
        <?php } ?>


        <?php
        $stmt_member1 = $db->prepare("SELECT * FROM thannam_champion_poomsae WHERE id = '$keyw' and match1='$_SESSION[match]'");
        $stmt_member1->execute();
        $rs_ps1 = $stmt_member1->rowCount();
        $rs_member1 = $stmt_member1->fetch(PDO::FETCH_ASSOC);

        if ($rs_ps1 > 0) {
            $update_stmt = $db->prepare("UPDATE $dataStart SET idstart='$keyw', poomsae=$ps, lastID='$keyw', lastAGE='$ps', lastSex = '$rs_member1[sex]' WHERE  id<4");
            $update_stmt->execute(); 
        }
        #================================================================


        //===============SEARCh MEMBER
        $stmt_member = $db->prepare("SELECT * FROM thannam_champion_poomsae WHERE id = '$keyw'");
        $stmt_member->execute();
        $num_member = $stmt_member->rowCount();
        $rs_member = $stmt_member->fetch(PDO::FETCH_ASSOC);
    }
    //=========== NEXT PLAYER
    if (isset($_GET['nnext'])) {
        $update_next = $db->prepare("UPDATE $dataStart SET idstart='0', course='', poomsae='', acc=4, present=6,totala=0, acc2=4, present2=6, totala2=0, restartA=0 where  id<4");
        $update_next->execute();
        //=============
        $update_next = $db->prepare("UPDATE $dataStart_flag SET flagA = '0' where  id<4");
        $update_next->execute();
        header("location:ps_admin.php");
    }
    ?>
</head>

<body>
    <?php include('menu.php'); ?>

    <div class="container mt-5">
        <div class="row">

            <?php if ($rs_ps1 == 0) {  ?>
                <div class="col">
                    <h4 class="text-center">NO PLAYER</h4>
                </div>

            <?php } else { ?>

                <?php if (isset($_POST['keyword'])) { ?>
                    <div class="col-6">
                        <?php if ($ps == 1) { ?>
                            <h2><?php echo $rs_member['nameA']; ?></h2>
                        <?php } else { ?>
                            <?php
                            if ($num_member > 0) {
                                $stmt_pair = $db->prepare("SELECT * FROM thannam_champion_poomsae WHERE id = '$keyw'");
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
                                }
                            } else {
                                echo '<h2>NO PLAYER</h2>';
                            }
                            ?>
                        <?php } ?>
                        <br>
                        <?php
                        echo $psp;
                        ?>
                        <br>
                        <a href="?nnext=yes" class="btn btn-primary mt-3 d-grid">NEXT</a>
                    </div>

                    <div class="col-6">
                        <div id="showDatatotal"></div>
                    </div>
                <?php } else { ?>
                    <div class="col">
                        <h4 class="text-center"><img src="Loading_icon.gif" alt=""><br>WAITING FOR NEXT PLAYER</h4>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>



    <script>
        $(function() {
            setInterval(function() {
                var getData = $.ajax({
                    url: "ps_show1.php",
                    data: "match=<?= $_GET['match']; ?>",
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