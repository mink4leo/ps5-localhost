<?php
session_start(); 
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
    $j = $_GET['j'];
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="?j='.$j.'"</script>';
            }
        }
    }
}

if (isset($_GET['del'])) {
    session_destroy();
    header("location:?");
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
            width: 250px;
            height: 140px;
            font-weight: bold;
            font-size: 90px;
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
                <form method="post" action="">
                    <input type="hidden" name="scoreA" value="0.3" />
                    <input type="hidden" name="scoreB" value="0" />
                    <input type="submit" name="add_to_cart" class="btn btn-primary btn-acc-2" value="+0.3" />
                </form>
            </div>
            <div class="col">
                <a href="?del=yes" class="btn btn-secondary mb-5 btn-reset">RESET</a>
            </div>
            <div class="col">
                <form method="post" action="">
                    <input type="hidden" name="scoreA" value="0.1" />
                    <input type="hidden" name="scoreB" value="0" />
                    <input type="submit" name="add_to_cart" class="btn btn-primary btn-acc-2" value="+0.1" />
                </form>
            </div>
        </div>



        <div class="row">
            <div class="col">
                <!-- <form method="post" action="">
                    <input type="hidden" name="scoreA" value="-0.3" />
                    <input type="hidden" name="scoreB" value="0" />
                    <input type="submit" name="add_to_cart" class="btn btn-primary btn-acc" value="-0.3" style="background-color: #f20202" />
                </form> -->





                <br>
                <!-- test Systems==========333333333333333333333333333333333333333333333333333333333333333333-->
                <form id='myForm3' class="form-horizontal" action="jud_save.php" method="post">
                    <div class="form-actions">
                        <!-- <input type="submit" id="submit" class="btn btn-primary" value="เข้าส่ระบบลงทะเบียนนักกีฬา"> -->
                        <input type="hidden" name="scoreA" value="-0.3" />
                        <input type="hidden" name="scoreB" value="0" />
                        <input type="hidden" name="score_one_down" value="yes" />
                        <input type="submit" id="submit3" name="add_to_cart" class="btn btn-primary  btn-acc" value="-0.3" style="background-color: #f20202" />

                    </div>
                </form>
            </div>
            <div class="col">
                <!-- <input type="text" name="add_to_cart" class="acc_total" value="<?= number_format($accTotal, 1) ?>" max="4.0" min="0.0" /> -->
                <span class="success acc_total">
                    <?php
                    if (isset($_SESSION['$accTotalA'])) {
                        echo $_SESSION['$accTotalA'];
                    } else {
                        echo '4.011';
                        echo $_SESSION['$accTotalA'];

                    } 
                    ?>
                </span>

                <br>

                <?php
                // echo number_format($_SESSION['$accTotalA'], 1);
                ?>
            </div>
            <div class="col">
                <!--                 
                <form method="post" action="">
                    <input type="hidden" name="scoreA" value="-0.1" />
                    <input type="hidden" name="scoreB" value="0" />
                    <input type="submit" name="add_to_cart" class="btn btn-primary  btn-acc" value="-0.1" style="background-color: #17d402" />
                </form> -->







                <br>
                <!-- test Systems  1111111111p1111111111p1111111111p1111111111p1111111111p1111111111p -->
                <form id='myForm1' class="form-horizontal" action="jud_save.php" method="post">
                    <div class="form-actions">
                        <!-- <input type="submit" id="submit" class="btn btn-primary" value="เข้าส่ระบบลงทะเบียนนักกีฬา"> -->
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
                        <br><?php
                            if (isset($_SESSION['pre1'])) {
                                $preA1 = $_SESSION['pre1'];
                            } else {
                                $preA1 = '2.0';
                            }
                            echo $preA1;
                            ?>

                    </td>
                    <td>
                        Strenght and Speed
                        <div class="flex-container">
                            <?php
                            for ($i = 2.0; $i > 0.4; $i = $i - 0.1) {
                            ?>
                                <input type="button" value="<?php echo number_format($i, 1); ?>" onClick="document.location.href='?pre1=<?php echo number_format($i, 1); ?>'" <?php if ($_SESSION['pre1'] == number_format($i, 1)) { ?> class="blue-text" <?php }   ?>>
                            <?php } ?>
                        </div>

                    </td>
                </tr>

                <tr>
                    <td width="20%" style="text-align: center; font-size: 30px; font-weight: bold;">
                        <br><?php
                            if (isset($_SESSION['pre2'])) {
                                $preA2 = $_SESSION['pre2'];
                            } else {
                                $preA2 = '2.0';
                            }
                            echo $preA2;
                            ?>

                    </td>
                    <td>
                        Rhythm and coordination
                        <div class="flex-container">
                            <?php
                            for ($i = 2.0; $i > 0.4; $i = $i - 0.1) {
                            ?>
                                <input type="button" value="<?php echo number_format($i, 1); ?>" onClick="document.location.href='?pre2=<?php echo number_format($i, 1); ?>'" <?php if ($_SESSION['pre2'] == number_format($i, 1)) { ?> class="blue-text" <?php }   ?>>
                            <?php } ?>
                        </div>

                    </td>
                </tr>

                <tr>
                    <td width="20%" style="text-align: center; font-size: 30px; font-weight: bold;">
                        <br> <?php
                                if (isset($_SESSION['pre3'])) {
                                    $preA3 = $_SESSION['pre3'];
                                } else {
                                    $preA3 = '2.0';
                                }
                                echo $preA3;
                                ?>

                    </td>
                    <td>
                        Energy expression
                        <div class="flex-container">
                            <?php
                            for ($i = 2.0; $i > 0.4; $i = $i - 0.1) {
                            ?>
                                <input type="button" value="<?php echo number_format($i, 1); ?>" onClick="document.location.href='?pre3=<?php echo number_format($i, 1); ?>'" <?php if ($_SESSION['pre3'] == number_format($i, 1)) { ?> class="blue-text" <?php }   ?>>
                            <?php } ?>
                        </div>

                    </td>
                </tr>


            </table>
        </center>

        <center>
            <table class="table table-striped" style="width: 50%; font-size:40px; font-weight:bold;">
                <tr>
                    <td class="text-center" style="color:#08eb00 ;">
                        <!-- ACC : -->
                        <?= number_format($accTotal, 1) ?>
                    </td>
                    <td class="text-center" style="color:#0091eb ;">
                        <!-- PRE : -->
                        <?php
                        $presentTotal = $_SESSION['pre1'] + $_SESSION['pre2'] + $_SESSION['pre3'];
                        echo number_format($presentTotal, 1);
                        ?>
                    </td>
                    <td class="text-center" style="color:#ebc000 ;">
                        <!-- TOTAl : -->
                        <?php
                        $allTotal = number_format($accTotal, 1) + number_format($presentTotal, 1);
                        echo number_format($allTotal, 1);
                        ?>

                    </td>
                </tr>
            </table>
        </center>



    </div>



    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


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
    </script>

</body>

</html>