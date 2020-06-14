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
    .textarea{
      border-radius: 0.5em;
      border: 0.5px solid black;
      box-shadow: 0px 0px 0px 5px #C2C5CC;
      width: 100%;
    }

    .textarea2{
      border-radius: 0.5em;
      border: 0.5px solid grey;
      
      width: 100%;
    }

		.button{
			background-color: green;
      border: 0.5px solid black;
      color: red;
      font: bold;
      font-size: 1.5em;

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




                          /*animate lib starts*/
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
                            padding: 15px;
                            width: 100%;
                          }

                          @media only screen and (min-width: 400px) {
                            
                            .col-s-12 {width: 100%; background-color: white; box-shadow: 5px 10px 8px 10px #888888;}
                            .col-small{background-color: white;}
                          }

                          @media only screen and (min-width: 768px) {
                            
                            .col-6 {width: 50%; background-color: white; box-shadow: 5px 10px 8px 10px #888888;}
                            .col-3 {width: 25%;}
                          }

                          html {
                            font-family: "Lucida Sans", sans-serif;
                            background-color: #f5f5f5;
                            padding: 1em;
                          }




                          /*addes*/
                          body {font-family: Arial, Helvetica, sans-serif;}

                          /* Full-width input fields */
                          input[type=text], input[type=password] {
                            width: 100%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            display: inline-block;
                            border: 1px solid #ccc;
                            box-sizing: border-box;
                          }

                          /* Set a style for all buttons */
                          button {
                            background-color: #4CAF50;
                            color: white;
                            padding: 14px 20px;
                            margin: 8px 0;
                            border: none;
                            cursor: pointer;
                            width: 100%;
                          }

                          button:hover {
                            opacity: 0.8;
                          }

                          /* Extra styles for the cancel button */
                          .cancelbtn {
                            width: auto;
                            padding: 10px 18px;
                            background-color: #f44336;
                          }

                          /* Center the image and position the close button */
                          .imgcontainer {
                            text-align: center;
                            margin: 24px 0 12px 0;
                            position: relative;
                          }

                          img.avatar {
                            width: 20%;
                            border-radius: 50%;
                            border: 0.5px solid grey;
                          }

                          .container {
                            padding: 16px;
                          }

                          span.psw {
                            float: right;
                            padding-top: 16px;
                          }

                          /* The Modal (background) */
                          .modal {
                            display: none; /* Hidden by default */
                            position: fixed; /* Stay in place */
                            z-index: 1; /* Sit on top */
                            left: 0;
                            top: 0;
                            width: 100%; /* Full width */
                            height: 100%; /* Full height */
                            overflow: auto; /* Enable scroll if needed */
                            background-color: rgb(0,0,0); /* Fallback color */
                            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                            padding-top: 60px;
                          }

                          /* Modal Content/Box */
                          .modal-content {
                            background-color: #fefefe;
                            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                            border: 1px solid #888;
                            width: 80%; /* Could be more or less, depending on screen size */
                          }

                          /* The Close Button (x) */
                          .close {
                            position: absolute;
                            right: 25px;
                            top: 0;
                            color: #000;
                            font-size: 35px;
                            font-weight: bold;
                          }

                          .close:hover,
                          .close:focus {
                            color: red;
                            cursor: pointer;
                          }

                          /* Add Zoom Animation */
                          .animate {
                            -webkit-animation: animatezoom 0.6s;
                            animation: animatezoom 0.6s
                          }

                          @-webkit-keyframes animatezoom {
                            from {-webkit-transform: scale(0)} 
                            to {-webkit-transform: scale(1)}
                          }
                            
                          @keyframes animatezoom {
                            from {transform: scale(0)} 
                            to {transform: scale(1)}
                          }

                          /* Change styles for span and cancel button on extra small screens */
                          @media screen and (max-width: 300px) {
                            span.psw {
                               display: block;
                               float: none;
                            }
                            .cancelbtn {
                               width: 100%;
                            }
                          }

                          /*added end*/

                        /*animate lib ends*/







	</style>
</head>
<body style="background-color: #E4DAC2">

		<div class="row"><h1 style="text-align: center;"><b>Admin Dashboard</b></h1>
      <h2>Welcome <?php echo strtok($_SESSION['name'], " "); 
          $sent = $_SESSION['name'];
          $_SESSION['name'] = $sent;
      ?></h2>
    <div class="col-3">.
      <li><a href="adninsee.php">View feedback and Queries from the Publuc</a></li>
    </div>
			<div class="col-s-12 col-6 cont">
        <a style="float: right; font-size: 1.5em;" href="logout.php"> LogOut</a>

				<form method="post" action="fix.php" enctype="multipart/form-data">
						<input type="hidden" name="size" value="1000000"><br>
					<div>
						Photo:<input type="file" name="image" required><br><br>
					</div>

					<div>
						Headline:<input type="text" name="headline" placeholder=" Input Story Headline" required><br><br>
					</div>
				
					
					<div>
						Full Story:<br><br><textarea class="textarea" name="text" cols="auto" rows="17" placeholder=" Type in the whole Story here" required></textarea><br><br>
					</div>
					<div>
						<br><input class="button" type="submit" name="upload" value="Post"><br>
					</div>

					
				</form>
			</div>
      <div class="col-3">.
<!-- animate content -->
    
      
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Advertise Job Vacancy</button>

            <div id="id01" class="modal">
              
              <form class="modal-content animate" action="jobflg.php" method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <h1>You are about to Announce A Job Vacancy</h1>
                    
                </div>

                <div class="container">

                <label for="uname"><b>Job Title</b></label>
                <input type="text" placeholder="Insert Prospected Job Title" name="title" required>


                <label for="uname"><b>Duties</b></label><br>
                <textarea class="textarea2" rows="5" placeholder="Roles of candidate employee" name="duties" required></textarea><br><br>

                <label for="uname"><b>Qualifications and how to Apply</b></label><br>
                <textarea class="textarea2" rows="5"placeholder="Minimum required qualifications for the Job And how to send Applications" name="qualifications" required></textarea>

                <label for="psw"><b>No. of available Positions</b></label>
                <input type="text" placeholder="Positions available? e.g 1, 2..etc" name="positions" required>

                
                <label for="psw"><b>Application Deadline</b></label>
                <input type="text" placeholder="Application Deadline date" name="deadline" required>

                <div class="container">

                <button type="submit">Post to Public</button>
                
              </div>
                  
              </form>
            </div>

            <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
            <!-- modal anomated -->

                </div><!--end animate content   -->


     
		</div>
</body>
</html>