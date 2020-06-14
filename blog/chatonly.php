<?php
session_start();
$return = $_SESSION['identity'];
$_SESSION['identity'] = $return;

if (!isset($_SESSION['name'])) {
	header('location:ask_name.php');
}

// $myuname = $_POST['uname'];
// $_SESSION['name'] = $myuname;
$page = $_SERVER['PHP_SELF'];
$sec = "10";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script>
   $(document).ready(function()
   {
    setInterval(function(){
      $("#autodata").load("the_div.php");
      refresh();
     }, 10);
   });
  </script>

	 <!-- <meta http-equiv="refresh" content="10" > -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
  * {
    box-sizing: border-box;
  }

  img {
    width: 10em;
    height: auto;
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

  .cont{
  			text-align: left;
  			background-color: #EFEEEE;
  			animation: solid grey;
  			box-shadow: 5px 10px 18px black;
  			align-self: center;
  		}

  textarea{
        border-radius: 0.5em;
        border: 0.5px solid black;
        box-shadow: 0px 0px 0px 5px #C2C5CC;
        width: 50%;
      }

  .person{
  	font: bold;
  	color: #0892D0;
  	font-size: 1.1em;
  }
  .tst{
  	color: grey;
  	font-size: 0.8em;
  }
</style>

</head>
<body>

	<script>
		var $scores = $("#scores");
		setInterval(function () {
		$scores.load("index.php #scores");
		}, 30);
  	</script>

<div class="row">
	<div class="col-7 col-s-12 cont">

		<form method="post" action="chatfix.php">
           
          <div>
           <textarea name="text" cols="auto" rows="4" placeholder=" Type your Text here"required></textarea>
          
            <input style="padding: 1em; margin-bottom: 1em;" class="button" type="submit" name="upload" value="Post"><br>
          </div>

          
        </form>
    <div>

<div id="autodata"> </div><br>

<!-- end scores reload -->
</div>
  	<!--reload id= 'scores' ends here  -->

  	
	</div>

	<div class="col-4">
			<?php
              echo("<h1><U>See Also...</U></h1>");
                      $db = mysqli_connect("localhost", "root", "", "blog");
                      // $sql = "SELECT TOP '3' FROM main ORDER BY id DESC";
                      $sql = "SELECT * FROM main ORDER BY id DESC LIMIT 15";

                      $result = mysqli_query($db, $sql);
                      while ($row = mysqli_fetch_array($result)) {
                          // echo "<div id='image_div'>";
                          // echo "<img src='images/".$row['image']."'>";
                          // echo "<p>".$row['text']."</P>";
                          // echo "</div>";
                         
                          echo "<div>";
                            echo "<table>";
                            
                            
                              echo "<tr class ='tr'>";  
                                
                                echo "<td>";
                                echo "<th><a href='ref.php?id=".$row['id']."'>".$row['headline']."</th></a>";
                                
                                echo "</td>";
                                echo "<td>";
                                  echo "<a href='ref.php?id=".$row['id']."'>
                                  <img src='images/".$row['image']."' alt='image' width='300' height='200'></a>";
                                    
                                echo "</td>";
                                echo "</tr>";
                              echo "</table>";
                              echo "</div>";
                              echo "<br>";
                      }


                      ?>
</div>



</div>
  </body>
</html>