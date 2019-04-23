<!DOCTYPE html>
<html lang = "en">

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset = "UTF-8">
	<style>
		#wumbo {
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
		.page-footer {
			position: absolute;
			background-color: white;
			width: 100%;
			color: black;
			text-shadow: none;
			box-shadow:none;
		}

		.page-footer a {
			color: #2087d7;
			padding-bottom: 2px;
		}
		.page-footer a:hover {
			border-bottom: 2px solid white;
			text-decoration: none;
			color: white;
		}

	</style>
	<title>Bark n Bite - Lunch Menu</title>
</head>
<?php include 'nav.php';?>

<body>


	<div class = "container-fluid">

		<div class = "jumbotron" id="wumbo">

				<h1>MENU</h1>
		</div>

		<div class = "row">
			<div class = "col">
				<a href="lunch.php" class="bmenu">LUNCH</a>
			</div>

			<div class = "col">
				<a href="dinner.php" class="bmenu">DINNER</a>
			</div>

			<div class = "col">
				<a href="drinks.php" class="bmenu">DRINKS</a>
			</div>
		</div>

		<h2>LUNCH</h2>

<br>
		<div class="row">
		  <div class="col">
		    <h3>Sandwiches</h3>
				<div class="border">
					<div class="row">
			      <div class="col">
			        BBQ Pork
			      </div>
			      <div class="col">
			        $9.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Grilled Cheese
			      </div>
			      <div class="col">
			        $6.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        BLT
			      </div>
			      <div class="col">
			        $7.99
			      </div>
			    </div>
					<div class="row">
						<div class="col">
							Corn Beef
						</div>
						<div class="col">
							$7.99
						</div>
					</div>
				</div>
		  </div>
			<div class="col">
		    <h3>Sides</h3>
				<div class="border">
					<div class="row">
			      <div class="col">
			        Fries
			      </div>
			      <div class="col">
			        $3.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Fried Okra
			      </div>
			      <div class="col">
			        $4.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Steamed Veggies
			      </div>
			      <div class="col">
			        $2.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Cole Slaw
			      </div>
			      <div class="col">
			        $2.99
			      </div>
			    </div>
				</div>
		  </div>
			<div class="col">
		    <h3>Plates</h3>
				<div class="border">
					<div class="row">
			      <div class="col">
			        Spaghetti
			      </div>
			      <div class="col">
			        $9.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Chicken Wings
			      </div>
			      <div class="col">
			        $8.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Tacos
			      </div>
			      <div class="col">
			        $9.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Nachos
			      </div>
			      <div class="col">
			        $8.99
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
		    <h3>Pet Bites</h3>
				<div class="border">
 				 <div class="row">
 					 <div class="col">
 						 Barkbecue
 					 </div>
 					 <div class="col">
 						 $5.99
 					 </div>
 				 </div>
 				 <div class="row">
 					 <div class="col">
 						 Growled Cheese
 					 </div>
 					 <div class="col">
 						 $5.99
 					 </div>
 				 </div>
 				 <div class="row">
 					 <div class="col">
 						 Bone Fries
 					 </div>
 					 <div class="col">
 						 $5.99
 					 </div>
 				 </div>
				 <div class="row">
					 <div class="col">
						 Pita Bull
					 </div>
					 <div class="col">
						 $5.99
					 </div>
				 </div>
 			 </div>
		  </div>
		</div>

	</div>

	<?php include "index.php"?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
