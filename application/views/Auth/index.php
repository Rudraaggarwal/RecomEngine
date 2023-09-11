<link rel="stylesheet" href="<?php echo site_url(); ?>assets/all.css">
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/all.css">
</head>

<body>
	<html lang="en">

	<head>
	</head>

	<body>
		
		<header>
			<div class="logo">SmashWizard</div>
			<ul class="navigation">
				<li><a href="#banner">HOME</a></li>
				<li><a href="<?php echo base_url(); ?>Auth/profile" class="out">ACCOUNT</a></li>
				<li><a href="#about">ABOUT</a></li>
				<li><a href="#review">REVIEWS</a></li>
				<li><a href="#contact">CONTACT</a></li>
				<li><a href="<?= base_url(); ?>Auth/logout">Logout</a></li>
			</ul>
			<div class="hamburger">
				<i class="fa-solid fa-bars on" id="on"></i>
			</div>
			<div class="alert">
				<ul class="navigation1">
					<i class='bx bxs-x-circle close'></i>
					<li><a href="#banner" class="out">HOME</a></li>
					<li><a href="<?php echo base_url(); ?>Auth/user_view" class="out">ACCOUNT</a></li>
					<li><a href="#about" class="out">ABOUT</a></li>
					<li><a href="#review" class="out">REVIEWS</a></li>
					<li><a href="#contact" class="out">CONTACT</a></li>
				</ul>
				</i>
			</div>
		</header>

		<!--Home Section-->
		<section class="banner" id="banner">

			<div class="title">
				<h1>SMASH YOUR WAY<br>TO<br>SUCCESS</h1>
			</div>
			<a href="" class="btn">SHOP NOW</a>
		</section>






		<section class="about" id="about">
			<div class="title">
				<h2 class="titetext">ABOUT US</h2>
			</div>
			<div class="imgtext">
				<img src="https://media.istockphoto.com/id/466766434/vector/polygonal-professional-badminton-player.jpg?s=612x612&w=0&k=20&c=0k_PdhAnOePMkj-yQkv4kTldvN4o3xtGJhJZkA7LlQQ=" alt="">
			</div>
		</section>

		<!--Reviews Section-->
		<section class="review" id="review">
			<div class="title">
				<h2 class="titetext">RACQUET REVIEWS</h2>
				<p>“ Empower Your Game: Racquet Reviews That Smash Expectations ”</p>
			</div>
			<div class="container">
				<div class="cbox1 bbox">
					<img src="https://media.istockphoto.com/id/466766434/vector/polygonal-professional-badminton-player.jpg?s=612x612&w=0&k=20&c=0k_PdhAnOePMkj-yQkv4kTldvN4o3xtGJhJZkA7LlQQ=" alt="">
				</div>
				<div class="cbox2 bbox">
					<h1>OUR HAPPY CUSTOMERS</h1>
				</div>
				<div class="cbox3 bbox">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm_D-PNlhl6nOIAW3kclcCKd1PpU81lG0UKQ&usqp=CAU" alt="">

				</div>
				<div class="cbox4 bbox">
					<div class="boxdetail">
						<h1>Person1</h1>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ex praesentium quaerat magnam minima ut dicta facere ullam ipsum, tempore consectetur, repellat distinctio corporis veritatis!</p>
					</div>
				</div>
				<div class="cbox5 bbox">
					<div class="boxdetail">
						<h1>Person2</h1>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, voluptatem amet? Omnis exercitationem esse quos, voluptate praesentium minus est voluptas tenetur iusto nulla tempore consequuntur, natus dicta repellat officiis dolor!</p>
					</div>
				</div>
				<div class="cbox6 bbox">
					<img src="https://w0.peakpx.com/wallpaper/731/955/HD-wallpaper-winner-sport-badminton-trophy-prize.jpg" alt="">
				</div>
				<div class="cbox7 bbox">
					<div class="boxdetail">
						<h1>BOLT</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur exercitationem non incidunt similique omnis ad facilis quidem quae! Numquam saepe odio doloribus doloremque quis temporibus debitis.</p>
					</div>
				</div>
				<div class="cbox58 bbox">
					<img src="https://st2.depositphotos.com/4112313/7229/v/450/depositphotos_72290833-Badminton-sport-invitation-poster-or-flyer-background-with-empty-space-banner-template.jpg" alt="">
				</div>
			</div>
		</section>

		<!--Reviews Section-->

		<section class="contact" id="contact">
			<div class="footer">
				<div class="links">
					<ul class="navigation">

						<i class='bx bxs-x-circle close'></i>
						<li><a href="#banner" class="out">HOME</a></li>
						<li><a href="<?php echo base_url(); ?>Auth/profile" class="out">ACCOUNT</a></li>
						<li><a href="#about" class="out">ABOUT</a></li>
						<li><a href="#review" class="out">REVIEWS</a></li>
						<li><a href="#contact" class="out">CONTACT</a></li>
					</ul>
					</i>
				</div>
				</header>
				<div class="info">
					<h1>INFO</h1>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel quo eligendi laborum explicabo, porro quaerat eveniet ad iusto natus, maiores cupiditate fuga magnam impedit! Ipsam eum aut obcaecati consequuntur veniam!</p>
				</div>
				<div class="cs">
					<h1>CUSTOMER SERVICE</h1>
					<ul>
						<li>01762-222399</li>
						<li>12345-67890</li>
						<li>abc@xyz.com</li>
					</ul>
				</div>
				<div class="slinks">
					<h1>FOLLOW US</h1>
					<div class="link">
						<a href="/" target="_blank"><i class='bx bxl-linkedin-square'></i></a>
						<a href="/"><i class='bx bxl-codepen' target="_blank"></i></a>
						<a href="/" target="_blank"><i class='bx bxl-github'></i></a>
					</div>
				</div>
		</section>

		<!--Form-->

		<section class="form">
			<h1>JOIN OUR COMMUNITY</h1>
			<input type="email" placeholder="Enter your email here">
			<button>JOIN</button>
		</section>

		<section class="strip">
			<h1>Recommendation Engine</h1>
			<div class="icons">
				<a href="/" target="_blank"><i class='bx bxl-linkedin-square'></i></a>
				<a href="/"><i class='bx bxl-codepen' target="_blank"></i></a>
				<a href="/" target="_blank"><i class='bx bxl-github'></i></a>
			</div>
			</div>
		</section>

	</body>

	</html>