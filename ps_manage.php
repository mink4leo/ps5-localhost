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
if (isset($_GET['resetA'])) {
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
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

    <style>
        ::selection {
            background: #FF676D;
            color: #fff;
        }

        /* .container {
            max-width: 950px;
            width: 100%;
            overflow: hidden;
            padding: 80px 0;
        } */

        /* .container .main-card {
            display: flex;
            justify-content: space-evenly;
            width: 100%;
            transition: 1s;
        } */

        #two:checked~.main-card {
            margin-left: -100%;
        }

        .container .main-card .cards {
            /* width: calc(100% / 2 - 10px); */
            display: flex;
            flex-wrap: wrap;
            margin: 0 20px;
            justify-content: space-between;
        }

        .main-card .cards .card {
            width: calc(100% / 3 - 10px);
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
            transition: all 0.4s ease;
        }

        .main-card .cards .card:hover {
            transform: translateY(-15px);
        }

        .cards .card .content {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .cards .card .content .img {
            height: 130px;
            width: 130px;
            border-radius: 50%;
            padding: 3px;
            background: #FF676D;
            margin-bottom: 14px;
        }

        .card .content .img img {
            height: 100%;
            width: 100%;
            border: 3px solid #ffff;
            border-radius: 50%;
            object-fit: cover;
        }

        .card .content .img span {
            height: 100%;
            width: 100%;
            /* border: 3px solid #ffff; */
            /* border-radius: 100%; */
            object-fit: cover;
            font-size: 80px;
            color: #FFF;
        }

        .card .content .name {
            font-size: 20px;
            font-weight: 500;
        }

        .media-icons a {
            text-align: center;
            line-height: 33px;
            height: 35px;
            width: 35px;
            margin: 0 4px;
            font-size: 14px;
            color: #FFF;
            border-radius: 50%;
            border: 2px solid transparent;
            background: #FF676D;
            transition: all 0.3s ease;
        }

        .media-icons a:hover {
            color: #FF676D;
            background-color: #fff;
            border-color: #FF676D;
        }

        .container .button {
            width: 100%;
            display: flex;
            justify-content: center;
            margin: 20px;
        }

        .button label {
            height: 15px;
            width: 15px;
            border-radius: 20px;
            background: #fff;
            margin: 0 4px;
            cursor: pointer;
            transition: all 0.5s ease;
        }

        .button label.active {
            width: 35px;
        }

        #one:checked~.button .one {
            width: 35px;
        }

        #one:checked~.button .two {
            width: 15px;
        }

        #two:checked~.button .one {
            width: 15px;
        }

        #two:checked~.button .two {
            width: 35px;
        }

        input[type="radio"] {
            display: none;
        }
    </style>

</head>

<body>
    <?php include('menu.php'); ?>

    <div class="container mt-5">
        <h3><?php echo $_SESSION['nameMatch'] ?></h3>

        <!DOCTYPE html>
        <!-- Created By CodingLab - www.codinglabweb.com -->
        <html lang="en" dir="ltr">

        <head>
            <meta charset="UTF-8">
            <title> Responsive Our Team Section | CodingLab </title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">

            <!-- <link rel="stylesheet" href="css/all.min.css" /> -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>

        <body>
            <div class="container">


                <div class="row">

                    <div class="row row-cols-1 row-cols-md-8 g-4">
                        <div class="col">
                            <div class="card h-100">

                                <div class="card-body">
                                    <div class="main-card">

                                        <div class="cards">
                                            <div class="card">
                                                <div class="content">
                                                    <a href="ps_jude.php?j=1" style="text-decoration: none;">
                                                        <div class="img">
                                                            <!-- <img src="images/img1.jpg" alt=""> -->
                                                            <span>R</span>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="content">
                                                    <a href="ps_jude.php?j=2" style="text-decoration: none;">
                                                        <div class="img">
                                                            <span>J1</span>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="content">
                                                    <a href="ps_jude.php?j=3" style="text-decoration: none;">
                                                        <div class="img">
                                                            <span>J2</span>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-5">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">SHOW MONITOR</h5>
                                    <div class="d-grid gap-2">
                                        <!-- <a href="ps_monitor.php" target="_blank" class="btn btn-warning"> MONITOR 1</a> -->
                                        <a href="ps_monitor_2.php" target="_blank" class="btn btn-warning">MONITOR 2</a>
                                        <a href="ps_monitor_2_flag.php" target="_blank" class="btn btn-info">MONITOR FLAG</a>
                                        <a href="ps_monitor_table.php" target="_blank" class="btn btn-warning">TABLE</a>
                                        <a href="ps_monitor_2_table.php" target="_blank" class="btn btn-warning">TABLE 2</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">ADMIN SETTING</h5>
                                    <div class="d-grid gap-2">
                                        <a href="ps_admin.php?match=<?= $_SESSION['match'] ?>" class="btn btn-primary">ADMIN SCORING</a>
                                        <a href="ps_admin_flag.php?match=<?= $_SESSION['match'] ?>" class="btn btn-info">ADMIN FLAG</a>
                                        <a href="ps_total_score.php?match=<?= $_SESSION['match'] ?>" class="btn btn-primary">TOTAL SCORE</a>
                                        <a href="?match=<?= $_SESSION['match'] ?>&resetA=yes" onclick="return confirm('Are you sure you want to Reset');" class="btn btn-danger">RESET</a>
                                        <?php
                                        echo $myIP = gethostbyname(trim(`hostname`));
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
        </body>

        </html>



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


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>