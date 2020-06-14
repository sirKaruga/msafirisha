<?php
session_start();

$title = $_POST['title'];
$duties = $_POST['duties'];
$qualifications = $_POST['qualifications'];
$positions = $_POST['positions'];
$deadline = $_POST['deadline'];

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'blog');

$inst = "INSERT INTO jobs(title, duties, qualifications, positions, deadline) VALUES('$title', '$duties', '$qualifications', '$positions', '$deadline')";
$con->query($inst);

header('location:pubsee.php');

?>