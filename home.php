<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/home.css">

    <style>
        
    </style>
    <script>
        window.addEventListener('scroll', function() {
            var h1 = document.querySelector('span');
            var ecoFriendly = document.querySelector('.eco-friendly');
            if (window.scrollY > 200) {
                h1.classList.add('highlight');
                ecoFriendly.classList.add('highlight');
            } else {
                h1.classList.remove('highlight');
                ecoFriendly.classList.remove('highlight');
            }
        });
    </script>


</head>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'header.php';
?>
        
  <img 
    src="images/headerpic1.png" 
    alt="Header Image" 
    style="width: 100%; height: auto; object-fit: cover; display: block;">
    
    

    <div class="section">
        
        

        <div class="text-left">
        <h1><center>
    Welcome to <span class="highlight">Local Spices</span></center>
</h1><br><br>

      <p>Your premier destination for authentic, high-quality spices sourced directly from local farms. We pride ourselves on offering the freshest and most flavorful spices that enhance every dish, from home-cooked meals to gourmet delights.</p>
      <p>Our commitment to <span class="eco-friendly">sustainability means we support local farmers and use eco-friendly</span> practices to bring you spices that are good for you and good for the planet.</p>
      <p>Explore our wide range of spices and discover the difference that fresh, quality ingredients can make. Whether you're looking for a staple spice or something exotic to experiment with, we've got you covered.</p>
            
        </div>
        <div class="img-right">
            <img src="images/logo.webp" alt="Contact Us Image" class="section-image">
        </div>

        

    </div>



    <div class="Cert">
    <div class="fan-container">
        <img src="https://www.ruhunufoods.com/wp-content/uploads/2023/01/Plate-1300x1300-v2.webp" alt="Logo" class="rotating-logo">
    </div>
    <div class="text-container">
        <h2>Our Guiding Values</h2>
        <p>Values that set us apart</p>
        <p>
            From our very inception over 45 years ago, Ruhunu Foods has been guided by a set of values that have ensured our growth has always been a sustainable and ethical one, benefitting not only our organisation.
        </p>
    </div>
</div>



    
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="max-width: 800px; margin: auto;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/spices1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/spices2.webp" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    
    <div style="margin: 100px; text-align: center;">
        <h2>We are working with</h2>
        <img src="images/brands.webp" class="img-fluid" alt="...">
    </div>



    <div id="cardSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" >
        <h4><center>Our products</center></h4><br><br>
    <div class="carousel-inner">
      <!-- Card 1 -->
      <div class="carousel-item active">
        <div class="card mx-auto" style="width: 18rem;">
          <img src="https://www.simplyorganic.com/media/catalog/product/0/8/089836185259-simply-organic-turmeric-MF04025C_1.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=520&width=520&canvas=520:520" class="card-img-top" alt="Card 1">
          <div class="card-body">
            <h5 class="card-title">Turmaric powder</h5>
            <p class="card-text">Description for card 1.</p>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="carousel-item">
        <div class="card mx-auto" style="width: 18rem;">
          <img src="https://www.simplyorganic.com/media/catalog/product/0/8/089836186089-simply-organic-onion-powder-MF04041E_1.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=520&width=520&canvas=520:520" class="card-img-top" alt="Card 2">
          <div class="card-body">
            <h5 class="card-title">Onion powder</h5>
            <p class="card-text">Description for card 2.</p>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="carousel-item">
        <div class="card mx-auto" style="width: 18rem;">
          <img src="https://www.simplyorganic.com/media/catalog/product/0/8/089836185143-simply-organic-cumin-MF04024E_1.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=520&width=520&canvas=520:520" class="card-img-top" alt="Card 3">
          <div class="card-body">
            <h5 class="card-title">Cumin</h5>
            <p class="card-text">Description for card 3.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#cardSlider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#cardSlider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'footer.php';
    ?>

</body>
</html>
