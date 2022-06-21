<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>libraray</title>
    <link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style>
	#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
			  
  			width: 300px;
  			height: 450px;
			  font-size:20px;
  		}
		  .row{
			  overflow:hidden;
		  }
		 
		  </style>

</head>
<body> 
    <header>
        <h1>Library Management System</h1>
        <div class="text">
            <a href="login.php">
            <input type="submit" name="login" value="login">
</a>
<a href="register.php">  <input type="submit" name="signup" value="Register"></a>
            <input type="submit" name="admin"  value="admin login">
</div>
</header>
<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 8:00 PM</li>
				<li>(Sunday off)</li>
			</ul>
			<br>
			<h5>What we provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peacefull Environment</li>
			</ul>
			
		</div>
		<div class="col-md-8" >
		<img  src="rabin.jpg"  width="1000" height="500" >
		</div>
	</div>
		

</body>
</html>