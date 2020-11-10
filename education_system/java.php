<!DOCTYPE html>
<html>
<body>





<?php
error_reporting(0);
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "education_system";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   // get values form input text and number
   //if(isset($_POST['email']))
   //{
   //$mail = $_POST['email'];
   //$usr = $_POST['username'];
 //  $pass = $_POST['psw'];
  // $mobile = $_POST['contact'];
 
 //$query = "INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_address`, `customer_mobile`) VALUES ('123456', 'suraj', 'gaya', '94312')";





$sql = "SELECT java FROM givetest";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["java"]. " - Name: " . $row["name"]. " " . $row["percent"]. "<br>";
    }
} else {
    echo "0 results";
 }
$conn->close();
?>


</body>
</html>