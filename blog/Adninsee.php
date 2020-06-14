<?php 
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.html');
}

 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="ssheets.css">
	<style type="text/css">
		.push{
			padding-left: 3em;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-1"></div>
		<div class="col-6 col-s-12" style="background-color: beige;">

			<h1 style="background-color: grey; padding: 1em;">Queries to Safirisha</h1>
				 <!-- db out -->
			<?php
			$con = mysqli_connect('localhost', 'root', '');

			mysqli_select_db($con, 'blog');

			$pick = "SELECT *FROM publics ORDER BY id DESC";
			$records = mysqli_query($con, $pick);

			while ($itm = mysqli_fetch_array($records)) {
				
				echo "<h2>".$itm['id'].".<u>".$itm['subject']."</u></h2>";

				echo "<a href='images/".$itm['file']."'>
                          				<img src='images/".$itm['file']."' alt='file' width='300' height='200'></a>";
                echo "  <b class ='push' >From: </b>".$itm['contact']."<br>";
				echo "  <b class ='push' >Details: </b>".$itm['rdetail']."<br>";
				echo "  <span class ='push'>Date:</span>".$itm['date']."
						
				  		
				   		<br><br><br><br><br>
				
				";
			}

			?>

		</div>
	</div>
	
</body>
</html>
