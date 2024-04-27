<?php
$servername = "localhost";
$username = "thannam_thuser2";
$password = "70024269";
$dbname = "thannam_dbname2";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "p2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ALL LINE</title> 
</head>
<body> 

   <?php
   $sql = "SELECT * FROM thannam_champion_poomse limit 20";
   // mysqli_set_charset($conn,"utf8mb4");
   // json_encode($conn, JSON_UNESCAPED_UNICODE);
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
         echo "id: " . $row["id"] . " - Name: " . $row["nameA"] . "<br>";
      }
   } else {
      echo "0 results";
   }
   $conn->close();
   ?>

      
      <hr>
       
</body>
</html>
