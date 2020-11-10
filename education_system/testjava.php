<!DOCTYPE html>
<html>
<head>
<title>Image retrieve</title>
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><input type="submit" name="submit2" value="getpaper"></td>
</tr>
</table>
</form>
<?php
error_reporting(0);
$con = mysqli_connect('127.0.0.1:3306','root','','education_system') or die('Unable To connect');


if(isset($_POST["submit2"]))
{
   $res=mysqli_query($con,"select * from testjava");
   echo "<table>";
   echo "<tr>";
   
   while($row=mysqli_fetch_array($res))
   {
   echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="600" width="500"/>';
   echo "<br>";
   ?><a href="delete.php?id=<?php echo $row["id"]; ?>"></a> <?php
   echo "</td>";
   } 
   echo "</tr>";
   
   echo "</table>";
  }
?>
</body>
</html>