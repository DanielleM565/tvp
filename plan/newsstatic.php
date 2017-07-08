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
						<a class="navbar-brand" href="#">Tramway Venture Partners</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="homestatic.php">Home</a></li>
							<li><a href="aboutstatic.php">About</a></li>
							<li><a href="teamstatic.php">Team</a></li>
							<li><a href="portfoliostatic.php">Portfolio</a></li>
							<li class="active"><a href="newsstatic.php">News</a></li>
							<li><a href="contactstatic.php">Contact</a></li>
						</ul>
					</div> <!-- navbar collapse -->
				</div> <!-- container -->
			</div>
		</header>
		<main>
			<h1>News</h1>

			<!-- article from NMSU about state seed fund -->
<div class="container" id="news-1">
	<div class="panel panel default">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">
					<a href="http://krwg.org/post/40-million-investment-new-mexico-startups" target="_blank"><img class="img-responsive" src="stock_images/nmsu-krwg-logo2.jpg" alt="KRWG logo"></a>
				</div>
				<div class="col-md-9">
					<h2>$40 Million Investment in New Mexico Startups <small> May 2, 2017</small></h2>
					<p>Today, Governor Susana Martinez announced $40 million worth of investments in New Mexico startups. A $20 million Catalyst Fund is being launched that will raise a matching $20 million in private equity for investments in local startups. The Catalyst Fund is expected to support more than 50 companies in New Mexico and will focus on aiding technology startups. See full article <a href="http://krwg.org/post/40-million-investment-new-mexico-startups" target="_blank">here.</a></p>
				</div>
			</div>
		</div>
	</div>

</div>

			<!-- article from press-news-->
<div class="container" id="news-2">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">
					<a href="https://www.pressreader.com/usa/albuquerque-journal/20170503/281814283767105" target="_blank"><img class="img-responsive" src="stock_images/press-reader.png" alt="pressreader logo"></a>
				</div>
				<div class="col-md-9">
					<h3>$4.65M boost for cash-strapped local startups <small>May 3, 2017</small></h3>
					<p>Many cash-strapped New Mexico startups may soon get a critical boost from a statebacked investment program that's pumping an initial $4.65 million into three venture funds. Gov. Susana Martinez... Read Full article <a href="https://www.pressreader.com/usa/albuquerque-journal/20170503/281814283767105" target="_blank">here.</a></p>
				</div>
			</div>
		</div>
	</div>
</div>



		</main>
	</body>
</html>