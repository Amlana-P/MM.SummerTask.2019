<!DOCTYPE html>
<html>

<body>

	
	<div id="overlay" onclick="off()">
		<div id="text"><p>Here the thought of the day will appear!</p></div>
	</div>
	

	<div class="header">
		<div class="progress-container">
			<div class="progress-bar" id="myBar"></div>
		</div>  
	</div>
	<div style="background-color: #0165D9;font-family: verdana;">
		<p style="padding-top: 5px;font-size: 60px; color: white;"><b>MONDAY MORNING</b></p>
		<p style="padding-bottom: 15px;color: white;">The Official Student Media Body of NIT Rourkela</p> 
	</div>
	<div>
		<nav class="navbar navbar-default sticky-top ">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand active" href="#HOME"><span class="glyphicon glyphicon-home">
					</a>
				</div>
				<ul class="nav navbar-nav">
					<li><div id="mySidebar" class="sidebar">
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
						<a href="<?php echo base_url(); ?>/articles">National</a>
						<a href="<?php echo base_url(); ?>/articles">International</a>
						<a href="<?php echo base_url(); ?>/articles">Sports</a>
						<a href="<?php echo base_url(); ?>/articles">Others</a>
					</div>

					<div id="main">
						<button class="openbtn" onclick="openNav()">☰ Categories</button>
					</div>  </li>
					<li><a href="<?php echo base_url(); ?>Signup_Login">Sign up/Log in</a></li>
					<li><button class="btn thought" onclick="on()">Thought of the day</button></li>
					<?php if(!$this->session->userdata('logged_in')): ?>
						<li><a href="<?php echo base_url(); ?>users/login">Log in</a></li>
						<li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
					<?php endif; ?> 
					<?php if($this->session->userdata('logged_in')): ?>
						<li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
						<li><a href="<?php echo base_url(); ?>articles/create">Create Articles</a></li>
						<li><a href="<?php echo base_url(); ?>categories/create">Create Categories</a></li>
					<?php endif; ?>
				</ul>
				<form class="form-inline" style="text-align: right;padding-top: 8px">
					
				</form>
			</div>
		</nav>

	</div>
	<div style="color:white;">
		<h2 style="background-color: #0086FF;text-align:center;"><b>EXCLUSIVE</b>
			<h4 id="shinning">All the important news appear here!</h4>
		</h2>

	</div>
	<div class="row">
		<div class="col-md-3" style="color: black;">
			<div id="carousel-pager" class="carousel slide " data-ride="carousel" data-interval="1750">
				<div class="carousel-inner vertical">
					<div class="active item">
						<h3><br><br>NEWS AND LINKS AND IMAGES<br></h3>
					</div>
					<div class="item">
						<h3><br>NEWS AND LINKS AND IMAGES<br></h3>
					</div>
					<div class="item">
						<h3><br>NEWS AND LINKS AND IMAGES<br></h3>
					</div>
					<div class="item">
						<h3><br>NEWS AND LINKS AND IMAGES<br></h3>
					</div>
					<div class="item">
						<h3><br>NEWS AND LINKS AND IMAGES<br></h3>
					</div>
					<div class="item">
						<h3><br>NEWS AND LINKS AND IMAGES<br></h3>
					</div>
					<div class="item">
						<h3><br>NEWS AND LINKS AND IMAGES<br></h3>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-pager" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-pager" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-md-6">
			<div id="carousel-main" class="carousel slide " data-ride="carousel" data-interval="2400">
				<div class="carousel-inner">
					<div class="active item">
						<img src="http://placehold.it/900/f44336/000000&amp;text=First+Slide" class="img-responsive">
					</div>
					<div class="item">
						<img src="http://placehold.it/900/e91e63/000000&amp;text=Second+Slide" class="img-responsive">
					</div>
					<div class="item">
						<img src="http://placehold.it/900/9c27b0/000000&amp;text=Third+Slide" class="img-responsive">
					</div>
				</div>
				<a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href=".carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-md-3">

			<a href="<?php echo base_url(); ?>live_poll">Live Poll</a><br>
			<a href="<?php echo base_url(); ?>askaquestion">Ask a Question</a>
			
		</div>
	</div>
	<div style="color: black;">
		<hr><h3><b>FEATURED STORY</b></h3><hr><br><br>
		<div class="container" >
			<div class="col-sm-4">
				<img src="https://placehold.it/60x60">
				<span>Popular post 1</span><br><br>
				<img src="https://placehold.it/60x60">
				<span>Popular post 2</span>
			</div>
			<div class="col-sm-4">
				<img src="https://placehold.it/60x60">
				<span>Popular post 3</span><br><br>
				<img src="https://placehold.it/60x60">
				<span>Popular post 4</span>
			</div>
			<div class="col-sm-4">
				<img src="https://placehold.it/60x60">
				<span>Popular post 5</span><br><br>
				<img src="https://placehold.it/60x60">
				<span>Popular post 6</span>
			</div>
		</div>
		<br><br><hr>
		<div style="color: black;">
			<div class="container-fluid row">
				<div id="videosList" class="col-sm-6">           

					<div class="video">
						<video class="thevideo" loop preload="none">
							<source src="https://giant.gfycat.com/VerifiableTerrificHind.mp4" type="video/mp4">
								<source src="https://giant.gfycat.com/VerifiableTerrificHind.webm" type="video/webm">
									Your browser does not support the video tag.
								</video>
							</div>
						</div>
						<h3 style="text-align: center; margin-top: 150px;">This section is for the news corresponding to the video.
						</h3>
					</div>
					<div class="container-fluid row">
						<div id="videosList" class="col-sm-6">           

							<div class="video">
								<video class="thevideo" loop preload="none">
									<source src="https://giant.gfycat.com/VerifiableTerrificHind.mp4" type="video/mp4">
										<source src="https://giant.gfycat.com/VerifiableTerrificHind.webm" type="video/webm">
											Your browser does not support the video tag.
										</video>
									</div>
								</div>
								<h3 style="text-align: center; margin-top: 150px;">This section is for the news corresponding to the video.
								</h3>
							</div>
							<div class="container-fluid row">
								<div id="videosList" class="col-sm-6">           

									<div class="video">
										<video class="thevideo" loop preload="none">
											<source src="https://giant.gfycat.com/VerifiableTerrificHind.mp4" type="video/mp4">
												<source src="https://giant.gfycat.com/VerifiableTerrificHind.webm" type="video/webm">
													Your browser does not support the video tag.
												</video>
											</div>
										</div>
										<h3 style="text-align: center; margin-top: 150px;">This section is for the news corresponding to the video.
										</h3>
									</div>
								</div>
								<hr>
								<h3>YOU MAY HAVE MISSED</h3>
								<hr>
								<div class="flip-box col-sm-3">
									<div class="flip-box-inner">
										<div class="flip-box-front">
											<h2>Front Side</h2>
										</div>
										<div class="flip-box-back">
											<h2>Back Side</h2>
										</div>
									</div>
								</div>
								<div class="flip-box1 col-sm-3">
									<div class="flip-box-inner">
										<div class="flip-box-front">
											<h2>Front Side</h2>
										</div>
										<div class="flip-box-back">
											<h2>Back Side</h2>
										</div>
									</div>
								</div>
								<div class="flip-box col-sm-3">
									<div class="flip-box-inner">
										<div class="flip-box-front">
											<h2>Front Side</h2>
										</div>
										<div class="flip-box-back">
											<h2>Back Side</h2>
										</div>
									</div>
								</div>
								<div class="flip-box1 col-sm-3">
									<div class="flip-box-inner">
										<div class="flip-box-front">
											<h2>Front Side</h2>
										</div>
										<div class="flip-box-back">
											<h2>Back Side</h2>
										</div>
									</div>
								</div>
								<div>
									<h3 style="margin-top: 300px;"><hr>CONNECT WITH US</h3>
									<ul class="redesSociais">
										<li class="pinterest"><a href="https://www.pinterest.com/" target="_blank"><img src="http://i904.photobucket.com/albums/ac243/guilhermehebert/pinterest.png" alt=""/></a></li>
										<li class="facebook"><a href="https://www.facebook.com/" target="_blank"><img src="http://i904.photobucket.com/albums/ac243/guilhermehebert/fb.png" alt="" /></a></li>
										<li class="twitter"><a href="https://www.twitter.com/" target="_blank"><img src="http://i904.photobucket.com/albums/ac243/guilhermehebert/twitter.png" alt="" /></a></li>
										<li class="googleplus"><a href="https://www.plus.google.com/" target="_blank"><img src="http://i904.photobucket.com/albums/ac243/guilhermehebert/google.png" alt="" /></a></li>
										<li class="skype"><a href="https://www.skype.com/" target="_blank"><img src="http://i904.photobucket.com/albums/ac243/guilhermehebert/skype.png" alt="" /></a></li>
									</ul>
								</div>
							</div>	
						</div>
					</div>
					
					
				</body>
				</html>
