<!DOCTYPE html>

<head>
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="CSS/product.css">
</head>

<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'header.php';
?>

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="images/spices.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cinnamon</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="images/spices.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Turmeric</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="images/spices.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cumin</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <img src="images/spices.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cumin</h5>
              </div>
            </div>
          </div>


          <div class="col">
            <div class="card h-100">
              <img src="images/spices.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cumin</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <img src="images/spices.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cardamom</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'footer.php';
?>

</body>


</html>