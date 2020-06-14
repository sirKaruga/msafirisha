<?php
session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'blog');

$name = $_POST['name'];
$email = $_POST['user'];
$pass = $_POST['password'];
$passcheck = $_POST['password1'];

if ($pass != $passcheck) {
	header('location:Repeat.php');
}else{

$s = " SELECT * FROM ministers WHERE email = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "<h1>!!!</h1>";
	echo "<h1>The Username/Email you entered has already been registered <br> with another account.</h1> <b>Try Using a different email address</b>";
} else{
	$reg = "INSERT INTO ministers(name, email, password) VALUES ('$name', '$email', '$pass')";
	mysqli_query($con, $reg);
	echo "Account Successfully Created";
}

}


?>