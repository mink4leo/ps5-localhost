<?php
session_start();
require_once('app/conn_pdo.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONITOR</title>
    <style>
        body {
            background: linear-gradient(147deg, #f6b323 0%, #f23b26 74%);
            font-family: 'Fira Sans', sans-serif;
            height: 100vh;
            overflow: hidden;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        .container {
            position: fixed;
            /* bottom: 0; */
            /* background: rgba(0, 0, 0, 0.5); */
            color: #f1f1f1;
            width: 100%;
            padding: 20px;
        }
    </style>

</head>

<body>
    <video autoplay muted loop id="myVideo">
        <source src="bg_2.mp4" type="video/mp4">
    </video>

    <div class="container">
        <div id="showmonitor"></div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script>
        $(function() {
            setInterval(function() {
                var getData = $.ajax({
                    url: "ps_monitor_show_2.php",
                    data: "j=",
                    async: false,
                    success: function(getData) {
                        $("div#showmonitor").html(getData); // ส่วนที่ 3 นำข้อมูลมาแสดง
                    }
                }).responseText;
            }, 7000);
        });  
    </script>
</body>

</html>