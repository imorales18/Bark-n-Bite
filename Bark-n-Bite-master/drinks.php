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
		text-decoration: none;
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
	<title>Bark n Bite - Drinks Menu</title>
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

		<h2>DRINKS</h2>

<br>

		<div class="row">
		  <div class="col">
		    <h3>Alcoholic</h3>
				<div class="border">
					<div class="row">
			      <div class="col">
			        Martini
			      </div>
			      <div class="col">
			        $8.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Mojito
			      </div>
			      <div class="col">
			        $8.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Wine
			      </div>
			      <div class="col">
			        $8.99
			      </div>
			    </div>
					<div class="row">
						<div class="col">
							Beer
						</div>
						<div class="col">
							$7.99
						</div>
					</div>
				</div>
		  </div>
			<div class="col">
		    <h3>Non-Alcoholic</h3>
				<div class="border">
					<div class="row">
			      <div class="col">
			        Milk
			      </div>
			      <div class="col">
			        $2.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Water
			      </div>
			      <div class="col">
			        $0.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Juice
			      </div>
			      <div class="col">
			        $1.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Lemonade
			      </div>
			      <div class="col">
			        $1.99
			      </div>
			    </div>
				</div>
		  </div>
			<div class="col">
		    <h3>Dessert Drinks</h3>
				<div class="border">
					<div class="row">
			      <div class="col">
			        Milk Shake
			      </div>
			      <div class="col">
			        $5.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Smoothie
			      </div>
			      <div class="col">
			        $5.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Ice Cream Float
			      </div>
			      <div class="col">
			        $5.99
			      </div>
			    </div>
					<div class="row">
			      <div class="col">
			        Hot Chocolate
			      </div>
			      <div class="col">
			        $5.99
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
		    <h3>Pet Drinks</h3>
				<div class="border">
 				 <div class="row">
 					 <div class="col">
 						 Pinot Meow
 					 </div>
 					 <div class="col">
 						 $10.00
 					 </div>
 				 </div>
 				 <div class="row">
 					 <div class="col">
 						 Pawsecco
 					 </div>
 					 <div class="col">
 						 $10.00
 					 </div>
 				 </div>
 				 <div class="row">
 					 <div class="col">
 						 CharDogNay
 					 </div>
 					 <div class="col">
 						 $10.00
 					 </div>
 				 </div><div class="row">
 					 <div class="col">
 						 Mutt Lite
 					 </div>
 					 <div class="col">
 						 $10.00
 					 </div>
 				 </div>
 			 </div>
		  </div>
		</div>

	</div>


	<footer class="page-footer font-small blue pt-4">

	    <!-- Footer Links -->
	    <div class="container-fluid text-center text-md-left">

	      <!-- Grid row -->
	      <div class="row">

	        <!-- Grid column -->
	        <div class="col-md-6 mt-md-0 mt-3">

	          <!-- Content -->
	          <h5 class="text-uppercase">Footer Content</h5>
	          <p>Here you can use rows and columns here to organize your footer content.</p>

	        </div>
	        <!-- Grid column -->

	        <hr class="clearfix w-100 d-md-none pb-3">

	        <!-- Grid column -->
	        <div class="col-md-3 mb-md-0 mb-3">

	            <!-- Links -->
	            <h5 class="text-uppercase">navigation</h5>

	            <ul class="list-unstyled">
	              <li>
	                <a href="#!">menu</a>
	              </li>
	              <li>
	                <a href="#!">catering</a>
	              </li>
	              <li>
	                <a href="#!">our story</a>
	              </li>
	              <li>
	                <a href="#!">contact us</a>
	              </li>
	            </ul>

	          </div>
	          <!-- Grid column -->

	          <!-- Grid column -->
	          <div class="col-md-3 mb-md-0 mb-3">

	            <!-- Links -->
	            <h5 class="text-uppercase">follow us</h5>

	            <ul class="list-unstyled">
	              <li>
	                <a href="#!">Facebook</a>
	              </li>
	              <li>
	                <a href="#!">Instagram</a>
	              </li>
	            </ul>

	          </div>

	      </div>

	    </div>

	  </footer>


		<?php include "index.php"?>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
