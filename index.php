<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Swift Homepage</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--    Navigation -->
    <div class="w3-bar">
        <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
        <a href="about.html" class="w3-bar-item w3-button w3-mobile">About</a>
        <a href="contact.html" class="w3-bar-item w3-button w3-mobile">Contact</a>
    </div>
    <!--    Flight Search Container -->
    <div class="w3-container">
        <div class="w3-panel w3-green">
            <h1>Choose Your Next Itinerary</h1>
        </div>
        <div class="w3-dropdown-click">
            <button onclick="myFunction()" class="w3-button">Fare Type</button>
            <div id="fareType" class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom">
                <a href="#" class="w3-bar-item w3-button">Round Trip</a>
                <a href="#" class="w3-bar-item w3-button">One Way</a>
                <a href="#" class="w3-bar-item w3-button">Multi-City</a> 
            </div>
        </div>
        <div class="w3-dropdown-click">
            <button onclick="myFunction()" class="w3-button">Fare Class</button>
            <div id="fareClass" class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom">
                <a href="#" class="w3-bar-item w3-button">First Class</a>
                <a href="#" class="w3-bar-item w3-button">Business Class</a>
                <a href="#" class="w3-bar-item w3-button">Premium Economy</a> 
            </div>
        </div>
        <div class="w3-dropdown-click">
            <button onclick="myFunction()" class="w3-button">Passengers</button>
            <div id="travelers" class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom">
                <a href="#" class="w3-bar-item w3-button">1</a>
                <a href="#" class="w3-bar-item w3-button">2</a>
                <a href="#" class="w3-bar-item w3-button">3</a> 
                <a href="#" class="w3-bar-item w3-button">4</a> 
                <a href="#" class="w3-bar-item w3-button">5</a> 
                <a href="#" class="w3-bar-item w3-button">6</a> 
                <a href="#" class="w3-bar-item w3-button">7</a> 
                <a href="#" class="w3-bar-item w3-button">8</a> 
                <a href="#" class="w3-bar-item w3-button">9</a> 
            </div>
        </div>


    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("fareClass");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
