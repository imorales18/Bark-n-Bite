<!DOCTYPE html>
<html lang = "en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset = "UTF-8">
	<title>Bark n&post; Bite</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<?php include("nav.php")?>
<body>

	<div class = "container-fluid">
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="nav justify-content-end">
					  <li class="nav-item">
					    <a class="nav-link active" href="#">Active</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Link</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Link</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					  </li>
				</ul>
		  </div>
		</nav>

		<div class = "jumbotron">
			<header class="browser-default">
        <div class="slide">
            <div class="slider"></div>
            <div class="slider"></div>
            <div class="slider"></div>
            <div class="slider"></div>
        </div>    
    </header>
		</div>
		<div class="parallax-image">
			<div class="row h-100">
				<div class="col-md-12 align-self-center">
					<h1 class="text-center">WOAH DUDE</h1>
				</div>
			</div>
		</div>
		<!--YOUTUBE API-->
		<section>
		<div class="container">
			<div class=""><!--search row-->
				<form class="center" id="channel-form">
					<div class="input-field form-group">
						<div class="col-auto">
							<input class="form-control" type="text" placeholder="Search Video" id="search-input" required>
							</div>
							<div class="col-auto">
								<br>
							<button type="submit" value="search" class="btn btn-primary">Search</button>
							</div>
					</div>
				</form>
			</div>
			<div class="row" id="result"><!--display row-->
		</div>
		</div>
		</section>
	</div>
	<?php include("index.php")?>
	<!--scripts-->
	<!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
	<script src="js/jQuery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/jaralax.js"></script>
	<script src="js/api.js"></script>
</body>
</html>
