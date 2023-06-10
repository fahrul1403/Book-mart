<?php

?>

<!-- Navigation --> 
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid"> 
	<a class="navbar-brand" href="index.php"><img src="img/logoo.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
	data-target="#navbarResponsive">
	<span class="navbar-toggler-icon"></span>	
	</button>

	<div class="collapse navbar-collapse" id="navbarResponsive">
		<?php if(isset($_SESSION['user_id'])): ?>
				<?php echo'<span>Welcome</span>, '.$_SESSION['user_name']; ?> 
			<?php else: ?> 

				<?php endif; ?>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php" id="1" onclick="Visiteds(this)">Home</a>
			</li>
				
			<li class="nav-item">
				<a class="nav-link" href="about.php" id="2" onclick="Visiteds(this)">About us</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="courses.php" id="3" onclick="Visiteds(this)">Courses</a>
			</li>
		<?php if(isset($_SESSION['user_id'])): ?>


			
			<li class="nav-item">
					<a class="nav-link" id="4" onclick="Visiteds(this)" href="logout.php">Log out</a>
			</li>

		<?php else: ?> 
			<li class="nav-item">
					<a class="nav-link" href="register.php" id="5" onclick="Visiteds(this)">Registration</a>
			</li>
			
		
			<li class="nav-item">
				<a class="nav-link" href="login.php" id="6" onclick="Visiteds(this)">Login</a>
			</li>
	   <?php endif; ?>
			
		</ul>
	</div>
</div>
	
</nav>

