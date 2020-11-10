<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>
<?php
error_reporting(0);
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=$_POST['imgn'];
	$image=$_FILES['image']['tmp_name'];
    $img=file_get_contents($image);
    $con = mysqli_connect('localhost','root','','education_system') or die('Unable To connect');
    $sql = "insert into  testjava values(?,?)";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "ss",$img, $name);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Image Successfullly UPloaded';
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($con);
}
?>
     <form method="POST" style="border:1px solid #ccc" enctype="multipart/form-data">
	 Image name
     <input type="text" name="imgn" required><br>
    <input type="file" name="image" />
    <button>Upload</button>
</form>
<?php
    echo $msg;
?>
</body>
</html>