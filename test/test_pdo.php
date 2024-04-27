<?php 
$db_host = "localhost";
$db_user = "thannam_thuser2";
$db_password = "70024269";
$db_name = "thannam_dbname2";

try{
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password); 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?><!DOCTYPE html>
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
$result = $db->query($sql);

while ($row = $result->fetch()){
    echo "id: " . $row["id"] . " - Name: " . $row["nameA"] . "<br>";

}
?>
    
</body>
</html>