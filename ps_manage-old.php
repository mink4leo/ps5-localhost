<?php
session_start();
require_once('app/conn_pdo.php');


if ($_SESSION['match'] == "") {
    header("location:login.php");
}

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
if (isset($_GET['resetA'])){
    $updateAA = $db->prepare("UPDATE $dataStart SET idstart = '0', lastID = '0' ");
    $updateAA->execute();
    header("location:ps_manage.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANAGE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <style>
        .judd {
            justify-content: center;
            text-align: center;
            /* width: 80%; */
            width: 200px;
            /* height: 120px; */
            /* padding: 30px; */
            font-size: 40px;
        }
    </style>

</head>

<body>
    <?php include('menu.php'); ?>

    <div class="container mt-5">
        <h3><?php echo $_SESSION['nameMatch'] ?></h3>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">

                    <div class="card-body">
                        <h5 class="card-title">SHOW MONITOR</h5>
                        <div class="d-grid gap-2">
                            <a href="ps_monitor.php" target="_blank" class="btn btn-warning"> MONITOR 1</a>
                            <a href="ps_monitor_2.php" target="_blank" class="btn btn-warning">MONITOR 2</a>
                            <a href="ps_monitor_2_flag.php" target="_blank" class="btn btn-info">MONITOR  FLAG</a>
                            <a href="ps_monitor_table.php" target="_blank" class="btn btn-warning">TABLE</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Show All Monitor</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">

                    <div class="card-body">
                        <!-- <h5 class="card-title">JUDGES SETTING</h5> -->
                        <p class="card-text">
                            <!-- <a href="ps_jude.php" class="btn btn-primary">GO TO JUDGES</a> -->
                            <!-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">GO TO JUDGES</a> -->
                        <form action="ps_jude.php" method="GET" class="text-center col-md-3 justify-center">
                            JUDGE <input type="number" name="j" class="judd">
                        </form>
                        </p>

                        <!-- MODAL -->
                        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">JUDGES NUMBER</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="ps_jude.php" method="GET" class="text-center col-md-3 justify-center">
                                            JUDGE <input type="number" name="j" class="form-control judd">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">CONTINUE</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- MODAL END -->

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Number of JUDGES</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">

                    <div class="card-body">
                        <h5 class="card-title">ADMIN SETTING</h5>
                        <div class="d-grid gap-2">
                            <a href="ps_admin.php?match=<?= $_SESSION['match'] ?>" class="btn btn-primary">ADMIN SCORING</a>
                            <a href="ps_admin_flag.php?match=<?= $_SESSION['match'] ?>" class="btn btn-info">ADMIN FLAG</a>
                            <a href="ps_total_score.php?match=<?= $_SESSION['match'] ?>" class="btn btn-primary">TOTAL SCORE</a>
                            <a href="?match=<?= $_SESSION['match'] ?>&resetA=yes" onclick="return confirm('Are you sure you want to Reset');" class="btn btn-danger">RESET</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Admin setting Player</small>
                    </div>
                </div>
            </div>
        </div>




        <div class="col-sm-4 mt-5">
            <form action="" method="POST">
                <input type="hidden" name="jid" value="<?php echo $res_jude['id'] ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">JUDGES</span>
                    </div>
                    <input type="text" name="jnum" class="form-control" value="<?php echo $res_jude['judNum'] ?>">
                    <div class="input-group-append">
                        <input type="submit" name="jnumUpdate" value="+" class="btn btn-success">
                    </div>
                </div>
            </form>

            <?php if (isset($_GET['action'])) {
                echo '<br><span style=color:green><b>Update successfully</b></span>';
            } ?>
            <div class="input-group mb-3">
                <a href="logout.php?match=<?= $_SESSION['match'] ?>" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>