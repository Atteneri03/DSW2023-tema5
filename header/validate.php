<?php
$user = "pepe";
$password = "1234";

if(isset($_POST["user"]) && isset($_POST["password"])){
  if($user == $_POST["user"] && $password == $_POST["password"]){
    header("Location: login.html");
  } else {
    header("Location: logout.html");
  }
}