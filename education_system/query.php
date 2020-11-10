<!DOCTYPE html>
<html lang="en">
<head>
<title>Query</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
form_main {
    width: 100%;
}
.form_main h4 {
    font-family: roboto;
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 15px;
    margin-top: 20px;
    text-transform: uppercase;
}
.heading {
    border-bottom: 1px solid #fcab0e;
    padding-bottom: 9px;
    position: relative;
}
.heading span {
    background: #9e6600 none repeat scroll 0 0;
    bottom: -2px;
    height: 3px;
    left: 0;
    position: absolute;
    width: 75px;
}   
.form {
    border-radius: 7px;
    padding: 6px;
}
.txt[type="text"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt_3[type="text"] {
    margin: 10px 0 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt2[type="submit"] {
    background: #242424 none repeat scroll 0 0;
    border: 1px solid #4f5c04;
    border-radius: 25px;
    color: #fff;
    font-size: 16px;
    font-style: normal;
    line-height: 35px;
    margin: 10px 0;
    padding: 0;
    text-transform: uppercase;
    width: 30%;
}
.txt2:hover {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #5793ef;
    transition: all 0.5s ease 0s;
}
.container{
	margin-top:200px;
}

</style>
<body>

<form method="POST" style="border:1px solid #ccc">

<div class="super_container">
<?php include_once "inc/header.php" ?>

<div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"><strong>Your </strong> Question <span></span></h4>
                <div class="form">
                <form action="contact_send_mail.php" method="post" id="contactFrm" name="contactFrm">
			
                    <input type="text" required="" placeholder="Your Name" value="" name="name" class="txt">
				
                    <input type="text" required="" placeholder="Enter Your Email" value="" name="mob" class="txt">
                    <input type="text" required="" placeholder="Your mobile No" value="" name="email" class="txt">
                    
                	 <textarea placeholder="Write Your Question" name="mess" type="text" class="txt_3"></textarea>
                     <input type="submit" value="submit" name="submit" class="txt2">
                </form>
            </div>
            </div>
            </div
	</div>
</div>

<?php include_once"inc/footer.php" ?>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script src="js/login.js"></script>

</form>

<?php
error_reporting(0);
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "education_system";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   // get values form input text and number
   if(isset($_POST['email']))
   {
   $mail = $_POST['email'];
   $usr = $_POST['name'];
   $mobile = $_POST['mob'];
   $ques = $_POST['mess'];
 
 //$query = "INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_address`, `customer_mobile`) VALUES ('123456', 'suraj', 'gaya', '94312')";


 

$query = "INSERT INTO quest VALUES('$usr','$mail','$mobile','$ques')";

   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data inserted ';
   }else{
       echo 'Data Not inserted';
   }
   mysqli_close($connect);
   }

?>






</body>
</html>