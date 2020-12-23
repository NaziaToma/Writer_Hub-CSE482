<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: home1.php');
    }
    include('createcookie.php')
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
	<script src="https://kit.fontawesome.com/a690a1cf62.js" crossorigin="anonymous"></script>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Josefin+Sans:wght@500&family=Lora:wght@400;600;700&display=swap" rel="stylesheet">

	<!-- Custom Styling -->
    <link rel="stylesheet" href="css/stylehome.css">

	<title>Homepage</title>
</head>
<body>
	<header>
		<div class="logo">
			<h1 class="logo-text">
				<span><i class="fa fa-pen"></i></span> Writers'<span>Hub</span></h1>
		</div>
		<i class="fa fa-bars menu-toggle"></i>
		<ul class="nav">
			<li>
				<a href="#">
					<i class="fa fa-search"></i>
			    </a>

				<div class="section search">
					<form action="index.html" method="post">
						<input type="text" name="search-term" class="text-input" placeholder="Search...">
					</form>
				</div>

		    </li>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li>
				<a href="#">
					<i class="fa fa-bell"></i>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-user"></i>
				</a>
				<ul>
					<li><a href="#">Dashboard</a></li>
			        <li><a href="logout.php" class="logout">Logout</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Catagories</a>
				<ul>
					<li><a href="#">Science</a></li>
			        <li><a href="#">Story</a></li>
			        <li><a href="#">Poem</a></li>
			        <li><a href="#">Fiction</a></li>
				</ul>
			</li>
		</ul>
	</header>

	<!--Page Wrapper -->
	<div class="page-wrapper">
		<!-- Post Slider -->
		<div class="post-slider">
			<h2 class="slider-title">Trending</h1>
				<i class="fas fa-chevron-left prev"></i>
				<i class="fas fa-chevron-right next"></i>

			<div class="post-wrapper">

				<div class="post">
					<img src="images/image_1.jpg" alt="" class="slider-image">
					<div class="post-info">
						<h3><a href="single.html">Write Your Story, write your imagination!</a></h4>
						<i class="far fa-user"> Mir Sadia Afrin</i>
						&nbsp;
						<i class="far fa-calendar"> November 16, 2020</i>
					</div>
				</div>

				<div class="post">
					<img src="images/image_1.jpg" alt="" class="slider-image">
					<div class="post-info">
						<h3><a href="single.html">Write Your Story, write your imagination!</a></h4>
						<i class="far fa-user"> Mir Sadia Afrin</i>
						&nbsp;
						<i class="far fa-calendar"> November 16, 2020</i>
					</div>
				</div>

				<div class="post">
					<img src="images/image_1.jpg" alt="" class="slider-image">
					<div class="post-info">
						<h3><a href="single.html">Write Your Story, write your imagination!</a></h4>
						<i class="far fa-user"> Mir Sadia Afrin</i>
						&nbsp;
						<i class="far fa-calendar"> November 16, 2020</i>
					</div>
				</div>

				<div class="post">
					<img src="images/image_1.jpg" alt="" class="slider-image">
					<div class="post-info">
						<h3><a href="single.html">Write Your Story, write your imagination!</a></h4>
						<i class="far fa-user"> Mir Sadia Afrin</i>
						&nbsp;
						<i class="far fa-calendar"> November 16, 2020</i>
					</div>
				</div>
				<div class="post">
					<img src="images/image_1.jpg" alt="" class="slider-image">
					<div class="post-info">
						<h3><a href="single.html">Write Your Story, write your imagination!</a></h4>
						<i class="far fa-user"> Mir Sadia Afrin</i>
						&nbsp;
						<i class="far fa-calendar"> November 16, 2020</i>
					</div>
				</div>

				<div class="post">
					<img src="images/image_1.jpg" alt="" class="slider-image">
					<div class="post-info">
						<h3><a href="single.html">Write Your Story, write your imagination!</a></h4>
						<i class="far fa-user"> Mir Sadia Afrin</i>
						&nbsp;
						<i class="far fa-calendar"> November 16, 2020</i>
					</div>
				</div>				

			</div>
		</div>
		<!-- // Post Slider -->

		<!-- Content -->
		<div class="content clearfix">

			<!-- Main Content -->
			<div class="main-content">
				<h1 class="recent-post-title">Recent Posts</h1>

				<div class="post">
					<img src="images/image_3.jpeg" alt="" class="post-image">
					<div class="post-preview">
						<h2><a href="single.html">The strongest and sweetest songs yet remain to be sung</a></h1>
						<i class="far fa-user"> Mir Sadia Afrin</i>
						&nbsp;
						<i class="far fa-calendar"> November 16, 2020</i>
						<p class="preview-text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
						<a href="single.html" class="btn read-more">Read more</a>
					</div>
				</div>

				<div class="post">
					<img src="images/poetry.jpg" alt="" class="post-image">
					<div class="post-preview">
						<h2><a href="single.html">After the Sea-Ship</a></h1>
						<i class="far fa-user"> Walt Whitman</i>
						&nbsp;
						<i class="far fa-calendar"> November 16, 2020</i>
						<p class="preview-text">
							After the Sea-Ship-after the whistling winds;
							<br>
							<br>
                            After the white-gray sails, taut to their spars and ropes,
                            <br>
                            <br>
                            Below, a myriad, myriad waves, hastening, lifting up their necks,
                            <br>
                            <br>
                            Tending in ceaseless flow toward the track of the ship:
						</p>
						<a href="single.html" class="btn read-more">Read more</a>
					</div>
				</div>

				<div class="post">
					<img src="images/T.png" alt="" class="post-image">
					<div class="post-preview">
						<h2><a href="single.html">Time series: Autoregressive Model</a></h1>
						<i class="far fa-user"> Nazia Tabassum</i>
						&nbsp;
						<i class="far fa-calendar"> November 16, 2020</i>
						<p class="preview-text">
							Time series analysis is something like the dark horse in field of data science.Basically, it is a process of analyzing time series data, which is based on observations on data points, measured typically over successive times. These data can be collected at a regular time interval such as daily,weekly,monthly or annually.It is performed to extract meaningful data statistics and characteristics.
						</p>
						<a href="single.html" class="btn read-more">Read more</a>
					</div>
				</div>

				<div class="post">
					<img src="images/Lorem_Ipsum.png" alt="" class="post-image">
					<div class="post-preview">
						<h2><a href="single.html">What is Lorem Ipsum?</a></h1>
						<i class="far fa-user"> Lorem Ipsum</i>
						&nbsp;
						<i class="far fa-calendar"> November 16, 2020</i>
						<p class="preview-text">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in
						</p>
						<a href="single.html" class="btn read-more">Read more</a>
					</div>
				</div>
																
			</div>

			<div class="sidebar">
				
				<div class="section search">
					<h4 class="section-title">Search</h4>
					<form action="index.html" method="post">
						<input type="text" name="search-term" class="text-input" placeholder="Search...">
					</form>
				</div>

				<div class="section topics">
					<h3 class="section-title">Discover</h3>
					<ul>
						<li><a href="#">Poem</a></li>
						<li><a href="#">Story</a></li>
						<li><a href="#">Fiction</a></li>
						<li><a href="#">Science</a></li>
						<li><a href="#">Philosophy</a></li>
						<li><a href="#">Self</a></li>
						<li><a href="#">Time</a></li>
					</ul>
				</div>

			</div>

		</div>
		<!-- Content -->

	</div>
	<!-- // Page Wrapper -->

	<!-- Footer -->
<footer>
	<div class="footer">

		<div class="quick-links">


		<ul>
	
			<li class="quick-items"><a href="#">Help</a></li>
			<li class="quick-items"><a href="#">About</a></li>
			<li class="quick-items"><a href="#">Privacy&Terms</a></li>
			<li class="quick-items"><a href="#">Contact</a></li>

		</ul>

		</div>

		<div class="footer-bottom">
			&copy; project | CSE482 Lab Project
		</div>

	</div>
</footer>

    <!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="js/script.js"></script>
</body>
</html>