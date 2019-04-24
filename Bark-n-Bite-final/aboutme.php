<?php include("db_connect.php")?>
<?php include("comments.php")?>

<!DOCTYPE html>
<html lang = "en">

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<meta charset = "UTF-8">
	<title>Bark n&post; Bite</title>
</head>
<?php include("nav.php")?>
<body>

<div class = "container-fluid">

<!-- ABOUT US PAGE -->
<div class="container">

  <div class="row" id="aboutus">
    <div class="col-sm-12">
	<h1>About Us</h1>
      <p>
	Established in 2002 Bark n’ Bite has always opened their doors to the public and their four-legged family members.
	We have places to sit inside and outside in our grass fenced in area so you and your furry friend can enjoy the
	beautiful outdoors with some of your favorite foods and enjoy you and your pet’s favorite drinks with our indoor and
	outdoor bar.
        <br><br>
	We wanted to create an environment where you can go out, be with your friends, while also having the opportunity
	to bring your pet. We include a range of food like sandwiches, burgers, and wings on our menu, we also including
	pet friendly snacks and pet safe alcohol for your furry friends.
        <br><br>
	Bark n’ Bites hopes to see you enjoying the fun experience we try to provide for everyone.
	<br>
	*We do not breed discriminate*
	</p>
    </div>
  </div>

<div class="row" id="quote">
			<blockquote class="blockquote text-right">
			  <p class="mb-0">“Accepting environment not only for pets, but for humans too.”</p>
			  <footer class="blockquote-footer">Owners of <cite title="Source Title">Bark n' Bite</cite></footer>
			</blockquote>
</div>


<div class = "row" id = "comments">
 	<?php 
    	echo "<form method = 'POST' action ='".setComments($connection)."'>
			<p> Character limit: 250 </p>
			<input type = 'hidden' name = 'uid' value = 'Anon'>
			<textarea name = 'message'></textarea><br>
			<button class = 'button' name = 'commentSubmit' type = 'submit'> Comment </button>
			</form>";
			getComments($connection);
	?>
</div>

</div>
</div>

<?php include("footer.php")?>
<!-- ABOUT US PAGE ENDS -->

<script src="js/jQuery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
