<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php 
        
        //Store data from form into variables
        $t=$_POST['fareType'];
        $c=$_POST['fareClass'];
        $p=$_POST['passengers'];
        $o=$_POST['origin'];
        $d=$_POST['destination'];
        $depart=$_POST['departDate'];
        $return=$_POST['returnDate'];
        
        //retrieve the Json file and converted it into php array
        $j = file_get_contents('results.json');
        $j = json_decode($j, true);
    
        //search the php array to find the object that corresponds to the form data variables
        
    
        
        ?>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
