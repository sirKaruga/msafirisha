<script type="text/javascript">
  function jsUpdateSize(){
    // Get the dimensions of the viewport
    var width = window.innerWidth ||
                document.documentElement.clientWidth ||
                document.body.clientWidth;
    var height = window.innerHeight ||
                 document.documentElement.clientHeight ||
                 document.body.clientHeight;

    if (width<=790) {
        window.location.replace("index.php");
    }
};
window.onload = jsUpdateSize;       // When the page first loads
window.onresize = jsUpdateSize;     // When the browser changes size
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Msafirisha</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #EBECF0">
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$resultset = $db_handle->runQuery("SELECT * fROM main ORDER BY id DESC");
 // echo '<img src=images/'.$resultset[12]["image"].'>';

 function exploding($value){
 	$x = explode(' ', $value);
 	if (!isset($x[1]) && isset($x[0])) {
 		$res = "$x[0]";
 	}elseif (!isset($x[2]) && isset($x[1])) {
 		$res = "$x[0]"." "."$x[1]";
 	}elseif (!isset($x[3]) && isset($x[2])) {
 		$res = "$x[0]"." "."$x[1]"." "."$x[2]";
 	}elseif (!isset($x[4]) && isset($x[3])) {
 		$res = "$x[0]"." "."$x[1]"." "."$x[2]"." "."$x[3]";
 	}elseif (!isset($x[5]) && isset($x[4])) {
 		$res = "$x[0]"." "."$x[1]"." "."$x[2]"." "."$x[3]"." "."$x[4]";
 	}elseif (!isset($x[6]) && isset($x[5])) {
 		$res = "$x[0]"." "."$x[1]"." "."$x[2]"." "."$x[3]"." "."$x[4]"." "."$x[5]";
 	}else{
 		$res = "$x[0]"." "."$x[1]"." "."$x[2]"." "."$x[3]"." "."$x[4]"." "."$x[5]";
 	}
          // $res = "$x[0]"." "."$x[1]"." "."$x[2]"." "."$x[3]"." "."$x[4]"." "."$x[5]";
          echo $res;
 }

 function dexplode($mvalue){
 	$x = explode(' ', $mvalue);
          $dres = "$x[1]"." "."$x[2]"." "."$x[3]";
          echo $dres;
 }
 #$string = preg_replace('/\s+/', '', $resultset[0]["date"]);
?>



<!-- topnavs -->
<!-- topnavs+++++++++++++++++++++++++++++++++++++++++++++++______________________-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --><br>
<ul style="background-color: #8D021F; height: 5em; vertical-align: middle;" class="nav nav-tabs shadow-lg p-3 mb-5 bg-white rounded">
  
  <li>
  	<b><br><a class="active" style="color: white; padding: 1em;" href="#">News Feeed</a></b>
  </li>
  <li>
  	<b><br><a style="color: white; padding: 1em;" href="pubsee.php">Job Adverts</a></b>
  </li>
  <li>
  	<b><br><a style="color: white; padding: 1em;" href="reports.php">Report to Us</a></b>
  </li>

  <li>
  	<br><form>
  		<input style="border-radius: 5px; width: 18em; height: 2em;" placeholder="Search Items..." type="text" name="search">
  		<input style="border-radius: 5px; width: 6em; height: 2em;" type="button" name="search" value='Search'>
  	</form>
  </li>
</ul>

<!-- topnavs end ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

<div class="container-fluid">

	<br>


<!-- ================================start of the first heap=============================================================================================================================================================================================================================================================================== -->

