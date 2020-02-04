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
    <table>
		<tr>
			<th>ORIGIN</th>
			<th>DESTINATION</th>
			<th>NON-STOP</th>
			<th>PRICE</th>
			<th>CURRENCY</th>
		</tr>

    

    <?php 
        
        //Store data from form into variables
        $t=$_POST['fareType'];
        $c=$_POST['fareClass'];
        $p=$_POST['passengers'];
        $origin=$_POST['origin'];
        $dest=$_POST['destination'];
        $depart=$_POST['departDate'];
        $return=$_POST['returnDate'];
        
        //retrieve the Json file and convert it into php array
        $j = file_get_contents('results.json');
        $j = json_decode($j, true);
    
        //print_r ($j);
    
        //search the php array to find the object that corresponds to the form data variables
        
        //loop through the data to create dynamic html
        foreach($d as $k => $o){
			//for each object in our data, create a table row with table cells. in each table cell, concatenate values from the object we are looping through
//            if ($o['OriginId'] === $o['PlaceId'] && $o['Places']['PlaceId']['IataCode'] === $origin){
			echo '<tr>
					<td>'.++$k.'</td>
                    <td>'.$o['Quotes']['OutboundLeg']['OriginId'].'</td>
                    <td>'.$o['Quotes']['OutboundLeg']['DestinationId'].'</td>
					<td>'.$o['Quotes']['Direct'].'</td>
					<td>'.$o['Quotes']['MinPrice'].'</td>
					<td>'.$o['Currencies']['Code'].'</td>
				</tr>';
//             }
		}
        
    ?>
    </table>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
