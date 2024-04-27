<?php
ini_set('session.gc_maxlifetime', 36000); //10 hr.

session_start();
require_once('app/conn_pdo.php');

error_reporting(0);
// ini_set('display_errors',1);

$page = 'login';
$idMatch = $_GET['match'];
// $idMatch = 1944;

//=========================MATCH ID
$stmt_match = $db->prepare("SELECT * from thannam_match where id='$idMatch'");
$stmt_match->execute();
$match_res = $stmt_match->fetch(PDO::FETCH_ASSOC);


if (isset($_SESSION['match'])) {
    header("location:ps_manage.php");
}

//==========================
if (isset($_REQUEST['matchID'])) {
    $matchID = $_REQUEST['matchID'];
    $password = $_REQUEST['password'];

    $stmt_login = $db->prepare("SELECT * FROM thannam_match WHERE id = '$matchID' AND pass = '$password'");
    $stmt_login->execute();
    $res_login = $stmt_login->fetch(PDO::FETCH_ASSOC);

    $num_row = $stmt_login->rowCount();

    if ($num_row > 0) {
        if (!isset($_POST['remember'])) {
            //================================
            // setcookie('user_login', '');
            setcookie('user_password', '');
            //================================
            // $res_m = $login_select->fetch();
            $_SESSION['match'] = $res_login['id'];
            $_SESSION['nameMatch'] = $res_login['nameA'];
            // $_SESSION['match'] = $res_login['nameA'];
            header("location:ps_manage.php");
        } else {
            setcookie('user_password', $_POST['password'], time() + (10 * 360 * 24 * 60 * 60));
            $_SESSION['match'] = $res_login['id'];
            $_SESSION['nameMatch'] = $res_login['nameA'];
            // $_SESSION['match'] = $res_login['nameA'];
            header("location:ps_manage.php");
        }
    } else {
        $err = "Password wrong!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POOMSAE LOGIN</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .btn {
            height: 80px !important;
            font-size: 50px;
        }

        .loginInput {
            height: 100px;
            font-size: 50px;
        }

        .loginInput2 {
            height: 50px;
            font-size: 50px;
        }

        /* @media  screen and (max-width: 780px) and (min-width: 700px) { */
        @media only screen and (min-device-width: 700px) and (max-device-width: 780px) {
            body {
                font-size: 30px;
            }

            h5 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

    <?php include('menu.php'); ?>

    <div class="container-sm mt-5">
        <div class="row ">
            <div class="col-md-9 mx-auto">

                <?php if (isset($_GET['match'])) { ?>
                    <!-- <h3>Login</h3> -->
                    <form action="" method="post">

                        <div class="form-group">
                            <label for="match">
                                <h5><?php echo $match_res['nameA']; ?></h5>
                            </label>
                            <input type="hidden" name="matchID" value="<?php echo $match_res['id']; ?>">
                        </div>
                        <?php if (isset($err)) { ?>
                            <div class="form-group">
                                <p>
                                <div class="alert alert-warning"><?php echo $err ?></div>
                                </p>
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" name="password" class="form-control loginInput" value="<?php if (isset($_COOKIE['user_password'])) {
                                                                                                echo $_COOKIE['user_password'];
                                                                                            } ?>">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember" id="flexCheckChecked" class="form-check-input loginInput2" <?php if (isset($_COOKIE['user_password'])) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?>>
                            <label for="flexCheckChecked">Remember Me</label>
                        </div>
                        <div class="form-group mt-2">
                            <input type="submit" class="form-control btn btn-primary" value="Login">
                        </div>

                    </form>
                <?php } else { ?>
                    <form action="" method="get">
                        <div class="form-group">
                            <label for="">Match ID</label>
                            <input type="number" name="match" class="form-control loginInput">
                        </div>
                        <div class="form-group mt-2">
                            <input type="submit" class="form-control btn btn-info" value="Match No.">
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>



</body>

</html>