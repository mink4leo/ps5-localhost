<?php
session_start();
require_once("app/conn_pdo.php");

//==============MATCH judNum
$stmt_match = $db->prepare("SELECT * FROM thannam_match where id = '$_GET[match]'");
$stmt_match->execute();
$resmatch = $stmt_match->fetch(PDO::FETCH_ASSOC);

//===============START
$stmt_start = $db->prepare("SELECT * FROM $dataStart_flag WHERE id = '1'");
$stmt_start->execute();
// $num_flag = $stmt_start->rowCount();
$res = $stmt_start->fetch();

 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THANNAM SCORE POOMSAE</title>
    <script type="text/JavaScript">
        <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
    </script>
    <style>
        /* img {
            /* width: 90%; 
        } */

        h4 {
            font-size: 24px;
        }
    </style>
</head>

<body onLoad="JavaScript:AutoRefresh(5000);">


    <?php if ($res['idstart1'] > 0) { ?>

        <h2 class="text-center">JUDGE <?php echo $_GET['j']; ?></h2>
        <div class="card text-center">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="btn-group" role="group">
                    <a href="ps_jud03.php?j=<?= $_GET['j'] ?>&roundA=1" class="btn btn-border btn-warning btn-lg">Round 1</a>
                    <!-- <a href="ps_jud03.php?j=<?= $_GET['j'] ?>&roundA=2" class="btn btn-border btn-warning btn-lg">Round 2</a>
                    <a href="ps_jud03.php?j=<?= $_GET['j'] ?>&roundA=3" class="btn btn-border btn-warning btn-lg">Round 3</a> -->
                </div>
            </div>

        </div>
    <?php } else { ?>
        <div class="col">
            <h4 class="text-center"><img src="Loading_icon.gif" class="img-responsive">
                <br>WAITING FOR NEXT PLAYER
            </h4>
        </div>
    <?php } ?>

</body>

</html>