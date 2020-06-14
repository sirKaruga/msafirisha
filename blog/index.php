<script type="text/javascript">
//   function jsUpdateSize(){
//     // Get the dimensions of the viewport
//     var width = window.innerWidth ||
//                 document.documentElement.clientWidth ||
//                 document.body.clientWidth;
//     var height = window.innerHeight ||
//                  document.documentElement.clientHeight ||
//                  document.body.clientHeight;

//     if (width>790) {
//         window.location.replace("index2.php");
//     }
// };
// window.onload = jsUpdateSize;       // When the page first loads
// window.onresize = jsUpdateSize;     // When the browser changes size
</script>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="ssheets.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    
.top{
  background-color: grey;
  font-size: 3em;
  font-family: Blackadder ITC;
  text-align: center;
  width: 100%;
  font: bold;
 }




/* Remove margins and padding from the list, and add a black background color */
ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #E3DAC9;
    font-family: auto;
    
    width: 100%

}

/* Float the list items side by side */
ul.topnav li {float: left;}

/* Style the links inside the list items */
ul.topnav li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 4px 26px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
    border-radius: 32px;
}

/* Change background color of links on hover */
ul.topnav li a:hover {background-color: #696952;}

/* Hide the list item that contains the link that should open and close the topnav on small screens */
ul.topnav li.icon {display: none;}


/*remove if it doesnt work*/
li.active, .topnav:hover{background-color: green, color:black;}
/*remove if it doesnt work*/


/*topnav1 media rueries*/
/* When the screen is less than 680 pixels wide, hide all list items, except for the first one ("Home"). Show the list item that contains the link to open and close the topnav (li.icon) */
@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens */
@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
}


/*topsearchnav*/

 /*slideshow div and responsiveness*/
                    * {
                      box-sizing: border-box;
                    }

                   
                    

                    .row:after {
                      content: "";
                      clear: both;
                      display: table;

                    }

                    [class*="col-"] {
                      float: left;
                      /*padding: 15px;*/
                      width: 100%;
                      
                      
                    }

                    @media only screen and (min-width: 600px) {
                      .col-s-1 {width: 8.33%;}
                      .col-s-2 {width: 16.66%;}
                      .col-s-3 {width: 95%;}
                      .col-s-4 {width: 33.33%;}
                      .col-s-5 {width: 41.66%;}
                      .col-s-6 {width: 50%;}
                      .col-s-7 {width: 58.33%;}
                      .col-s-8 {width: 66.66%;}
                      .col-s-9 {width: 75%;}
                      .col-s-10 {width: 83.33%;}
                      .col-s-11 {width: 91.66%;}
                      .col-s-12 {width: 100%;}
                      .col-s-13 {width: 0%;}
                      
                    }

                    @media only screen and (min-width: 768px) {
                      .col-1 {width: 15%;}
                      .col-2 {width: 16.66%;}
                      .col-3 {width: 25%;}
                      .col-3ps {width: 29%;}
                      .col-4 {width: 33.33%;}
                      .col-5 {width: 41.66%;}
                      .col-6 {width: 70%;}
                      .col-7 {width: 50%;}
                      .col-8 {width: 66.66%;}
                      .col-9 {width: 75%;}
                      .col-10 {width: 70%;}
                      .col-11 {width: 91.66%;}
                      .col-12 {width: 100%;}
                      .col-13{width: 20%}
                      

                    }

                    html {
                      font-family: "Lucida Sans", sans-serif;
                    }

                    .header {
                      background-color: #9933cc;
                      color: #ffffff;
                      padding: 15px;
                    }

                    .menu ul {
                      list-style-type: none;
                      margin: 0;
                      padding: 0;

                    }
                    .h1{
                      background-color: grey;
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
                    .element{
                      background-image: none;
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
                      
                      color: white;
                      text-align: center;
                      font-size: 12px;
                      padding: 15px;
                      
                      background-color: black;
                    }
                    .n1{
                          text-align: left;
                          background-color: white;
                          animation: solid grey;
                          box-shadow: 5px 10px 18px black;
                          align-self: center;
                        }


                    /*end */

.class1{
  
  background-image: url("white.png");
  /*margin-top: 3em;*/
  border-radius: 0.5em;
  box-shadow: 10px 20px 37px grey, 0 1px 2px rgba(0,0,0,0.24);
}
/*.tops{
  margin-top: 3em;
}*/

.dfooter{
   color: white;
   text-align: left;
  font-size: 19px;
  padding: 15px;
    }
a{
  text-decoration: none;

}

img{
  float: left;
  
  height: 5em;
  width: auto;
 
  
}




div.img:hover {
    border: 1px solid #777;
}


table{
  font-size: 20px;
  font: bold;
  width: 100%;
  text-align: left;
  background-color: white;
  border-radius: 0.5em;
  border: 0.5px solid grey;
  box-shadow: 0 7px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);

}
.ttop{
  background-color: 
}




  </style>
