<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/aboutus.css">
</head>
<body>
    <header>
    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'header.php';
?>
        <img class="header-img" src="https://www.simplyorganic.com/media/wysiwyg/simply-organic-about-us-header_3.jpg" alt="Header Image">
    </header>
    <main>
        <div class="logo-container">
            <img class="logo" src="images/logo.webp" alt="Logo Image">
        </div>
        <section class="about-section">
            <h1>We are Local Spices</h1>
            <p>Your premier destination for authentic, high-quality spices sourced directly from the heart of Sri Lanka. At Local Spices, we are passionate about bringing the rich, aromatic flavors of our island to your kitchen. Our commitment to quality and sustainability ensures that every spice you purchase is a step towards supporting local farmers and preserving traditional farming methods.</p>
        </section>
    </main>

 
        <div class="section">
            <div class="text-left">
                <h2>Our Mission</h2>
                <p>Our mission is to elevate culinary experiences by providing high-quality, ethically sourced spices that add flavor, aroma, and a touch of love to every dish. We are dedicated to supporting sustainable farming practices and ensuring that every kitchen has access to the rich heritage of global spices.</p>
            </div>
            <div class="img-right">
                <img src="images/spices1.png" alt="Spices Mission" class="section-image">
            </div>
        </div>
    
        <!-- Goals Section -->
        <div class="section">
            <div class="img-left">
                <img src="images/spices2.webp" alt="Spices Goals" class="section-image">
            </div>
            <div class="text-right">
                <h2>Our Goals</h2>
                <p>Our goal is to be the go-to brand for spice enthusiasts and home cooks alike. We strive to bring the world’s best spices to your doorstep and to educate our customers on the art of seasoning.</p>
                <ul>
                    <li> Curate a diverse range of premium spices.</li>
                    <li> Build a community of culinary explorers.</li>
                    <li> Expand our reach to kitchens around the globe.</li>
                </ul>
            </div>
        </div>
   
        <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'footer.php';
?>

</body>
</html>
