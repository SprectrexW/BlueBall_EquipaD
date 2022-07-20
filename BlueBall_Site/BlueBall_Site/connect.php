<?php
  //Database connection
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost','root','','test1') or die("Connection failed: ".mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $sql = "INSERT INTO `users` (`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
      $query = mysqli_query($conn,$sql);
      if($query){
        header('Location: index.html?msg=success');
      }else{
        echo "Message doesn't sent";
      }
    }
  }
  ?>