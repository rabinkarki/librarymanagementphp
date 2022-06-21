<?php
 include "dbregister.php";
 $namer="";

 if(isset($_POST['submit'])){
  $sing=dbbregister::getistance();
  if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])) {
   $namer="Only letters and white space allowed";
    return;
  }
  if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
     $emailer="invalid email";
    return;
  }
  
  
 } 
 ?>



<!DOCTYPE html>
<html>
<head>

<title> CSS Login Screen Tutorial </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
<style>
	 header .header{
    background-color: #fff;
    height: 100px;
  }
	.form {
		position: relative;
    z-index: 2;
    background: #FFFFFF;
    max-width: 660px;
	height:650px;
	margin: 50px auto 25px 100px;
    padding: 80px;
    text-align: center;
    box-shadow: 0 0 20px 0 red, 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }
  .form .form-group input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 10px;
    box-sizing: border-box;
    font-size: 14px;
  }
  .form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background-color: #328f8a;
    background-image: linear-gradient(45deg,#328f8a,#08ac4b);
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
  }
  body {
    background-color: #328f8a;
    background-image: linear-gradient(45deg,#328f8a,#08ac4b);
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
.login-page {
    width: 660px;
    padding: 8% 0 0;
	position: relative;
   top: -150px;
   margin: auto;
    
  }
  .login-page .form .register{
    margin-top: -31px;
  margin-bottom: 26px;
  } */
  </style>
	
</head>
<body>
  <body>
  
    
    <div class="login-page">
      <div class="form">
        <div class="register">
          <div class="login-header">
            <h3>REGISTRATION FORM </h3>
            <p>Please enter your credentials to register</p>
          </div>
        </div>
        <form action="" method="POST">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
          <?php 
        echo $namer;
         
           ?> 
				</div>
				<div class="form-group">
					<label for="email">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
          
         
          
    		</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="mobile">Mobile Number:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="address">Address:</label>
					<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
				</div>
				<button type="submit" class="btn btn-primary" name="submit">Register</button>
			</form>
      </div>
    </div>
</body>
</body>
</html>