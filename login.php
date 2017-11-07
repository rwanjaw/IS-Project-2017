<?php
require_once 'system/init.php';
session_start();
include 'includes/head.php';
if(isset($_POST['submit'])){
  $user=$_POST['user'];
   $pass=$_POST['password'];
 $sql = "SELECT Name,password,UserType FROM users WHERE Name= '$user' and password = '$pass'";
$featured=$db->query($sql); 
$row=mysqli_fetch_assoc($featured);
if($row){
   $myuser = $row['Name'];
  $mypass = $row['password'];
  $myusertype = $row['UserType'];
  if ($myuser=$user && $mypass=$pass) {
    echo("eere");
    $_SESSION['name'] = $row['Name'];
    echo $_SESSION['name'];
}
 else{
  echo("<p>Please try again</p>");
 }
  }
}


?>
<div class="container">
  <div class="col-md-2">
    
  </div>
  <div class="col-md-8">
    <form action="index.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="user">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>
  <div class="col-md-2">
    
  </div>
</div>
