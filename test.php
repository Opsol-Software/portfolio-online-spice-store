<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotating Logo</title>
    <link rel="stylesheet" href="styles.css">

    <style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
}

.Cert {
    display: flex;
    align-items: center;
    justify-content: flex-start; /* Align items to the left */
    background-color: orange;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
    max-width: 1200px;
    border-radius: 10px;
    padding: 20px;
    overflow: visible; /* Allow content to overflow the box */
    position: relative;
}

.fan-container {
    width: 300px;
    height: 300px;
    position: relative; /* For positioning the logo */
    margin-right: 50px; /* Increase space between logo and text */
}

.rotating-logo {
    width: 200%; /* Make the logo larger than the container */
    height: 200%;
    position: absolute; /* Position relative to the container */
    top: -50%; /* Center vertically */
    left: -50%; /* Center horizontally */
    animation: spin 100s linear infinite;
}

.text-container {
    flex: 1; /* Allow the text container to fill the remaining space */
    font-size: 16px; /* Increase readability */
    color: #333;
    line-height: 1.5; /* Improve text spacing */
    text-align: left; /* Align text to the left */
    padding-left: 20px; /* Add additional padding to push the text further right */
}

.text-container h2 {
    margin: 0 0 10px; /* Add spacing below the heading */
}

.text-container p {
    margin: 0; /* Remove default paragraph margins */
}

@keyframes spin {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

    </style>

</head>
<body>

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

</body>
</html>
