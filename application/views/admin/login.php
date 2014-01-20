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

<body>
    
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="login-box">
					
					<h2>Login</h2>
					<?php if($error==1){ ?>
					<p style="color: red;">Your username / password did not match</p>
					<?php } ?>

					<form action="<?=base_url()?>admin/users/login" method="post">
						<p>Username: <input type="text" name="username" /></p>
						<p>Password: <input type="password" name="password" /></p>
						<p><input type="submit" value="login" /></p>
					</form>
					
				</div>

			</div>
		</div>
	</div><!-- /.container -->


    <!-- JavaScript
    ================================================== -->
    <script src="<?= base_url();?>assets/js/jquery.js"></script>
    <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
   
</body>
</html>