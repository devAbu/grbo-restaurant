<?php
/* 
define('DB_USER', 'abu');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', '127.0.0.1');
	define('DB_NAME', 'restaurant');
 */
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'restaurant');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect'. mysqli_connect_error());

	mysqli_set_charset($dbc,"utf8");
}



$dateVisit = $_REQUEST["dateVisit"];
$timeVisit = $_REQUEST["timeVisit"];
$foodNum = $_REQUEST["foodNum"];
$foodQuantity =$_REQUEST["foodQuantity"];
$foodPrice =$_REQUEST["foodPrice"];
$drinkNum =$_REQUEST["drinkNum"];
$drinkQuantity =$_REQUEST["drinkQuantity"];
$drinkPrice =$_REQUEST["drinkPrice"];
$fullName =$_REQUEST["fullName"];


    if ($_REQUEST['task'] == "serve") {
		$query = "INSERT INTO menu (dateVisit, timeVisit, foodNum, foodQuantity, foodPrice, drinkNum, drinkQuantity, drinkPrice, fullName) VALUES ('$dateVisit','$timeVisit','$foodNum','$foodQuantity','$foodPrice','$drinkNum','$drinkQuantity', '$drinkPrice', '$fullName')";
        
            $response = @mysqli_query($dbc, $query);
            if ($response) {
                echo('SERVE');
			}else{
				echo mysqli_error($dbc);
			}
		}
}


?>

