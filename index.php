<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Studymate</title>
	<link rel="shortcut icon" type="images/png" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>




	<link href="style.css" rel="stylesheet">
</head>
<?php

include 'menu.php';

?>



<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1"></li>
	<li data-target="#slides" data-slide-to="2"></li>	
</ul> 
<div class="carousel-inner ">
	<div class="carousel-item active">
		<img src="img/students.png">
		<div class="carousel-caption">
			<h1 class="display-2 improve">Study<span class="yellow">MATE</span></h1>
			<h3> You are one step away from the university</h3>
			<button type="button" class="btn btn-primary btn-md"><a href="courses.html">TAKE COURSES</a></button>
		</div>
	</div>
	<div class="carousel-item">
		<img src="img/GRADUATE.png">
		<div class="carousel-caption">
			<h1 class="display-2 improve">Study<span class="yellow">MATE</span></h1>
			<h3>Study. Pause. Play. Learn at your own pace</h3>
			<button type="button" class="btn btn-primary btn-md"><a href="courses.html">TAKE COURSES</a></button> 
			
	    </div>
	</div>


	<div class="carousel-item">
		<img src="img/uni.png">
		<div class="carousel-caption">
			<h1 class="display-2 improve">Study<span class="yellow">MATE</span></h1>
			<h3>Your exam guide to higher learning in Nigeria</h3>
			<button type="button" class="btn btn-primary btn-md"><a href="courses.html">TAKE COURSES</a></button>
			
	    </div>

	</div>
</div>	
</div>

<!--- Jumbotron -->


<section class="banner-bottom-agile-w3ls">
		<div class="container" style="padding-left: 40px;padding-right: 40px;">		
			<h3 class="tittle-w3ls text-center">About us</h3>
			<div class="row inner-sec-w3layouts-agileits black">
				<div class="col-lg-6 about-img">
					<img src="img/study.png" class="img-fluid rounded" alt="">
				</div>
				<div class="col-lg-6 about-info text-left">
					<h4 class="sub-hd mb-4">What we do</h4>
					<p>StudyMate is a rich, user-friendly education partner for students preparing for their entrance exams into 
					   institutions of higher learning in Nigeria. </p>
					<p class="sup-para mt-2">The project was designed to walk students through the test questions used by the Joint Admission and Matriculation Board in previous years, for the purpose of admitting students to the institutions of their choice.</p>
					<div class="view my-4">
						<a href="about.html" class="btn btn-primary read-m">View More</a>
					</div>
					
				</div>
			</div>
		</div>
	</section>


<!--- latest courses -->
<section class="banner-bottom-agile-w3ls services black">
		<div class="container" style="padding-left: 40px; padding-right: 40px;">		
			<h3 class="tittle-w3ls cen text-center">Latest courses</h3>
			<div class="row inner-sec-w3layouts-agileits">
				<div class="col-lg-4 service-in text-center">
					<div class="card">
						
						<div class="card-body">
							<h5 class="card-title">Chemistry 2003</h5>
							<img src="img/chemistry.png" class="img-fluid" >
							<div class="buttons">
                                
                                	<button class="btn btn-primary read-m down"><a class="popup-youtube " href="http://mtn.infomall.ng/Chemistry/chem2003/">Start</a><br></button>
                                    
                                
                            </div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 service-in  text-center">
					<div class="card">
						
						<div class="card-body">
							<h5 class="card-title">Chemistry 2004</h5>
							<img src="img/chemistry.png" class="img-fluid" >
							<div class="buttons">
                                
                                	<button class="btn btn-primary read-m down"><a class="popup-youtube " href="http://mtn.infomall.ng/Chemistry/chem2004/">Start</a><br></button>
                                    
                                
                            </div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 service-in  text-center">
					<div class="card">
						
						<div class="card-body">
							<h5 class="card-title">Chemistry 2006</h5>
							<img src="img/chemistry.png" class="img-fluid" >
							<div class="buttons">
                                
                                	<button class="btn btn-primary read-m down"><a class="popup-youtube " href="http://mtn.infomall.ng/Chemistry/chem2005/">Start</a><br></button>
                                    
                                
                            </div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>


 
<!--- Cards -->


<!--- Two Column Section -->

<!--- Fixed background -->



  




<!--- Two Column Section -->





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
    
     	<p><a href="courses.html" target="blank" > Courses </a></p>
       
     </div>

     <div class="col-12">
        <hr class="light">
       <p>© 2018 Studymate . All Rights Reserved | Design by
       <a href="http://www.infomall.ng/" target="blank" > Infomall </a></p>
       </div> 

</div>
</div>
</footer>
<script src="js/script.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
});
</script>
</body>
</html> 













