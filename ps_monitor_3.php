<?php
session_start();
require_once('app/conn_pdo.php');

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

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
    if ($key0 == 'HSS') {
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
        header("location:ps_admin.php");
    }
    if ($numflag_1 > 0) {
        $update_stmt2 = $db->prepare("UPDATE thannam_poomse_start5_flag SET idstart2='$keyw', lastID='$keyw'  WHERE  id<6");
        $update_stmt2->execute();
        header("location:ps_admin.php");
    }
}
?>
<meta charset="UTF-8">
<div class="row ">

    <?php
    // echo $numflag_1;
    if ($numflag_1 == 0) {
    ?>
        <div class="col">
            <h4 class="text-center">NO PLAYER</h4>
        </div>

    <?php } else { ?>
        <div class="col">
            

            <?php
            // echo $res_ho['idstart1'];
            $bluePalyer_select = $db->prepare("SELECT * FROM thannam_champion_poomsae WHERE id='$res_ho[idstart1]'");
            $bluePalyer_select->execute();
            $rs_blue = $bluePalyer_select->fetch();

            $team_blue_select = $db->prepare("SELECT * FROM thannam_champion_teamm WHERE id = '$rs_blue[idteam]'");
            $team_blue_select->execute();
            $team_blue = $team_blue_select->fetch();
            //===============================================================
            $redPalyer_select = $db->prepare("SELECT * FROM thannam_champion_poomsae WHERE id='$res_ho[idstart2]'");
            $redPalyer_select->execute();
            $rs_red = $redPalyer_select->fetch();

            $team_red_select = $db->prepare("SELECT * FROM thannam_champion_teamm WHERE id = '$rs_red[idteam]'");
            $team_red_select->execute();
            $team_red = $team_red_select->fetch();

            ?>
            <h1>HOSHINSUL</h1>
            <div class="card-group">
                <div class="card text-white bg-primary">
                    <div class="card-header">BLUE PLAYER</div>
                    <div class="card-body">
                        <?php
                        if (isset($rs_blue['nameA'])) {
                        ?>
                            <h5 class="card-title">
                                <?php
                                echo $rs_blue['nameA'];
                                echo ', ';
                                // echo '<br>';
                                echo $rs_blue['nameB'];
                                ?>
                            </h5>
                        <?php } ?>
                        <p class="card-text"> <?php echo $team_blue['nameA'] ?></p>
                    </div>
                </div>

                <div class="card text-white bg-danger">
                    <div class="card-header">RED PLAYER</div>
                    <div class="card-body">
                        <?php
                        if (isset($rs_red['nameA'])) {
                        ?>
                            <h5 class="card-title">
                                <?php
                                echo $rs_red['nameA'];
                                echo ', ';
                                // echo '<br>';
                                echo $rs_red['nameB'];
                                ?>
                            </h5>
                        <?php } ?>
                        <p class="card-text"> <?php echo $team_red['nameA'] ?></p>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
</div>
</div>