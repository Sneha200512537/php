<?php require_once("header.php") ?>
        <form action="#" method="post">
          <p><input class="form-control" type="email" placeholder="Your Email" name="email" required></p>
          <p><input class="form-control" type="password" placeholder="Password" name="password" required></p>
          <input class="btn btn-light" type="submit" value="Signin">
        </form>
		<div class="form-group submit-message">
           <?php
					 	require_once('database.php');
						if(isset($_POST) & !empty($_POST)){
							$email  = $database->sanitize($_POST['email']);
							$password  = $_POST['password'];
							$r = $database->login($email, $password);
							if($r) {
								$_SESSION['username'] = $r['first_name'];
								header("location:index.php");
							}else
							{
								echo "<p>Login Failed</p>";
							}
						}
					 ?>
        </div>
<?php require_once("footer.php") ?>