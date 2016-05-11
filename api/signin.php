<?php
  if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: /");
  }

  $username = $_POST["username"];
  $password = $_POST["password"];

  echo $username;
  echo $password;
?>