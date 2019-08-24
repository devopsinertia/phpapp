<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" type="text/css" href="css/signupstyle.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/navbar.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">   </head>
  <body>
  <div class="bg">
      <img src="images/bg.jpg" alt="image">
  </div>
 
<div class="container">
<?php include('navbar.php'); ?>
  <div class="form-container">
  <div class="data-container">
    <form action="signupprocess.php" method="post">
        <div class="header"><h1>Signup</h1></div>
      <div class="wrapper1">
  <input type="text" name="firstname" value="" placeholder="Firstname" required>
  <input type="text" name="lastname" value="" placeholder="Lastname">
</div>
<div class="wrapper2">
  <input type="email" name="email" value="" placeholder="Email" required>
  <input type="text" name="phone" value="" placeholder="Phonenumber">
</div>
<div class="wrapper3">
  <input type="text" name="username" value="" placeholder="Username" required>
  <input type="password" name="password" value="" placeholder="Password" required>
</div>
  <div><input type="checkbox" value="" required><span> Accept the terms and policies</span></div>
  <div><input type="submit" value="Sign up"></div>
</form>
</div>
</div>
</div>
</form>
  </body>
</html>
