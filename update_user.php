<?php require_once("header.php");

	require_once('database.php');
	$email  = $_GET['email'];
	$res = $database->get_user($email);
	$user  = mysqli_fetch_assoc($res);
	if(isset($_POST) & !empty($_POST)){
		$first_name  = $database->sanitize($_POST['first_name']);
		$last_name  = $database->sanitize($_POST['last_name']);
		$email  = $database->sanitize($_POST['email']);
		$res    = $database->update_user($first_name, $last_name, $email);
		if($res){
			echo "<p>Successfully Updated</p>";
		}else{
			echo "<p>Error</p>";
		}
	}
 ?>
	<div class="container">
        <form action="#" method="post">
          <p><input class="form-control" type="text" placeholder="First Name" name="first_name" value="<?php echo $user['first_name']; ?>" required></p>
          <p><input class="form-control" type="text" placeholder="Last Name" name="last_name" value="<?php echo $user['last_name']; ?>" required></p>
          <p><input class="form-control" type="email" placeholder="Your Email" name="email" value="<?php echo $user['email']; ?>"></p>
          <input class="btn btn-light" type="submit" value="Update User">
        </form>
	</div>
<?php require_once("footer.php") ?>