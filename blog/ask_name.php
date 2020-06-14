<?php
session_start();

$return = $_SESSION['identity'];
$_SESSION['identity'] = $return;



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form method="post" action="nameprocess.php">
						
					<div>
						<input type="text" name="uname" placeholder=" Input your name to proceed"required><br><br>
					</div>
				
					
					<div>
						<br><input class="button" type="submit" name="upload" value="Post"><br>
					</div>

					
				</form>
</body>
</html>