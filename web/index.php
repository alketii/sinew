<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Sinew</h1>
				</div>
			</div>
			<div class="row">
				<?php
				for($i=0;$i < 40;$i++){
					?>
					<div class="col-lg-2 col-md-3 col-sm-4">
						<h3>MegaGlest</h3>
						<img class="img-responsive" src="https://megaglest.org/uploads/images/Gallery/Screenshots/more_screens11.jpg"/>
						<p>
							MegaGlest is an entertaining free (freeware and free software) and open source cross-platform 3D real-time strategy (RTS) game, where you control the armies of one of seven different factions: Tech, Magic, Egypt, Indians, Norsemen, Persian or Romans. The game is setup in one of 17 naturally looking settings, which -like the unit models- are crafted with great appreciation for detail. A lot of additional game data can be downloaded from within the game at no cost.
						</p>
						<p>
						<button onclick="pyObj.installGame('openclonk')" class="btn btn-primary">Install</button>
						<button onclick="pyObj.launchGame('openclonk')" class="btn btn-primary">Play</button>
						</p>
					</div>
					<?php
				}
				?>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>
	</html>