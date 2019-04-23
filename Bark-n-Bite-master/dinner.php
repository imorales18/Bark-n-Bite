<!DOCTYPE html>
<html lang = "en">

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset = "UTF-8">
	<style>
	.jumbotron {
		background-image: url("img/bone2.jpg");
		background-position: center;
		background-repeat: repeat-x;
		background-size: contain;
		height: 200px;
		color: white;
		text-shadow: 3px 3px 7px black;
	}
	h1 {
		text-align: center;
	}
	h2 {
		text-align: center;
		border-top: 2px solid black;
		border-bottom: 2px solid black;
		margin: 20px 25px;
	}
	h3 {
		color: black;
		text-shadow: none;
	}
	a {
		color: black;
	}
	.col {
		text-align: center;
	}
	.bmenu {
		color: black;
		padding: 10px;
		border-radius: 4px;
		text-shadow: none;
	}
	.bmenu:hover {
		text-decoration: none;
		color:white;
		background-color: #2087D7;
		box-shadow: 3px 3px 6px grey;
	}
	.row {
		margin: 15px 0px;
		color: white;
		text-shadow: 2px 2px 5px black;
	}
	.border {
		border-radius: 4px;
		background-color: #cc5500;
	}
	.bgimg {
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		width: 100%;
		margin-right: 0;
		margin-left: 0;
	}
	#help {
		padding: 0 15px 0 15px;
	}
	</style>
	<title>Bark n Bite - Dinner Menu</title>
</head>

<?php include("nav.php")?>
<body>

	<div class = "container-fluid">



		<div class = "jumbotron">
			<h1>MENU</h1>
		</div>

		<div class = "row">
			<div class = "col">
				<a href="lunch.html" class="bmenu">LUNCH</a>
			</div>

			<div class = "col">
				<a href="dinner.html" class="bmenu">DINNER</a>
			</div>

			<div class = "col">
				<a href="drinks.html" class="bmenu">DRINKS</a>
			</div>
		</div>

		<h2>DINNER</h2>

<br>

		<div class="row">
		  <div class="col">
		    <h3>Entrees</h3>
				<div class="border">
					<div class="row">
			      <div class="col">
			        Barkbecue
			      </div>
			      <div class="col">
			        $0.00
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Growled Cheese
			      </div>
			      <div class="col">
			        $0.00
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Something
			      </div>
			      <div class="col">
			        $0.00
			      </div>
			    </div>
				</div>
		  </div>
			<div class="col">
		    <h3>Appetizers</h3>
				<div class="border">
					<div class="row">
			      <div class="col">
			        Barkbecue
			      </div>
			      <div class="col">
			        $0.00
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Growled Cheese
			      </div>
			      <div class="col">
			        $0.00
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Something
			      </div>
			      <div class="col">
			        $0.00
			      </div>
			    </div>
				</div>
		  </div>
			<div class="col">
		    <h3>Salads</h3>
				<div class="border">
					<div class="row">
			      <div class="col">
			        Barkbecue
			      </div>
			      <div class="col">
			        $0.00
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Growled Cheese
			      </div>
			      <div class="col">
			        $0.00
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Something
			      </div>
			      <div class="col">
			        $0.00
			      </div>
			    </div>
				</div>
		    </div>
		  </div>
		</div>
		<br>
		<img src="img/dogs.jpg" class="bgimg" id="help">

		<div class="row">
			<div class="col">
		    <h3>Pet Meals</h3>
				<div class="border">
 				 <div class="row">
 					 <div class="col">
 						 Barkbecue
 					 </div>
 					 <div class="col">
 						 $0.00
 					 </div>
 				 </div>
 				 <div class="row">
 					 <div class="col">
 						 Growled Cheese
 					 </div>
 					 <div class="col">
 						 $0.00
 					 </div>
 				 </div>
 				 <div class="row">
 					 <div class="col">
 						 Something
 					 </div>
 					 <div class="col">
 						 $0.00
 					 </div>
 				 </div>
 			 </div>
		  </div>
		</div>

	</div>
	<?php include("index.php")?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
