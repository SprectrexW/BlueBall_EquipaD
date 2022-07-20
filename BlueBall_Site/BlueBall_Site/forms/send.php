<?php
  $name = $POST["name"];
  $email = $POST["email"];
  $subject = $POST["subject"];
  $message = $POST["message"];

  //Database connection
  $connection = new mysqli('localhost','root','','test');
  if($connection->connect_error){
    die('Connection failed: '.$connection->connect_error);
  }
  $query = "INSERT INTO `form`(`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$messsage')"
  $insert = mysqli_query($connection,$query);
  if(!$insert){
    echo "There are some problem";
  }
  
  ?>