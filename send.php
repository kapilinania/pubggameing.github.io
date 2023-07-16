<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'connection.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["send"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $duplicate = mysqli_query($conn, "SELECT * FROM register WHERE name = '$name' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken');  window.location.href='index.php' ;  </script>";
   
    
  }
  else{
    
      $query = "INSERT INTO register VALUES('','$name','$email','$password','')";
      mysqli_query($conn, $query);
     
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    if(isset($_POST["send"])){
      $mail = new PHPMailer(true);
  
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'inaniyakapil2000@gmail.com'; //your gmail id
      $mail->Password = 'dkfmtzocomqglunv'; //my gmail app password
      $mail->SMTPSecure = 'ssl';
      $mail->Port = 465;
  
      $mail->setFrom('inaniyakapil2000@gmail.com'); //your gmail id 
      $mail->addAddress($_POST["email"]);
      $mail->isHTML(true);
      $mail->Subject = $_POST["name"];
  
      $varData = "<h1>Thank You For Registration</h1>";
      $img = "<img  src='https://staticg.sportskeeda.com/editor/2021/06/b400a-16226420458969.png' width='600' height='600'/>";
      $uname = "UserName = ".$_POST["email"]. "<br/>";
      $password ="Password = ". $_POST["password"];
      $mail->Body= $_POST["name"].$varData.$img.$uname.$password;
  
      $mail->send();
    }
    echo "<script> alert('Registration Successful Go to Login Now');
    window.location.href='index.php' ; 
      </script>"; 
  }
}



    
  
    
?>