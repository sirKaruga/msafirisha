<?php
session_start();

$return = $_SESSION['identity'];
$_SESSION['identity'] = $return;


if (!isset($_SESSION['name'])) {
	header('location:ask_name.php');
}else{
	$customer = $_SESSION['name'];
	$_SESSION['name'] = $customer;


$texted = $_POST['text'];
$tstamp = date("l jS \of F Y h:i:s A");

if ($texted != "") {

$mycon = new mysqli("localhost", "root", "", "blog");

$valfix = "INSERT INTO texts(client, owntext, tstamp) VALUES('$customer', '$texted', '$tstamp')";
$mycon->query($valfix);

header('location:chatonly.php');

}

}


?>