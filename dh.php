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
			<th>ID</th>
			<th>NAME</th>
			<th>GENRE</th>
		</tr>

	<?php
		//while in the table, get the json data
		$d = file_get_contents('iata.json');
		//convert the data to a php array so we can work with it
		$d = json_decode($d, true);
		
		//loop through the data to create dynamic html
		foreach($d as $k => $o){
			//for each object in our data, create a table row with table cells. in each table cell, concatenate values from the object we are looping through
			echo '<tr>
					<td>'.++$k.'</td>
					<td>'.$o['name'].'</td>
					<td>'.$o['genre'].'</td>
				</tr>';
		}
	?>

	</table>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>