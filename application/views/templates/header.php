<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monday Morning-The Official Student Media Body of NIT Rourkela</title>
	<link rel="icon" href="MMlogo2.png" type="image/gif" sizes="16x16">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="http://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<title>Monday Morning-The Official Student Media Body of NIT Rourkela</title>

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	
</head>
<body onload="myFunction()" style="margin:0;">
	<div class="container success-header animate one">
		<div id="loader" class="container"></div>
		<div style="display:none;" id="myDiv" class="animate-bottom">
			<?php if($this->session->flashdata('user_registered')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
			<?php endif; ?>
			<?php if($this->session->flashdata('post_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
			<?php endif; ?>
			<?php if($this->session->flashdata('post_updated')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
			<?php endif; ?>
			<?php if($this->session->flashdata('category_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
			<?php endif; ?>
			<?php if($this->session->flashdata('post_deleted')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
			<?php endif; ?>
			<?php if($this->session->flashdata('login_failed')): ?>
				<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
			<?php endif; ?>
			<?php if($this->session->flashdata('user_loggedin')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
			<?php endif; ?>
			<?php if($this->session->flashdata('user_loggedout')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
				<?php endif; ?>