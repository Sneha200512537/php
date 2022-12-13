<?php require_once("header.php") ?>
		<div class="form-group submit-message">
           <?php
					require_once('database.php');
					$id  = $_GET['id'];
					$res = $database->get_blog($id);
					$r   = mysqli_fetch_assoc($res);
						if(isset($_POST) & !empty($_POST)){
							$title  = $database->sanitize($_POST['title']);
							$information  = $database->sanitize($_POST['information']);
							$res    = $database->update_blog($title, $information, $id);
							if($res){
								echo "<p>Successfully Updated Blog</p>";
								header("location:blogs.php");
							}else{
								echo "<p>Error!!!</p>";
							}
						}
					 ?>
        </div>
		<form action="#" method="post">
          <p><input class="form-control" type="text" placeholder="Blog Title" name="title" value="<?php echo $r['blog_title']; ?>" required></p>
          <p><input class="form-control" type="text" placeholder="Blog Information" name="information" value="<?php echo $r['blog_information']; ?>"  required></p>
          <input class="btn btn-light" type="submit" value="Update Blog">
        </form>
<?php require_once("footer.php") ?>