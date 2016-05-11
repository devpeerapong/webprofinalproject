<?php
  session_start();


  if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: /");
  }

  $username = $_POST["username"];
  $password = $_POST["password"];

  echo $username;
  echo $password;

  if($username == "" || $password == "") {
    $_SESSION["flash_message"] = "The username or password can not be empty."
    header("Location: /");
  }
?>