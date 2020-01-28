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
    <!--    Flight Search Banner Container -->
    <div class="w3-display-container" style="height:300px;">
        <div class="w3-display-middle">
            <div class="w3-container">
                <div class="w3-panel w3-green">
                    <h1>Choose Your Next Itinerary</h1>
                </div>
            </div>
        </div>
    </div>
    <!--    Flight Search Form Container -->
    <div class="w3-display-container" style="height:450px;">
        <form action="dh.php" method="post">
            <div class="w3-display-topleft">
                <div class="w3-panel w3-green">
                    <p>Fare Type</p>
                </div>
                <select name="Fare Type">
                    <option value="roundtrip">Round Trip</option>
                    <option value="oneway">One Way</option>
                    <option value="multicity">Multi-City</option>
                </select>
            </div>
            <div class="w3-display-topright">
                <div class="w3-panel w3-green">
                    <p>Passengers</p>
                </div>
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
            <div class="w3-display-topmiddle">
                <div class="w3-panel w3-green">
                    <p>Fare Class</p>
                </div>
                <select name="Fare Class">
                    <option value="firstClass">First Class</option>
                    <option value="businessClass">Business Class</option>
                    <option value="premiumEcon">Premium Economy</option>
                </select>
            </div>
            <div class="w3-display-left">
                <label>Origin</label>
                <input class="w3-input locationParam" type="text" list="listitems" placeholder="Enter origin city or airport code">
                <datalist id="listitems">
                    <?php
		//while in the table, get the json data
		$d = file_get_contents('iata.json');
		//convert the data to a php array so we can work with it
		$d = json_decode($d, true);
		
		//loop through the data to create dynamic html
		foreach($d as $k => $o){
			//for each object in our data, create a table row with table cells. in each table cell, concatenate values from the object we are looping through
			echo '<option value="'.$o['code'].'">'.$o['code'].'</option>';
		}
	?>

                </datalist>
            </div>
            <div class="w3-display-middle">
                <label>Destination</label>
                <input class="w3-input locationParam" type="text" placeholder="Enter destination city or aiport code">
            </div>
            <div class="w3-display-right">
                <label>Departure Date</label>
                <input class="w3-input" type="date">

                <label>Return Date</label>
                <input id="rtndate" class="w3-input" type="date">
            </div>

            <div class="w3-container w3-center w3-margin w3-display-bottommiddle">
                <input class="w3-button w3-green w3-round-xxlarge" type="button" value="Search Now">
            </div>
        </form>
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/main.js"></script>
<!-- Ajax script from Eloy's repository-->
<!--
    <script>
        $("form").submit(function (e) {
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: "ajaxprocess.php",
			type: "POST",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			success: function(){
				console.log('got here');
				cardloading();
			}
		});
		e.preventDefault();
	});
    </script>
-->
        
    <!--    Import axios library-->
<!--    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>-->
    <!--    Import IATA JavaScript file that will store the API call-->
<!--    <script src="iata-codes.js"></script>-->
</body>

</html>
