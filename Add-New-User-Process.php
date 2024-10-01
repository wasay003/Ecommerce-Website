<?php
include ('dbcon.php');
require('session_include.php'); 

if(isset($_POST['Add-New-User'])){

   $Email = $_POST['Email'];
   $Password = $_POST['Password'];
   $Admin = $_POST['Admin'];
   

  if((empty($Email)) || empty($Password)){
 
    header("Location:Add-New-User.php?error=emptyfields");
   
        exit();
  }
  
  $query = "insert into `users` (`Email`, `password`, `Admin`) values ('$Email', '$Password', '$Admin')";
  $result = mysqli_query($connection,$query);

  if(!$result){
    die("Query failed");
  }
  else{
    header('location:admin_panel.php');
  }




}











?>