<?php
session_start();
require_once('app/conn_pdo.php');

error_reporting(0);

//==========JudeNum
$stmt_jude = $db->prepare("SELECT * FROM thannam_match where id = '" . $_SESSION['match'] . "'");
$stmt_jude->execute();
$res_jude = $stmt_jude->fetch(PDO::FETCH_ASSOC);
//=========Update JudNum
if (isset($_REQUEST['jnumUpdate'])) {
    $jnum = $_REQUEST['jnum'];
    $jid = $_REQUEST['jid'];
    $update_stmt = $db->prepare("UPDATE thannam_match SET judNum = '$jnum' WHERE id = '$jid'");
    $update_stmt->execute();
    header("location:ps_manage.php?action=success");
}

if (isset($_GET['teamA'])) {
    $insert_best = $db->prepare("INSERT INTO thannam_champion_poomsae_best (match1, nameA, teamA, catA, sexA) VALUES ('$_GET[match]', '$_GET[nameA]', '$_GET[teamA]', '$_GET[catA]', '$_GET[sex]')");
    $insert_best->execute();
    header("location: ?match=$_GET[match]");
}

if (isset($_GET['ps_cat'])) {
    $psCat  =  " AND ps_cat = '$_GET[ps_cat]'  ";
    if ($_GET['ps_cat'] == 2) {
        $psName = "INDIVIDUAL";
    }
    if ($_GET['ps_cat'] == 3) {
        $psName = "PAIR";
    }
    if ($_GET['ps_cat'] == 4) {
        $psName = "TEAM";
    }
} else {
    $psCat = " ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOTAL SCORE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script> -->

    <style>
        a {
            text-decoration: none;
        }
    </style>

</head>

<body>
    <?php include('menu.php'); ?>

    <div class="container mt-5">
        <h3><?php echo $_SESSION['nameMatch'] ?></h3>
        <div class="row justify-content-between mb-5">
            <div class="col-8">
                <a href="ps_total_best.php?match=<?= $_GET['match'] ?>" class="btn btn-info">ALL BEST PALYER</a>
                <a href="ps_total_team.php?match=<?= $_GET['match'] ?>" class="btn btn-success">TOTAL TEAM</a>
                <a href="ps_total_score.php?match=<?= $_GET['match'] ?>&ps_cat=2" class="btn btn-primary">INDIVIDUAL</a>
                <a href="ps_total_score.php?match=<?= $_GET['match'] ?>&ps_cat=3" class="btn btn-primary">PAIR</a>
                <a href="ps_total_score.php?match=<?= $_GET['match'] ?>&ps_cat=4" class="btn btn-primary">TEAM</a>
            </div>
            <div class="col-4">
                <span class="h1"><?= $psName; ?></span>
            </div>
        </div>


        <div class="row">

            <div class="col-sm">
                <table class="table" id="example">
                    <thead class="table-primary"> 
                        <th>TEAM</th>
                        <th></th>
                        <th>G</th>
                        <th>S</th>
                        <th>B</th>
                    </thead>

                    <tbody>
                        <?php
                        $player_select = $db->prepare("SELECT * FROM thannam_champion_teamm WHERE match1 = '$_GET[match]'");
                        $player_select->execute();
                        while ($row = $player_select->fetch()) {

                            // $team_select = $db->prepare("SELECT * FROM thannam_champion_teamm WHERE id = '$row[idteam]'");
                            // $team_select->execute();
                            // $team = $team_select->fetch();

                            // $cat_select = $db->prepare("SELECT * FROM thannam_champion_groupteam WHERE id = '$row[catA]'");
                            // $cat_select->execute();
                            // $cat = $cat_select->fetch();
                        ?>
                            <tr> 
                                <td>
                                    <a href="?sex=<?php echo $row['sex']; ?>&match=<?= $_GET['match'] ?>&teamA=<?php echo $team['nameA']; ?>&nameA=<?= $row['nameA']; ?>&catA=<?php echo $cat['namegroup'] ?>">
                                        <?php echo $row['nameA']; ?>

                                    </a>
                                </td>
                                <td></td>

                                <td align="right">
                                    <?php
                                    $sqlp1 = $db->prepare("SELECT finalA,idteam from thannam_champion_poomsae    where  idteam='$row[id]'   and  finalA='ทอง' ");
                                    $sqlp1->execute();
                                    echo   $numGold = $sqlp1->rowCount();
                                    ?>
                                </td>
                                <td align="right">
                                    <?php
                                    $sqlp2 = $db->prepare("select finalA,idteam from thannam_champion_poomsae    where  idteam='$row[id]'   and  finalA='เงิน' ");
                                    $sqlp2->execute();
                                    echo $numSilver = $sqlp2->rowCount();
                                    ?>
                                </td>
                                <td align="right">
                                    <?php
                                    $sqlp3 = $db->prepare("select finalA,idteam from thannam_champion_poomsae    where  idteam='$row[id]'   and  finalA='ทองแดง' ");
                                    $sqlp3->execute();
                                    echo $numSilverGold = $sqlp3->rowCount();
                                    #===========================================
                                    //echo ' = ';
                                    // $allNumR = $numGold + ($numSilver / 10) + ($numSilverGold / 100);

                                    #==================
                                    // $db->query("update " . $prefix . "thannam_champion_teamm  set $numRR='$allNumR'   where id='$res[id]'");
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>


        </div>

        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

        <script>
            // $(document).ready(function() {
            //     $('#example').DataTable();
            // });

            $(document).ready(function() {
                var table = $('#example').DataTable({
                    pageLength: 100,
                    lengthMenu: [
                        [5, 10, 20, 40, 100, -1],
                        [5, 10, 20, 40, 100, 'Todos']
                    ]
                })
            });
        </script>
</body>

</html>