<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE</title>
    <!-- <style>
        body {
            background: linear-gradient(147deg, #f6b323 0%, #f23b26 74%);
            font-family: 'Fira Sans', sans-serif;
            height: 100vh;
        }
    </style> -->

</head>

<body>

    <div class="container mt-5">
        <div id="showmonitor"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="js/jquery-3.6.0.min.js"></script> -->
    <script>
        $(function() {
            setInterval(function() {
                var getData = $.ajax({
                    url: "ps_monitor_table_show.php",
                    data: "j=",
                    async: false,
                    success: function(getData) {
                        $("div#showmonitor").html(getData); // ส่วนที่ 3 นำข้อมูลมาแสดง
                    }
                }).responseText;
            }, 3000);
        });
    </script>
</body>

</html>