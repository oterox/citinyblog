<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?= base_url();?>assets/ico/favicon.png">

    <title>Codeigniter & Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url();?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url();?>assets/css/main.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar">3</span>
                <span class="icon-bar">3</span>
                <span class="icon-bar">3</span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                
                <?php if($this->session->userdata('userID')){ ?>
                <li><a href="#"><?php echo 'username: ' . $this->session->userdata('username'); ?></a></li>
                <li><a href="<?=base_url()?>admin/users/logout">Logout</a></li>
                <?php } else { ?>
                <li><a href="<?=base_url()?>admin/users/login">Login</a></li>
                <?php } ?>

              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
    
	<div class="container">

		<div class="row">

			<div class="col-md-12">
				<h1>BLOG</h1>
			</div>

		</div>

		<div class="row">

			<div class="col-md-9">