<div style="border-top: 3px solid black; border-bottom: 3px solid black;" class="row">
<h4>Super News <a href="#">More>></a></h4>
 <div class="col-sm-3">

 	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[0]["id"].''; ?>>
	 <div class="card" style="width: 100%; background-color: white; min-height: 25em;min-height: 25em;">
	  <img class="card-img-top" style="width: 100%; min-height:18em; max-height:18em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[0]["image"].''; ?> alt="Card image cap">
	  <div class="card-body"><br>
	    <p class="card-text"><?php echo ''.$resultset[0]["headline"].''; ?></p>
	  </div><br style="background-color: #EBECF0;">
	</div>
	</a>

 </div>
 <div class="col-sm-3">

  <div class="row" style=" background-color: white; border-bottom: 1px solid grey; margin-bottom: 0.5em; margin-right: 1px;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[1]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.76em;max-height:7.76em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[1]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[1]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[1]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey; margin-bottom: 0.5em;margin-right: 1px;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[2]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.75em;max-height:7.75em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[2]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[2]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[2]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey;margin-right: 1px;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[3]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:8.4em;max-height:8.4em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[3]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[3]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[3]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>
 	
 <!-- ------------------------end first half--------------------------- -->

 </div>
 <!-- second -->

 <div class="col-sm-3">
 
 <div class="row" style=" background-color: white; border-bottom: 1px solid grey; margin-bottom: 0.5em;">
 	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[4]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.76em;max-height:7.76em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[4]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[4]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[4]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey; margin-bottom: 0.5em;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[5]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.75em;max-height:7.75em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[5]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[5]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[5]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[6]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:8.4em;max-height:8.4em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[6]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[6]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[6]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>	
<!-- end the middle column -->


 </div>
 <div class="col-sm-3">
 	
 	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[8]["id"].''; ?>>
 	<div class="card" style="width: 100%; background-color: white; min-height: 25em;min-height: 25em;">
	  <img class="card-img-top" style="width: 100%; min-height:18em; max-height:18em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[8]["image"].''; ?> alt="Card image cap">
	  <div class="card-body"><br>
	    <p class="card-text"><?php echo ''.$resultset[8]["headline"].''; ?></p>
	  </div><br style="background-color: #EBECF0;">
	</div>
	</a>

 </div>
 <div class="col-sm-12"><br></div>

</div><!-- row end -->

<!-- ================================full ending of the first heap=============================================================================================================================================================================================================================================================================== -->

<?php
$count = $db_handle->numRows("SELECT * fROM main ORDER BY id DESC");
if ($count>15) {
?>


<!-- ================================start of the second heap=============================================================================================================================================================================================================================================================================== -->

<div style="border-top: 3px solid black; border-bottom: 3px solid black;" class="row">
<h4>News as they Come <a href="#">More>></a></h4>
 <div class="col-sm-3">

 	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[9]["id"].''; ?>>
	 <div class="card" style="width: 100%; background-color: white; min-height: 25em;min-height: 25em;">
	  <img class="card-img-top" style="width: 100%; min-height:18em; max-height:18em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[9]["image"].''; ?> alt="Card image cap">
	  <div class="card-body"><br>
	    <p class="card-text"><?php echo ''.$resultset[9]["headline"].''; ?></p>
	  </div><br style="background-color: #EBECF0;">
	</div>
	</a>

 </div>
 <div class="col-sm-3">

  <div class="row" style=" background-color: white; border-bottom: 1px solid grey; margin-bottom: 0.5em; margin-right: 1px;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[10]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.76em;max-height:7.76em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[10]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[10]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[10]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey; margin-bottom: 0.5em;margin-right: 1px;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[11]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.75em;max-height:7.75em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[11]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[11]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[11]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey;margin-right: 1px;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[12]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:8.4em;max-height:8.4em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[12]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[12]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[12]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>
 	
 <!-- ------------------------end first half--------------------------- -->

 </div>
 <!-- second -->

 <div class="col-sm-3">
 	
 	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[16]["id"].''; ?>>
 	<div class="card" style="width: 100%; background-color: white; min-height: 25em;min-height: 25em;">
	  <img class="card-img-top" style="width: 100%; min-height:18em; max-height:18em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[16]["image"].''; ?> alt="Card image cap">
	  <div class="card-body"><br>
	    <p class="card-text"><?php echo ''.$resultset[16]["headline"].''; ?></p>
	  </div><br style="background-color: #EBECF0;">
	</div>
	</a>

 </div>

 <!-- big middle and ends here -->

 <div class="col-sm-3">
 
 <div class="row" style=" background-color: white; border-bottom: 1px solid grey; margin-bottom: 0.5em;">
 	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[13]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.76em;max-height:7.76em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[13]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[13]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[13]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey; margin-bottom: 0.5em;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[14]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.75em;max-height:7.75em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[14]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[14]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[14]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[15]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:8.4em;max-height:8.4em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[15]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[15]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[15]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>	
<!-- end the middle column -->


 </div>
 
 <div class="col-sm-12"><br></div>

</div><!-- row end -->

<!-- ================================full ending of the second heap=============================================================================================================================================================================================================================================================================== -->

<?php
}
?>

