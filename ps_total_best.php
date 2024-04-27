<?php
session_start();
require_once('app/conn_pdo.php');

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
    $insert_best = $db->prepare("INSERT INTO thannam_champion_poomsae_best (match1, nameA, teamA, catA) VALUES ('$_GET[match]', '$_GET[nameA]', '$_GET[teamA]', '$_GET[catA]')");
    $insert_best->execute();
    header("location: ?match=$_GET[match]");
}

if (isset($_GET['delA'])) {
    $dlete_best = $db->prepare("DELETE FROM thannam_champion_poomsae_best where id = '$_GET[delA]'");
    $dlete_best->execute();
    header("location: ?match=$_GET[match]");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOTAL SCORE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script> -->

</head>

<body>
    <?php include('menu.php'); ?>

    <div class="container mt-5">
        <h3><?php echo $_SESSION['nameMatch'] ?></h3>
        <p>
            <a href="ps_total_score.php?match=<?= $_GET['match'] ?>" class="btn btn-info"> BACK </a>
            <a href="ps_total_score_print.php?match=<?= $_GET['match'] ?>" class="btn btn-primary"> PRINT </a>
        </p>


        <div class="row">

            <div class="col-sm">
                <table class="table" id="example">
                    <thead class="table-primary">
                        <th>CATEGORY</th>
                        <th>#</th>
                        <th>NAME</th>
                        <th>TEAM</th>
                        <th></th>
                    </thead>

                    <tbody>
                        <?php
                        $player_select = $db->prepare("SELECT * FROM thannam_champion_poomsae_best WHERE match1 = '$_GET[match]'");
                        $player_select->execute();
                        while ($row = $player_select->fetch()) {

                        ?>
                            <tr>
                                <td><?php echo $row['catA']; ?></td>
                                <td><?php echo $row['sexA']; ?></td>
                                <td><?php echo $row['nameA']; ?></td>
                                <td><?php echo $row['teamA'] ?></td>
                                <td><a href="?match=<?php echo $_GET['match'] ?>&delA=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this player?')" class="btn btn-danger">DEL</a></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>


        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

        <script>
            // $(document).ready(function() {
            //     $('#example').DataTable();
            // });

            $(document).ready(function() {
                var table = $('#example').DataTable({
                    pageLength: 40,
                    lengthMenu: [
                        [5, 10, 20, 40, -1],
                        [5, 10, 20, 40, 'Todos']
                    ]
                })
            });
        </script>
</body>

</html>