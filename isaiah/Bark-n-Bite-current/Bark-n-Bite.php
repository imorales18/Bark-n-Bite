<!DOCTYPE html>
<html lang = "en">

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset = "UTF-8">
	<title>Bark n&post; Bite</title>
	<link rel="stylesheet" href="css/styles.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div class = "container-fluid">
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom fixed-top large" id="navigation">
		  <!--<img class="navbar-brand logo large" src="img/logo.svg" alt="logo">-->
		  <a class="navbar-brand" href="Bark-n-Bite.html">Bark-n-Bite</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="nav justify-content-end navContent">
					  <li class="nav-item">
					    <a class="nav-link" href="dinner.php">Menu</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="catering.php">Catering</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="aboutme.php">Our story</a>
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
			<div class="row"><!--search row-->
				<form class="center" id="channel-form">
					<div class="input-field">
							<input type="text" placeholder="Search Video" id="search-input" required>
							<input type="submit" value="search" class="btn-large">
					</div>
				</form>
			</div>
			<div class="row" id="result"><!--display row-->
		</div>
		</div>
		</section>
	</div>
	
<footer class="page-footer font-small blue pt-4">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
          <!-- Content -->
          <h5 class="text-uppercase">Hours</h5>
			<p> <b>Monday-Thursday:</b> 11:00am - 10:00pm<br>
		 		<b>Friday-Saturday:</b> 11:00am - 2:00am<br>
				<b>Sunday:</b> 11:00am - 8pm<br>
	    		<b>Happy Hour:</b> 4:00pm - 6:00pm
		    </p>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none pb-3">
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
            <!-- Links -->
            <h5 class="text-uppercase">Address &amp; Contact</h5>
       			<p>123 Bark Ave.<br>
			       Winter Park, FL 32789
			    </p>
			    <p><a href="mailto:contact@barknbite.com" class="email">contact@barknbite.com</a><br>
			        407-123-BARK</p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">
            <!-- Links -->
            <h5 class="text-uppercase">follow us</h5>
            <ul class="list-unstyled">
              <li>
                <a href="https://www.facebook.com/" class="fa fa-facebook-square" style="font-size:36px"></a>
				<a href="https://www.instagram.com/" class="fa fa-instagram" style="font-size:36px"></a>
				<a href="title_crawl.html" class="fa fa-rebel" style="font-size:36px"></a>
			</li>
            </ul>
          </div>
      </div>
    </div>
  </footer>

	<!--scripts-->
	<script src="js/jQuery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/jaralax.js"></script>
	<script src="js/api.js"></script>
	<script type="text/javascript">
		$(document).on("scroll",function(){
    		if($(document).scrollTop()>20){
				$("#navigation").removeClass("large").addClass("small");
    		} else{
      			$("#navigation").removeClass("small").addClass("large");
    		}
		});
</script>
</body>
</html>
