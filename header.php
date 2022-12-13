<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog Here</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Blog Here</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=><a href="index.php">Home</a></li>
      <li class=><a href="blogs.php">Blogs</a></li>
	  
	<?php
    if(!empty($_SESSION['username']))
	{
	?>	
      <li class=><a href="registeredUsers.php">Registered Users</a></li>
	<?php
	} ?>
    </ul>
	<?php
    if(empty($_SESSION['username']))
	{
	?>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
    </ul>
	<?php
	}else
	{
		?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
    </ul>
	<?php
	}
	?>
  </div>
</nav>
 