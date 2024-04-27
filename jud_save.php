<?php
session_start();

if (isset($_SESSION['accTotalA'])) {

    $accTotalA = '0';
    if (isset($_REQUEST['score_one_down'])) {
        $accTotalA  = $_SESSION['accTotalA'] + $_POST['scoreA'];
        echo number_format($accTotalA, 1);

        $_SESSION['accTotalA'] = $accTotalA;
        // echo 'ss';
    } else {
        echo number_format($_SESSION['accTotalA'], 1);
        echo 'AAA';
    }
    
} else {
    
    $_SESSION['accTotalA'] = 4;
    // echo '4.0';
    // $accTotalA = 0;

    if (isset($_REQUEST['score_one_down'])) {
        $accTotalA  = $_SESSION['accTotalA'] + $_POST['scoreA'];
        echo number_format($accTotalA, 1);
        // echo 'dd';

        $_SESSION['accTotalA'] = $accTotalA;
        // echo 'ss';
    } else {
        echo number_format($_SESSION['accTotalA'], 1);
        echo 'AAA';
    }
   
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