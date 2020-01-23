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
    <div class="w3-top">
        <div class="w3-bar">
            <a href="index.php" class="w3-bar-item w3-button w3-mobile w3-right">Home</a>
            <a href="about.html" class="w3-bar-item w3-button w3-mobile w3-right">About</a>
            <a href="contact.html" class="w3-bar-item w3-button w3-mobile w3-right">Contact</a>
        </div>
    </div>
    <!--    Flight Search Container -->
    <div class="w3-display-container" style="height:300px;">
        <div class="w3-display-topmiddle">
            <div class="w3-container">
                <div class="w3-panel w3-green">
                    <h1>Choose Your Next Itinerary</h1>
                </div>
            </div>
        </div>
        <form action="/index.php">
        <div class="w3-display-left">
                <select name="Fare Type">
                    <option value="roundtrip">Round Trip</option>
                    <option value="oneway">One Way</option>
                    <option value="multicity">Multi-City</option>
                </select>
        </div>
        <div class="w3-display-right">
            <select name="Passengers">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
        </div>
        <div class="w3-display-middle">
            <select name="Fare Class">
                <option value="firstClass">First Class</option>
                <option value="businessClass">Business Class</option>
                <option value="premiumEcon">Premium Economy</option>
            </select>
        </div>
        <div class="w3-display-bottomleft">
            <label>Origin</label>
            <input class="w3-input" type="text" placeholder="Enter origin city or airport code">
        </div>
        <div class="w3-display-bottommiddle">
            <label>Destination</label>
            <input class="w3-input" type="text" placeholder="Enter destination city or aiport code">
        </div>
        <div class="w3-display-bottomright">
            <label>Departure Date</label>
            <input class="w3-input" type="date">

            <label>Return Date</label>
            <input class="w3-input" type="date">
        </div>

    </div>

    <div class="w3-container w3-center w3-margin">
        <input class="w3-button w3-green w3-round-xxlarge" type="button" value="Search Now">
    </div>
</form>


    <script>
        function myFunction() {
            var x = document.getElementById("fareType");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        function myFunction2() {
            var x = document.getElementById("fareClass");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        function myFunction3() {
            var x = document.getElementById("travelers");
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
