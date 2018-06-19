<?php

	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'restaurant');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect'. mysqli_connect_error());

	mysqli_set_charset($dbc,"utf8");




$opinion = $_REQUEST["opinion"];

    if ($_REQUEST['task'] == "feed") {
		$query = "INSERT INTO feedback (opinion) VALUES ('$opinion')";
        
            $response = @mysqli_query($dbc, $query);
            if ($response) {
                echo("feed");
			}else{
				echo mysqli_error($dbc);
			}
		}



?>

