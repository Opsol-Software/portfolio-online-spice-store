<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

/* bootstrap */

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Get the current URL path
    const currentPath = window.location.pathname.split("/").pop();

    // Select all navbar links
    const navLinks = document.querySelectorAll("#navbar a");

    // Loop through links to add 'active' class to the matching link
    navLinks.forEach(link => {
      if (link.getAttribute("href") === currentPath) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.getElementById('navbar');
    const pageContent = document.getElementById('page-content');
    if (navbar && pageContent) {
      const navbarHeight = navbar.offsetHeight;
      pageContent.style.paddingTop = `${navbarHeight}px`;
    }
  });
</script>


<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 10px 10px;
  transition: 0.4s;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 99;
}

#navbar a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
  margin-right: 40px;
}

#navbar #logo {
  font-size: 20px;
  font-weight: bold;
  transition: 0.4s;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: orange;
  color: white;
}

#navbar-right {
  float: right;
}

#logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            font-size: 18px;
        }

        #logo img {
            width: 50px; /* Adjust size of the logo image */
            height: auto;
            margin-right: 10px; /* Space between logo and text */
        }

@media screen and (max-width: 580px) {
  #navbar {
    padding: 10px 10px !important;
  }
  #navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  #navbar-right {
    float: none;
  }
}

/* Add spacing to prevent navbar overlap */
#page-content {
  padding-top: 140px; /* Adjust based on your #navbar height */
}
</style>
</head>
<body>

<div id="navbar">
<a href="#default" id="logo">
            <img id="imagelogo" src="images/logo.webp" alt="Company Logo">
            <span>Local Spice</span>
        </a>
  <div id="navbar-right">
    <a class="active" href="home.php">Home</a>
    <a href="contactus.php">Contact</a>
    <a href="aboutus.php">About</a>
    <a href="product.php">Products</a>
  </div>
</div>

<div id="page-content">
<!-- Content goes here -->
</div>

<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "10px 5px";
    document.getElementById("logo").style.fontSize = "20px";
  } else {
    document.getElementById("navbar").style.padding = "20px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  }
}
</script>

</body>
</html>
