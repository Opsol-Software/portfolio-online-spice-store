<!DOCTYPE html>
<html>
    <head>
        <title>Contact us</title>
        <link rel="stylesheet" href="CSS/contactus.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </head>
    <body>
        <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'header.php';
?>

    <div class="section">
        
        

        <div class="text-left">
            <h2>Contact Us</h2>
            <p><span>Phone:</span> 011 1234 567</p>
            <p><span>Address:</span> 123 Main Street, Cityville, Colombo 10</p>
            <p><span>Email:</span> littlehearts@company.com</p>
            <div class="social-media">
                <a href="https://facebook.com" class="social-btn facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" class="social-btn twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com" class="social-btn instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="img-right">
            <img src="images/spices.jpg" alt="Contact Us Image" class="section-image">
        </div>

        

    </div>


    <div class="map-container">
            <h3>We are at:</h3>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d183698.74825094533!2d75.69903291317726!3d22.724204999776163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2z4LaJ4Lax4LeK4Lav4Led4La74LeKLCDgtrjgtrDgt4rigI3gtrog4La04LeK4oCN4La74Lav4Lea4LeB4LeKLCDgtongtrHgt4rgtq_gt5Lgtrrgt4_gt4A!5e1!3m2!1ssi!2slk!4v1732115962361!5m2!1ssi!2slk"
                width="1000" 
                height="500" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="map-frame">
            </iframe>
        </div>

    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'footer.php';
?>
    
    
    </body>


</html>