<?php
$count = $db_handle->numRows("SELECT * fROM main ORDER BY id DESC");
if ($count>23) {
?>


<!-- ================================start of the third heap=============================================================================================================================================================================================================================================================================== -->

<div style="border-top: 3px solid black; border-bottom: 3px solid black;" class="row">
<h4>News as they Come <a href="#">More>></a></h4>
 <div class="col-sm-3">

 	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[17]["id"].''; ?>>
	 <div class="card" style="width: 100%; background-color: white; min-height: 25em;min-height: 25em;">
	  <img class="card-img-top" style="width: 100%; min-height:18em; max-height:18em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[17]["image"].''; ?> alt="Card image cap">
	  <div class="card-body"><br>
	    <p class="card-text"><?php echo ''.$resultset[17]["headline"].''; ?></p>
	  </div><br style="background-color: #EBECF0;">
	</div>
	</a>

 </div>
 <div class="col-sm-3">

  <div class="row" style=" background-color: white; border-bottom: 1px solid grey; margin-bottom: 0.5em; margin-right: 1px;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[18]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.76em;max-height:7.76em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[18]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[18]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[18]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey; margin-bottom: 0.5em;margin-right: 1px;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[19]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.75em;max-height:7.75em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[19]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[19]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[19]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey;margin-right: 1px;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[20]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:8.4em;max-height:8.4em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[20]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[20]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[20]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>
 	
 <!-- ------------------------end first half--------------------------- -->

 </div>
 <!-- second -->

 <div class="col-sm-3">
 
 <div class="row" style=" background-color: white; border-bottom: 1px solid grey; margin-bottom: 0.5em;">
 	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[21]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.76em;max-height:7.76em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[21]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[21]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[21]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey; margin-bottom: 0.5em;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[22]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.75em;max-height:7.75em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[22]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[22]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[22]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[23]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:8.4em;max-height:8.4em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[23]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[23]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[23]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>	
<!-- end the middle column -->


 </div>
 <div class="col-sm-3">
 	
 	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[24]["id"].''; ?>>
 	<div class="card" style="width: 100%; background-color: white; min-height: 25em;min-height: 25em;">
	  <img class="card-img-top" style="width: 100%; min-height:18em; max-height:18em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[24]["image"].''; ?> alt="Card image cap">
	  <div class="card-body"><br>
	    <p class="card-text"><?php echo ''.$resultset[24]["headline"].''; ?></p>
	  </div><br style="background-color: #EBECF0;">
	</div>
	</a>

 </div>
 <div class="col-sm-12"><br></div>

</div><!-- row end -->

<!-- ================================full ending of the third heap=============================================================================================================================================================================================================================================================================== -->



<?php
}
?>

