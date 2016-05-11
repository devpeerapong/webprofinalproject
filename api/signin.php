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

  require_once("config.php");

  $mysqli = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
  if ($mysqli->connect_error) {
    die();
  }
?>