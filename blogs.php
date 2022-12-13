
<?php require_once('header.php'); 

	if(!empty($_SESSION['username']))
	{
		?>
<div class="container">
&nbsp&nbsp&nbsp&nbsp<a href="create.php" class="btn btn-info">Create Blogs</a>
</hr>
<?php 
	}
	require_once('database.php');
	$res = $database->get_blog();
	while($r = mysqli_fetch_assoc($res)) {
	?>
<div class="container">
	<div class="jumbotron">
		<h1><?php echo $r['blog_title']; ?></h1>      
		<p><?php echo $r['blog_information']; ?></p>
	<?php
	if(!empty($_SESSION['username']))
	{
		?>
	<a class="btn btn-success" href="update.php?id=<?php echo $r['blog_id']; ?>">Edit</a>
	<a class="btn btn-danger" href="delete.php?id=<?php echo $r['blog_id']; ?>">Delete</a></td>
	<?php
	}
	?>
	</div>
</div>
</hr>
	<?php
	}
require_once("footer.php") ?>
</div>