<!DOCTYPE html>
<html>
	<head>
		<title>template</title>

		<!-- mobile first -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!--font awesome for icons and stuff-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

			<!-- google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre|Old+Standard+TT|Source+Serif+Pro" rel="stylesheet">

		<!-- custom CSS -->
		<link rel="stylesheet" href="./css/style.css" type="text/css">

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>

		<!-- My JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>
	<body>
		<header>
			<!--Logo goes here -->

			<!--Nav par or nav pills go here -->
			<div class="navbar navbar-default navbar-static-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<!-- for mobile view navbar icon-->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- navbar -->
						<a class="navbar-brand" href="homestatic.php">Tramway Venture Partners</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="homestatic.php">Home</a></li>
							<li><a href="aboutstatic.php">About</a></li>
							<li><a href="teamstatic.php">Team</a></li>
							<li><a href="portfoliostatic.php">Portfolio</a></li>
							<li><a href="newsstatic.php">News</a></li>
							<li class="active"><a href="contactstatic.php">Contact</a></li>
						</ul>
					</div> <!-- navbar collapse -->
				</div> <!-- container -->
			</div>
		</header>
		<main>
			<h1>Contact Us</h1>

			<!-- contact me section-->
			<div class="panel panel default" id="contact">
				<div class="panel-body">
					<div class="container contact">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8 center-block">
								<!--Begin Contact Form-->
								<form id="contact-form" method="POST" action="php/mailer.php">
									<div class="form-group">
										<label for="name">Name <span class="text-danger">*</span></label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-user" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="name" name="name" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="email">Email <span class="text-danger">*</span></label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
											<input type="email" class="form-control" id="email" name="email" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="subject">Subject</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-pencil" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
										</div>
									</div>
									<div class="form-group">
										<label for="message">Message <span class="text-danger">*</span></label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-comment" aria-hidden="true"></i>
											</div>
											<textarea class="form-control" rows="5" id="message" name="message"
														 placeholder="Message (2000 characters max)"></textarea>
										</div>
									</div>

									<!--Google reCAPTCHA helps prevent spam and robots -->
									<div class="g-recaptcha" data-sitekey="6LcR1CMUAAAAAIdpnBD_kqkRmGmjjRSLxo7GdfCE"></div>

									<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
									<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
								</form>
								<!-- end contact form -->

								<!--empty area for form error/success output-->
								<div class="row">
									<div class="col-xs-12">
										<div id="output-area"></div>
									</div>
								</div>
							</div> <!-- column-->
						</div> <!-- row -->
					</div> <!-- container -->

			</div> <!-- panel -->
			</div>



		</main>
	</body>

	<footer>
		<br>
		<p> &copy; 2017 All rights belong to Tramway Venture Partners 	</p>
		<br>
	</footer>

</html>