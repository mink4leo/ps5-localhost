<?php
session_start();
require_once('app/conn_pdo.php');

error_reporting(0);
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

if (empty($_SESSION['match'])) {
    header("location:login.php");
}

$page = 'jud';

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
    <title>JUDGES <?php echo $_GET['j'] ?></title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <style>
        @media only screen and (min-device-width: 700px) and (max-device-width: 780px) {
            body {
                font-size: 30px;
            }

            h5 {
                font-size: 30px;
            }

            .judd {
                font-size: 50px;
                font-weight: bold;
                border: 2px solid #333;
            }
        }
    </style>

</head>

<body>
    <?php include('menu.php'); ?>

    <div class="container mt-3">
        <div class="col">
            <?php if (isset($_GET['j'])) { ?>
                <div id="showjud"></div>
                <div id="showscore" class="mt-2"></div>
                <div id="showscore_flag" class="mt-2"></div>

            <?php } else { ?>
                <div class="col-12">
                    <form action="" method="GET" class="text-center col-md-3 justify-center">
                        JUDGE <input type="number" name="j" class="form-control judd">
                    </form>
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
                    url: "ps_jud_show_flag.php",
                    data: "j=<?= $_GET['j'] ?>&match=<?= $_SESSION['match'] ?>",
                    async: false,
                    success: function(getData) {
                        $("div#showjud").html(getData); // ส่วนที่ 3 นำข้อมูลมาแสดง
                    }
                }).responseText;
            }, 3000);
        });

        $(function() {
            setInterval(function() {
                var getData = $.ajax({
                    url: "ps_show_score.php",
                    data: "j=<?= $_GET['j'] ?>",
                    async: false,
                    success: function(getData) {
                        $("div#showscore").html(getData); // ส่วนที่ 3 นำข้อมูลมาแสดง
                    }
                }).responseText;
            }, 3000);
        });


        $(function() {
            setInterval(function() {
                var getData = $.ajax({
                    url: "ps_show1_flag.php",
                    data: "j=<?= $_GET['j'] ?>",
                    async: false,
                    success: function(getData) {
                        $("div#showscore_flag").html(getData); // ส่วนที่ 3 นำข้อมูลมาแสดง
                    }
                }).responseText;
            }, 3000);
        });
    </script>
</body>

</html>