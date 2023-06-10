<?php
session_start();
	require 'database.php';
  
  if(isset($_POST['submit'])){
    $fname= $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $phone_no = $_POST['phone_no'];
  }
  
	$message = '';
	if(!empty($_POST['email']) && !empty($_POST['password'])){
		//enter new user to database
		$sql = "INSERT INTO users(first_name, last_name, email, pwd, phone_no) VALUES (:fname, :lname, :email, :pass, :phone_no)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
		$stmt->bindParam(':email', $email);
    $stmt->bindParam(':pass', $pass);
    $stmt->bindParam(':phone_no', $phone_no);


		if ($stmt->execute()) {
			$message = 'Successfully created new user';
		} else {
			$message = 'Sorry, there must have been an issue creating your account';
		}

	}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Studymate</title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	<link href="style.css" rel="stylesheet">
</head>
<body>
<?php echo $message ?>
<!-- Navigation --> 
<?php

include 'menu.php';

?>



<section class="banner-bottom-agile-w3ls">
	<div class="container" style="padding-left: 40px; padding-right: 40px;">
		<h3 class="tittle-w3ls text-center">Registration</h3>
		<div class="row inner-sec-w3layouts-agileits black">
		
         <div class="container">
          <div class="contact_grid_right" style="padding-top: 0px;">
               <form action="#" method="post">
                     <div class="row contact_left_grid">
                          <div class="col-md-12 ">
                                <div class="form-group">
                                  <label for="validationCustom01 my-2">FirstName</label>
                                  <input class="form-control" type="text" name="first_name" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                  <label for="validationCustom01 my-2">Last Name</label>
                                  <input class="form-control" type="text" name="last_name" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                  <label for="exampleFormControlInput1">Email</label>
                                  <input class="form-control" type="email" name="email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                  <label for="validationCustom03 my-2">Password</label>
                                  <input class="form-control" type="password" name="password" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                  <label for="validationCustom03 my-2">Confirm Password</label>
                                  <input class="form-control" type="password" name="password" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                  <label for="validationCustom03 my-2">Mobile number</label>
                                  <input class="form-control" type="text" name="phone_no" placeholder="" required="">
                                </div>
                               
                                <div class="col-md-4 con-left" style="padding-right: 16px;right: 16px;">
                                <input class="form-control" name="submit" type="submit" value="Submit">
                                </div>

                          </div>
                      
                     </div>
               </form>


			</div>
		</div>
	</section>



<!--- Footer -->
<footer>
<div class="container-fluid padding ">
<div class="row text-center copyright  "> 
     <div class="col-md-4 ">
     	<img src="img/logoo.png">
     	<br>
     	<p>081 1850 5335</p>
     	<p>contact@infomall.ng</p> 	
     </div>

     <div class="col-md-4 social padding">
		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>	
		<a href="#"><i class="fab fa-instagram"></i></a>
	</div>
   
    <div class="col-md-4">
     	<p><a href="about.html" target="blank" > About us</a></p>
    
     	<p><a href="courses.html" target="blank"> Courses</a></p>
     	
     </div>

     <div class="col-12">
        <hr class="light">
       <p>© 2018 Studymate . All Rights Reserved | Design by
       <a href="http://www.infomall.ng/" target="blank" > Infomall </a></p>
       </div> 

</div>
</div>
</footer>

<!-- <script type="text/javascript">
	
$('.email').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-paper-plane').addClass("next");
    } else {
      $('.icon-paper-plane').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.email').click(
  function(){
    console.log("Something");
    $('.email-section').addClass("fold-up");
    $('.password-section').removeClass("folded");
  }
);

$('.password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-lock').addClass("next");
    } else {
      $('.icon-lock').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.password').click(
  function(){
    console.log("Something");
    $('.password-section').addClass("fold-up");
    $('.repeat-password-section').removeClass("folded");
  }
);

$('.repeat-password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-repeat-lock').addClass("next");
    } else {
      $('.icon-repeat-lock').removeClass("next");
    }
  }
);

$('.next-button.repeat-password').click(
  function(){
    console.log("Something");
    $('.repeat-password-section').addClass("fold-up");
    $('.success').css("marginTop", 0);
  }
);$('.email').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-paper-plane').addClass("next");
    } else {
      $('.icon-paper-plane').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.email').click(
  function(){
    console.log("Something");
    $('.email-section').addClass("fold-up");
    $('.password-section').removeClass("folded");
  }
);

$('.password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-lock').addClass("next");
    } else {
      $('.icon-lock').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.password').click(
  function(){
    console.log("Something");
    $('.password-section').addClass("fold-up");
    $('.repeat-password-section').removeClass("folded");
  }
);

$('.repeat-password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-repeat-lock').addClass("next");
    } else {
      $('.icon-repeat-lock').removeClass("next");
    }
  }
);

$('.next-button.repeat-password').click(
  function(){
    console.log("Something");
    $('.repeat-password-section').addClass("fold-up");
    $('.success').css("marginTop", 0);
  }
);	
</script> -->

  <script src="js/script.js"></script>
</body>
</html> 













