<?php
session_start();
// if (!isset($_SESSION['username'])) {
// 	header('location:login.html');
// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<a href="logout.php"> LogOut</a>
	<h1>Welcome <?php  
	 echo $_SESSION['username'];?> </h1>


				<?php
					$con = mysqli_connect('localhost', 'root', '');

				mysqli_select_db($con, 'shopyleague');

				$identity = $_SESSION['username'];

				$s = " select * from users where email = '$identity'";

				$result = mysqli_query($con, $s);
				
				

				 $seller = $_SESSION['seller'] ;
				$id = $_SESSION['id'] ;

				echo "$seller <br>";
				echo "$id";


				?>



</body>
</html>