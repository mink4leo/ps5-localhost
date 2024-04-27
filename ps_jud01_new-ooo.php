<?php
session_start();
require_once("app/conn_pdo.php");

if (isset($_REQUEST['submitA'])) {
    $accA = $_REQUEST['accA'];
    $preA = $_REQUEST['preA'];
    $j2 = $_REQUEST['j2'];
    $totalB = $accA + $preA;

    $update_score = $db->prepare("UPDATE $dataStart SET acc='$accA', present='$preA', totala = '$totalB' WHERE id = '$j2' ");
    $update_score->execute();

    unset($_SESSION["shopping_cart"]);
    unset($_SESSION['accTotalA']);
    unset($_SESSION["pre1"]);
    unset($_SESSION["pre2"]);
    unset($_SESSION["pre3"]);

    echo "<script language='javascript'> window.location='ps_jude.php?j=$j2'</script>";
}


//=================================================

if (isset($_SESSION["pre1"])) {
    if (isset($_GET['pre1'])) {
        $_SESSION['pre1'] = $_GET['pre1'];
    } else {
        $_SESSION['pre1'] = $_SESSION['pre1'];
    }
} else {
    if (isset($_GET['pre1'])) {
        $_SESSION['pre1'] = $_GET['pre1'];
    } else {
        $_SESSION['pre1'] = '2.0';
    }
}

//++++++++++++++++++++++++++++++
if (isset($_SESSION["pre2"])) {
    if (isset($_GET['pre2'])) {
        $_SESSION['pre2'] = $_GET['pre2'];
    } else {
        $_SESSION['pre2'] = $_SESSION['pre2'];
    }
} else {
    if (isset($_GET['pre2'])) {
        $_SESSION['pre2'] = $_GET['pre2'];
    } else {
        $_SESSION['pre2'] = '2.0';
    }
}
//++++++++++++++++++++++++++++++
if (isset($_SESSION["pre3"])) {
    if (isset($_GET['pre3'])) {
        $_SESSION['pre3'] = $_GET['pre3'];
    } else {
        $_SESSION['pre3'] = $_SESSION['pre3'];
    }
} else {
    if (isset($_GET['pre3'])) {
        $_SESSION['pre3'] = $_GET['pre3'];
    } else {
        $_SESSION['pre3'] = '2.0';
    }
}
//================================================= 
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="001.php"</script>';
            }
        }
    }
}

