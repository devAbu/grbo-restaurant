<?php 

$hostname = "localhost";
$username = "root";
$pass = "";
$dataBaseName = "restaurant";

$connection = mysqli_connect($hostname, $username, $pass);
$selection = mysqli_select_db($connection, $dataBaseName);

$email = $_POST['email'];
$password = $_POST['password'];

$success = true;

if(!$connection){
	die("connection failed ".mysqli_error());
	$success = false;
}

if(!$selection){
	die("selection failed ".mysqli_error());
	$success = false;
}

if($success){
	$sql = "SELECT `email`,  `password` FROM `register` WHERE `email` = '$email'";
    $result = $connection->query($sql);

	if ($result->num_rows > 0) {
        // output data of each row
             while($row = $result->fetch_assoc()) {
				echo $row['email'].  " ".$row['password'];
				if( $row['email'] == $email){
					if($row['password'] == $password){
						$query = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
						if(mysqli_query($connection,$query)){
							echo "<br>";
							echo "Good";
							header("location:index.html");
						}else{
							echo "<h1>There is a problem. </h1>";
							echo "<br>";
							echo "<h3>Please try again</h3>";
							echo "<br>";
						}
					}else{
						echo "<h2>Password is incorrect!!!</h2>";
						header("refresh:2, url=log.php");
					}
				}/*else{
					echo "<br>";
					echo "Email or username is incorrect!!!";
				}*/
             }
        } else {
            echo "<h2>Email  is incorrect!!!</h2>";
			header("refresh:1, url=log.php");
          }
}
?>