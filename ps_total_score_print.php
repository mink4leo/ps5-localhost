<?php
session_start();
require_once('app/conn_pdo.php');

//==========JudeNum
$stmt_jude = $db->prepare("SELECT * FROM thannam_match where id = '" . $_SESSION['match'] . "'");
$stmt_jude->execute();
$res_jude = $stmt_jude->fetch(PDO::FETCH_ASSOC); 

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

    <div class="container mt-5">

        <div class="text-center">
            <h3><?php echo $_SESSION['nameMatch'] ?></h3>
            <h4>POOMSAE : BEST PLAYER</h4>
            <br>
        </div>
        <div class="row">

            <div class="col-sm">
                <table class="table" id="example">
                    <thead class="table-primary">
                        <th>CATEGORY</th>
                        <th>#</th>
                        <th>NAME</th>
                        <th>TEAM</th>
                        <!-- <th></th> -->
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
                                <!-- <td><a href="?match=<?php echo $_GET['match'] ?>&delA=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this player?')" class="btn btn-danger">DEL</a></td> -->
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>


        </div>


</body>

</html>