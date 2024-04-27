<?php
// $servername = "localhost";
// $username = "thannam_thuser2";
// $password = "70024269";
// $dbname = "thannam_dbname2";


$db_host = "localhost";
$db_user = "thannam_thuser2";
$db_password = "70024269";
$db_name = "thannam_dbname2";

try {
    $db = new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $e->getMessage();
}

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "p2";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <?php
    $stmt_select = $db->prepare("SELECT * FROM thannam_champion_poomse limit 20");
    $stmt_select->execute();
    mysqli_set_charset($conn, "utf8");
    while ($row = $stmt_select->fetch()) {
        echo "id: " . $row["id"] . " - Name: " . $row["nameA"] . "<br>";
    }
    ?>
</body>

</html>