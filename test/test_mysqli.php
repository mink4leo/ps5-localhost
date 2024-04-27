<?php 
// $db_host = "localhost";
// $db_user = "root";
// $db_password = "";
// $db_name = "p2";

$db_host = "localhost";
$db_user = "thannam_thuser2";
$db_password = "70024269";
$db_name = "thannam_dbname2";

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$sql = "SELECT * FROM thannam_champion_poomse limit 10";
$result = $mysqli->query($sql);

while ($row = $result->fetch_array()) {
    echo "id: " . $row["id"] . " - Name: " . $row["nameA"] . "<br>";
}
?>
    
</body>
</html>