<?php
$count = $db_handle->numRows("SELECT * fROM main ORDER BY id DESC");
if ($count>31) {
?>


<!-- ================================start of the 4th heap=============================================================================================================================================================================================================================================================================== -->

<div style="border-top: 3px solid black; border-bottom: 3px solid black;" class="row">
<h4>News as they Come <a href="#">More>></a></h4>
 <div class="col-sm-3">

 	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[7]["id"].''; ?>>
	 <div class="card" style="width: 100%; background-color: white; min-height: 25em;min-height: 25em;">
	  <img class="card-img-top" style="width: 100%; min-height:18em; max-height:18em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[7]["image"].''; ?> alt="Card image cap">
	  <div class="card-body"><br>
	    <p class="card-text"><?php echo ''.$resultset[7]["headline"].''; ?></p>
	  </div><br style="background-color: #EBECF0;">
	</div>
	</a>

 </div>
 <div class="col-sm-3">

  <div class="row" style=" background-color: white; border-bottom: 1px solid grey; margin-bottom: 0.5em; margin-right: 1px;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[25]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.76em;max-height:7.76em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[25]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[25]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[25]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey; margin-bottom: 0.5em;margin-right: 1px;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[26]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.75em;max-height:7.75em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[26]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[26]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[26]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey;margin-right: 1px;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[27]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:8.4em;max-height:8.4em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[27]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[27]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[27]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>
 	
 <!-- ------------------------end first half--------------------------- -->

 </div>
 <!-- second -->
 <div class="col-sm-3">
 	
 	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[31]["id"].''; ?>>
 	<div class="card" style="width: 100%; background-color: white; min-height: 25em;min-height: 25em;">
	  <img class="card-img-top" style="width: 100%; min-height:18em; max-height:18em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[31]["image"].''; ?> alt="Card image cap">
	  <div class="card-body"><br>
	    <p class="card-text"><?php echo ''.$resultset[31]["headline"].''; ?></p>
	  </div><br style="background-color: #EBECF0;">
	</div>
	</a>

 </div>

 <!-- intrchng end -->

 <div class="col-sm-3">
 
 <div class="row" style=" background-color: white; border-bottom: 1px solid grey; margin-bottom: 0.5em;">
 	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[28]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.76em;max-height:7.76em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[28]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[28]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[28]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey; margin-bottom: 0.5em;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[29]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:7.75em;max-height:7.75em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[29]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[29]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[29]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>

  <div class="row" style=" background-color: white;border-bottom: 1px solid grey;">
  	<a style="color: black; text-decoration: none;" <?php echo 'href=ref.php?id='.$resultset[30]["id"].''; ?>>
  	<div class="card" style="width: 100%; min-height:8.4em;max-height:8.4em;">
    <div class="col-sm-5">
      <img class="card-img shadow p-3 mb-5 bg-white rounded" style="width: 100%; min-height:5em; max-height:5em; max-width: 22.2em;" <?php echo 'src=images/'.$resultset[30]["image"].''; ?> alt="Card image cap">
    </div>
    <div class="col-sm-7">
      <p class="card-text"><?php exploding($resultset[30]["headline"]); ?></p>
      <p><b><i><?php dexplode($resultset[30]["date"]); ?></i></b></p>
    </div>
    </div>
</a>
  </div>	
<!-- end the middle column -->


 </div>
 
 <div class="col-sm-12"><br></div>

</div><!-- row end -->

<!-- ================================full ending of the 4th heap=============================================================================================================================================================================================================================================================================== -->

<?php
}
?>

</div><!-- container class end -->

<br>

<!-- ================================footer begins=================================================================================================================================================================================================================================================================================================== -->

<!-- Footer -->
<footer style="background-color: #173F5F;" class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 style="color: white;" class="text-uppercase"><b>Our Company:</b></h5>
        <p style="color: white;">We provide a well Presented and accurate News to reach you from all over the globe</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 style="color: white;" class="text-uppercase">Contacts:</h5>

        <ul class="list-unstyled">
          <li>
            <a style="color: white;" href="#!">0708453589</a>
          </li>
          <li>
            <a style="color: white;" href="#!">tonnydennis443@gmail.com</a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 style="color: white;" class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a style="color: white;" href="reports.php">Report to us</a>
          </li>
          <li>
            <a style="color: white;" href="pubsee.php">Careers</a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div style="color: white;" class="footer-copyright text-center py-3">© 2020 Copyright:
    <a style="color: pink;" href="#"> sirKaruga</a>
  </div>
  <!-- Copyright -->

</footer><br>
<!-- Footer -->

<!-- ================================footer ends=================================================================================================================================================================================================================================================================================================== -->

</body>
</html>