if (isset($_GET['del'])) {
    // session_destroy();
    $j = $_GET['j'];
    unset($_SESSION["shopping_cart"]);
    unset($_SESSION['accTotalA']);
    unset($_SESSION["pre1"]);
    unset($_SESSION["pre2"]);
    unset($_SESSION["pre3"]);
    header("location:?j=$j");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POOMSAE SCORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-acc {
            width: 200px;
            height: 140px;
            font-weight: bold;
            font-size: 50px;
            text-align: center;
        }

        .blue-text {
            background-color: #323ffb;
            /* color: #17d402; */
        }

        .blue-text {
            color: yellow;
            font-weight: bold;
            /* text-decoration: none; */
        }

        .btn-acc-2 {
            width: 120px;
            height: 60px;
        }

        .acc_total {
            /* width: 250px; */
            height: 140px;
            font-weight: bold;
            font-size: 120px;
            text-align: center;
            /* border: 2px #ccc solid; */
            border-top: -10px;
            text-align: center;
        }

        .btn-reset {
            width: 200px;
            height: 60px;
            font-weight: bold;
            font-size: 20px;
        }

        .col {
            /* border: 1px solid #ccc; */
            text-align: center;
        }



        .flex-container {
            display: flex;
            flex-direction: row;
            text-decoration: none;
            /* background-color: DodgerBlue; */
        }

        .flex-container>input {
            border: 1px solid #333;
            padding: 15px;
            text-align: center;
            margin: 2px;
            /* text-decoration: none; */
        }

        .flex-container>div>a {
            text-decoration: none;
        }
    </style>
</head>

<body>



    <?php
    if (isset($_SESSION["shopping_cart"])) {
        $total = 0;
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            // echo $values["scoreA"];
            $total = $total + ($values["scoreA"] + $values["scoreB"]);
        }
    }

    if (isset($total)) {
        $accTotal = 4 + $total;
    } else {
        $accTotal = 4;
    }
    ?>


    <div class="container-sm text-center mt-5">

        <div class="row  align-items-start">
            <div class="col">
                <!-- <form method="post" action="">
                    <input type="hidden" name="scoreA" value="0.3" />
                    <input type="hidden" name="scoreB" value="0" />
                    <input type="submit" name="add_to_cart" class="btn btn-primary btn-acc-2" value="+0.3" />
                </form> -->
                <form id='myForm33' class="form-horizontal" action="jud_save.php" method="post">
                    <div class="form-actions">
                        <!-- <input type="submit" id="submit" class="btn btn-primary" value="เข้าส่ระบบลงทะเบียนนักกีฬา"> -->
                        <input type="hidden" name="scoreA" value="0.3" />
                        <input type="hidden" name="scoreB" value="0" />
                        <input type="hidden" name="score_one_down" value="yes" />
                        <input type="submit" id="submit33" name="add_to_cart" class="btn btn-primary btn-acc-2" value="+0.3" style="background-color: #f20202" />

                    </div>
                </form>
            </div>
            <div class="col">
                <a href="?del=yes&j=<?= $_GET['j'] ?>" class="btn btn-secondary mb-5 btn-reset">RESET</a>
            </div>
            <div class="col">
                <!-- <form method="post" action="">
                    <input type="hidden" name="scoreA" value="0.1" />
                    <input type="hidden" name="scoreB" value="0" />
                    <input type="submit" name="add_to_cart" class="btn btn-primary btn-acc-2" value="+0.1" />
                </form> -->
                <form id='myForm11' class="form-horizontal" action="jud_save.php" method="post">
                    <div class="form-actions">
                        <!-- <input type="submit" id="submit" class="btn btn-primary" value="เข้าส่ระบบลงทะเบียนนักกีฬา"> -->
                        <input type="hidden" name="scoreA" value="0.1" />
                        <input type="hidden" name="scoreB" value="0" />
                        <input type="hidden" name="score_one_down" value="yes" />
                        <input type="submit" id="submit11" name="add_to_cart" class="btn btn-primary btn-acc-2" value="+0.1" style="background-color: #17d402" />

                    </div>
                </form>
            </div>
        </div>



        <div class="row" >
            <div class="col">
                <form id='myForm3' class="form-horizontal" action="jud_save.php" method="post">
                    <div class="form-actions">
                        <input type="hidden" name="scoreA" value="-0.3" />
                        <input type="hidden" name="scoreB" value="0" />
                        <input type="hidden" name="score_one_down" value="yes" />
                        <input type="submit" id="submit3" name="add_to_cart" class="btn btn-primary  btn-acc" value="-0.3" style="background-color: #f20202" />
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="form-actions acc_total"> 
                        <!-- <span class="success acc_total"> -->
                        <?php
                        if (isset($_SESSION['accTotalA'])) {
                            echo number_format($_SESSION['accTotalA'], 1);
                        } else {
                            echo '4.0';
                        }
                        ?> 
                </div>
            </div>
            <div class="col">
                <form id='myForm1' class="form-horizontal" action="jud_save.php" method="post">
                    <div class="form-actions">
                        <input type="hidden" name="scoreA" value="-0.1" />
                        <input type="hidden" name="scoreB" value="0" />
                        <input type="hidden" name="score_one_down" value="yes" />
                        <input type="submit" id="submit1" name="add_to_cart" class="btn btn-primary  btn-acc" value="-0.1" style="background-color: #17d402" />
                    </div>
                </form>
            </div>


        </div>
    </div>

    <div class="container-sm text-center mt-5">
        <center>
            <table class="table table-striped table" style="width: 80%; align:center">
                <tr>
                    <td width="20%" style="text-align: center; font-size: 30px; font-weight: bold;">
                        <?php
                        if (isset($_SESSION['pre1'])) {
                            $preA1 = $_SESSION['pre1'];
                        } else {
                            $preA1 = '2.0';
                        }
                        echo $preA1;
                        ?>
                    </td>
                    <td>
                        <!-- Strenght and Speed -->
                        <div class="flex-container">
                            <?php
                            for ($i = 2.0; $i > 0.4; $i = $i - 0.1) {
                            ?>
                                <input type="button" value="<?php echo number_format($i, 1); ?>" onClick="document.location.href='?j=<?= $_GET['j'] ?>&pre1=<?php echo number_format($i, 1); ?>'" <?php if ($_SESSION['pre1'] == number_format($i, 1)) { ?> class="blue-text" <?php }   ?>>
                            <?php } ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="20%" style="text-align: center; font-size: 30px; font-weight: bold;">
                        <?php
                        if (isset($_SESSION['pre2'])) {
                            $preA2 = $_SESSION['pre2'];
                        } else {
                            $preA2 = '2.0';
                        }
                        echo $preA2;
                        ?>
                    </td>
                    <td>
                        <!-- Rhythm and coordination -->
                        <div class="flex-container">
                            <?php
                            for ($i = 2.0; $i > 0.4; $i = $i - 0.1) {
                            ?>
                                <input type="button" value="<?php echo number_format($i, 1); ?>" onClick="document.location.href='?j=<?= $_GET['j'] ?>&pre2=<?php echo number_format($i, 1); ?>'" <?php if ($_SESSION['pre2'] == number_format($i, 1)) { ?> class="blue-text" <?php }   ?>>
                            <?php } ?>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td width="20%" style="text-align: center; font-size: 30px; font-weight: bold;">
                        <?php
                        if (isset($_SESSION['pre3'])) {
                            $preA3 = $_SESSION['pre3'];
                        } else {
                            $preA3 = '2.0';
                        }
                        echo $preA3;
                        ?>
                    </td>
                    <td>
                        <!-- Energy expression -->
                        <div class="flex-container">
                            <?php
                            for ($i = 2.0; $i > 0.4; $i = $i - 0.1) {
                            ?>
                                <input type="button" value="<?php echo number_format($i, 1); ?>" onClick="document.location.href='?j=<?= $_GET['j'] ?>&pre3=<?php echo number_format($i, 1); ?>'" <?php if ($_SESSION['pre3'] == number_format($i, 1)) { ?> class="blue-text" <?php }   ?>>
                            <?php } ?>
                        </div>
                    </td>
                </tr>


            </table>

            <table class="table table-striped" style="width: 50%; font-size:40px; font-weight:bold;">
                <tr>
                    <td class="text-center" style="color:#08eb00 ;">
                        <!-- ACC : -->
                        <?php
                        if (isset($_SESSION['accTotalA'])) {
                            echo $_SESSION['accTotalA'];
                            $AllAcc  = $_SESSION['accTotalA'];
                        } else {
                            echo '4.0';
                        }
                        ?>
                    </td>
                    <td class="text-center" style="color:#0091eb ;">
                        <!-- PRE : -->
                        <?php
                        $presentTotal = $_SESSION['pre1'] + $_SESSION['pre2'] + $_SESSION['pre3'];
                        echo $AllPre  =  number_format($presentTotal, 1);
                        ?>
                    </td>
                    <td class="text-center" style="color:#ebc000 ;">
                        <!-- TOTAl : -->
                        <?php
                        $allTotal = number_format($AllPre, 1) + number_format($AllAcc, 1);
                        echo  $AllTotalA = number_format($allTotal, 1);
                        // echo '33';
                        ?>
                    </td>
                    <td>
                        <a name="ACCPRE">&nbsp;</a>
                        <form action="" method="POST">
                            <input type="hidden" name="j2" value="<?= $_GET['j'] ?>">
                            <input type="hidden" name="accA" value="<?= $AllAcc; ?>">
                            <input type="hidden" name="preA" value="<?= $AllPre; ?>">

                            <div class="form-group mb-5">
                                <div class="col text-right">
                                    <input type="submit" name="submitA" id='sweetA' class="btn btn-success btn-lg btn-block" style="height:80px; width:120px" value="SUBMIT">
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $('document').ready(function() {
            $('#submit1').click(function(event) {
                event.preventDefault();
                var x = $('#myForm1').serializeArray();
                $.post(
                    $('#myForm1').attr('action'),
                    x,
                    function(data) {
                        $('.success').html(data)
                    }
                )
            })
        });


        $('document').ready(function() {
            $('#submit3').click(function(event) {
                event.preventDefault();
                var x = $('#myForm3').serializeArray();
                $.post(
                    $('#myForm3').attr('action'),
                    x,
                    function(data) {
                        $('.success').html(data)
                    }
                )
            })
        });


        $('document').ready(function() {
            $('#submit33').click(function(event) {
                event.preventDefault();
                var x = $('#myForm33').serializeArray();
                $.post(
                    $('#myForm33').attr('action'),
                    x,
                    function(data) {
                        $('.success').html(data)
                    }
                )
            })
        });

        $('document').ready(function() {
            $('#submit11').click(function(event) {
                event.preventDefault();
                var x = $('#myForm11').serializeArray();
                $.post(
                    $('#myForm11').attr('action'),
                    x,
                    function(data) {
                        $('.success').html(data)
                    }
                )
            })
        });
    </script>
</body>

</html>