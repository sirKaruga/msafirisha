<?php
session_start();

    $msg = "";
    //if upload button is pressed
    if (isset($_POST['upload'])) {
      //the path to store uploaded image
      $target = "images/".basename($_FILES['image']['name']);

         //connect to the database
      $db = new mysqli("localhost", "root", "", "blog");

      //get all the submitted data from the form
      $image = $_FILES['image']['name'];
      $headline = $_POST['headline'];
        $reporter = $_SESSION['name'];
        $text = $_POST['text'];
        $date = date("l jS \of F Y h:i:s A");

        // escaping


      $sql = "INSERT INTO main (image, headline, reporter, text, date) VALUES ('$image', '$headline', '$reporter', '$text', '$date')";

      

      $db->query($sql);

    $db->close();

        
      //stores the submitted data into the database table: images

      //now lets move the uploaded image into the folder images
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

        header('location:index.php');
      }
      else{
        $msg = "There was a problem uploading image";
      }
    }

?>
