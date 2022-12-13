<?php require_once("header.php");

	require_once('database.php');
	$res = $database->get_user();
 ?>
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th>Full Name</th>
				<th>Email</th>				
				<th></th>
			</tr>
			<?php
				while($r = mysqli_fetch_assoc($res)){
			?>
					<tr>
						<td><?php echo $r['first_name'] . " " . $r['last_name']; ?></td>
						<td><?php echo $r['email'] ?></td>
						<td>
							<a class="btn btn-success" href="update_user.php?email=<?php echo $r['email']; ?>">Edit</a>
							<a class="btn btn-danger" href="delete_user.php?email=<?php echo $r['email']; ?>">Delete</a>
						</td>
					</tr>
				<?php
				}
			?>
		</table>
	</div>
</div>
</body>
</html>
