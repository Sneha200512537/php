<?php require_once("header.php") ?>
	<div class="container">
        <form action="#" method="post">
          <p><input class="form-control" type="text" placeholder="Blog Title" name="title" required></p>
          <p><input class="form-control" type="text" placeholder="Blog Information" name="information" required></p>
          <input class="btn btn-light" type="submit" value="Create Blog">
        </form>
		<div class="form-group submit-message">
           <?php
					 	require_once('database.php');
						if(isset($_POST) & !empty($_POST)){
							$title  = $database->sanitize($_POST['title']);
							$information  = $database->sanitize($_POST['information']);
							
							$res    = $database->create_blog($title, $information);
							if($res){
								echo "<p>Successfully Added Blog</p>";
								header("location:blogs.php");
							}else{
								echo "<p>Error!!!</p>";
							}
						}
					 ?>
        </div>
	</div>
<?php require_once("footer.php") ?>