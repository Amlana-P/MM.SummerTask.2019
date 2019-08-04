<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<body style="background-color:#17202A;">
	<div class="container success-header animate fadedown one">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="form-body">
					<ul class="nav nav-tabs final-login">
						<li class="active"><a data-toggle="tab" href="#sectionA">Sign In</a></li>
						<li><a data-toggle="tab" href="#sectionB">Join us!</a></li>
					</ul>
					<div class="tab-content">
						<div id="sectionA" class="tab-pane fade in active">
							<div class="innter-form">
								<form class="sa-innate-form" method="post">
									<label>Email Address</label>
									<input type="text" name="username">
									<label>Password</label>
									<input type="password" name="password">
									<button type="submit">Sign In</button><br>
									<a href="">Forgot Password?</a>
								</form>
							</div>
							<div class="social-login">
								<p>- - - - - - - - - - - - - Sign In With - - - - - - - - - - - - - </p>
								<ul>
									<li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
									<li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
									<li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
						<div id="sectionB" class="tab-pane fade">
							<div class="innter-form">
								<form class="sa-innate-form" method="post">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" name="name" placeholder="Name">
									</div>
									<div class="form-group">
										<label>Zipcode</label>
										<input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<label>Username</label>
										<input type="text" class="form-control" name="username" placeholder="Username">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" name="password" placeholder="Password">
									</div>
									<div class="form-group">
										<label>Confirm Password</label>
										<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
									</div>
									<button type="submit">Join now</button>
									<p>By clicking Join now, you agree to hifriends's User Agreement, Privacy Policy, and Cookie Policy.</p>
								</form>
							</div>
							<div class="social-login">
								<p>- - - - - - - - - - - - - Register With - - - - - - - - - - - - - </p>
								<ul>
									<li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
									<li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
									<li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php echo form_close(); ?>