</head>
<body style='width:100%; height:auto; margin:0%; padding:0%; max-height:15em;'>

	<div class="top">
		<b>Safirisha-Media</b>
	</div>
<!-- topnav starts -->
<ul class="topnav">
  <li><a class="active" href="index.php">News Feed</a></li>
  <li><a href="pubsee.php">Job Adverts</a></li>
  <li><a href="reports.php">Report to Us</a></li>
  <li><a href="kevoswork.html">About</a></li>
  
  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
</ul>


<script type="text/javascript">
	/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}

</script>


<!-- topnav ends -->

<div class="row"><!-- row division begins --> 

	

	<div class=" col-10 col-s-12 class1"><!-- home main box content bgn-->
		


		<?php
                      $db = mysqli_connect("localhost", "root", "", "blog");
                      $sql = "SELECT * FROM main ORDER BY id DESC";
                      // $sql = "SELECT TOP 3* FROM main ORDER BY id DESC";

                      $result = mysqli_query($db, $sql);
                      while ($row = mysqli_fetch_array($result)) {
                          // echo "<div id='image_div'>";
                          // echo "<img src='images/".$row['image']."'>";
                          // echo "<p>".$row['text']."</P>";
                          // echo "</div>";
                         
                          echo "<div>";
                          	echo "<table width='300' style='width:100%; margin:0%; padding:0%;'>";
                          		echo "<tr>";	
                          			#echo "<td>";
                          			echo "<th><a href='ref.php?id=".$row['id']."'>".$row['headline']."</th></a>";
                          			echo "</tr>";
                          			#echo "</td>";
                          			#echo "<td>";
                                echo "<tr>";
                          				echo "<a style='float:right; min-width:5em;' href='ref.php?id=".$row['id']."'>
                          				<img src='images/".$row['image']."' alt='image' style='width:100%; height:auto; margin:0%; padding:0%; max-height:15em;'></a>";	
                          			#echo "</td>";
                          			echo "</tr>";
                          		echo "</table>";
                          		echo "</div>";
                          		echo "<br>";


                          $_SESSION['identity'] = $row['id'];
                          
                          
                         
                      }


                      ?>

	</div><!-- home main box content ends-->

 <!--  <div class="col-3ps col-s-12 n1">
    check this one
    
  </div> -->

	<div class="col-1  col-s-13 tops"><!-- home small left side begins -->
		<h1>Catch It From Safirisha-Media</h1><br>
		<h1>Your Reliable Presenter</h1>
	</div><!-- home small left side ends -->

	<div class="col-1 col-s-13 tops"><!-- home small right side begins -->
		
	</div><!-- home small right side ends -->
	
</div><!-- row division ends -->
<br>

<div class="footer"><!-- open black background -->

	<div class="row"><!-- opening another row div for foot -->
	
	
		<div class=" col-7 col-s-12 dfooter"><!-- first colum -->

			<a href="reports.php">Tell Us what is happening</a><br>
			<a href="pubsee.php">Work with us</a><br>
			<a href="reports.php">Leave us a Suggestion</a><br>
      <a href="kevoswork.html">About</a><br>

		</div><!-- first colum ends -->

		<div class=" col-7 col-s-12 dfooter"><!-- last colum -->

			<a href="Prepare.html">Subscribe to getting hot news</a><br>
			<a href="reports.php">Report Something</a><br>
			<a href="kevoswork.html">Find more about Us</a><br>

		</div><!-- last colum ends -->
	
	</div><!-- closing footer row -->
		 <p style="font-size: 1.2em; text-align: center;">
              &#169; System Designed By <a style="text-decoration: none;" href="www.vidielites.co.ke">Vidielites Technologies</a>
            </p>
</div><!-- close black background -->


</body>
</html>