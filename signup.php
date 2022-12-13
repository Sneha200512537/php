<?php require_once("header.php") ?>
	<div class="container">
        <form action="#" method="post">
          <p><input class="form-control" type="text" placeholder="First Name" name="first_name" required></p>
          <p><input class="form-control" type="text" placeholder="Last Name" name="last_name" required></p>
          <p><input class="form-control" type="email" placeholder="Your Email" name="email" required></p>
          <p><input class="form-control" type="password" placeholder="Password" name="password"  required></p>
          <input class="btn btn-light" type="submit" value="Sign Up">
        </form>
		<div class="form-group submit-message">
           <?php
					 	require_once('database.php');
						if(isset($_POST) & !empty($_POST)){
							$first_name  = $database->sanitize($_POST['first_name']);
							$last_name  = $database->sanitize($_POST['last_name']);
							$email  = $database->sanitize($_POST['email']);
							$password  = $_POST['password'];
							$res    = $database->create_user($first_name, $last_name, $email, $password);
							if($res){
								echo "<p>Successfully Registered</p>";
							}else{
								echo "<p>Failed to register</p>";
							}
						}
					 ?>
        </div>
	</div>
<?php require_once("footer.php") ?>