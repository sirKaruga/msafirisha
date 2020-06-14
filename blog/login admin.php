<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		.cont{
			text-align: left;
			border: 1px solid grey;

			background-color: #EFEEEE;
			animation: solid grey;
			box-shadow: 5px 10px 18px black;
			align-self: center;
			
		}
		input{
			width: 70%;
			border-radius: 0.5em;
			height: 2em;
			border: 0.4px solid black;
			box-shadow: 2px grey;
		}
    textarea{
      border-radius: 0.5em;
      border: 0.5px solid black;
      box-shadow: 0px 0px 0px 5px #C2C5CC;
      width: 100%;
    }

		.button{
			
      border: 0.5px solid black;
      color: red;
      font: bold;
      font-size: 1em;
      float: center;

		}

		.button li:hover{
			background-color: pink;
		}
		
* {
  box-sizing: border-box;
}

img {
  width: auto;
  height: 100%;
}

.row:after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
  width: 100%;
}

@media only screen and (min-width: 600px) {
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}

  
}

@media only screen and (min-width: 768px) {
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
  .col-13 {width: 20%;}
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}




}
.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color :#33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}
button{
	border: 0.5px solid grey;
}
</style>
</head>

<body style="background-color: #E4DAC2">

		<div class="row">
      
    <div class="col-3">.</div>
			<div class="col-s-12 col-6 cont">

				<h1 style="text-align: center;"><b>Admin Login</b></h1>

	<form method="Post" action="<?php echo htmlspecialchars("") ?>">
		Password: <input type="password" name="password" placeholder="input your password"><br> <br>

				 <input type="Submit" name="Submit" >
	</form>
</div>
<div class="col-3">.</div>
</div>
<?php

$connect = new mysqli("localhost", "root", "", "blog");


$exact = "SELECT * FROM login WHERE id = 1";

while ($row=mysqli_fetch_array($exact)) {
	# code...
	$right = mysqli_fetch($_GET['password']);

	echo "".$row[$right]."";
}




// 	$correct = 

  

// 	$correct->query($connect);
// 	$query->close();

// 	if ($pass === $correct ) {
		
// 		echo "good";

		
// 	} else{
// 		echo "Password is not correct";

// }





 ?>

</body>
</html>