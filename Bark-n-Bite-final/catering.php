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

    <div class = "jumbotronc">
      <img src="img/catering.jpg" class="img-fluid" alt="Responsive image">
        <div class="centered"><h1>Catering</h1></div>
    </div>


    <div class="row" id="cateringone">

      <div class="col-sm-3 draggable">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/catnipwine.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">$ 10.00</p>
            <a href="#" id="cateringbtn" class="btn">add to cart</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3 draggable">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/catwine1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">$ 10.00</p>
            <a href="#" id="cateringbtn" class="btn">add to cart</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3 draggable">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/petwine.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">$ 10.00</p>
            <a href="#" id="cateringbtn" class="btn">add to cart</a>
          </div>
        </div>
      </div>   
        <div class="col-sm-3 cart">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Shopping Cart</h5>
              <p id="shoppingcart" class="card-text">Drag and drop items to your shopping cart.</p>
            </div>
          </div>
        </div>
    </div>

    <div class = "row">
       <div id = "droppable">
      </div>
    </div>

    <div class="row" id="cateringtwo">

      <div class="col-sm-3 draggable">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/catnipwine.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">$ 10.00</p>
            <a href="#" id="cateringbtn" class="btn">add to cart</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3 draggable">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/cardognay.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">$ 10.00</p>
            <a href="#" id="cateringbtn" class="btn">add to cart</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3 draggable">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/muttbeer.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">$ 10.00</p>
            <a href="#" id="cateringbtn" class="btn">add to cart</a>
          </div>
        </div>
      </div>
    </div>
</div>
<?php include("footer.php")?>
<!-- ABOUT US PAGE ENDS -->


  <script src="js/jQuery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src = "js/draggable.js"></script>
</body>
</html>
