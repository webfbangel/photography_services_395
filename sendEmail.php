//Contact Form in PHP
<?php
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);


  // Message vars
  $msg = "";
  $msgClass = "";

  if(!empty($name) && !empty($email) && !empty($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      $msg = "Please use a valid email";
      $msgClass = "error";
    }
  } else {
    $msg = "Please fill in all fields";
    $msgClass = "error";
  }


?>