<?php
  class Database{
    private $connection;
    function __construct(){
      $this->connect_db();
    }
    public function connect_db(){
      $this->connection = mysqli_connect('172.31.22.43', 'Sneha200512537','lK4xJK1ROq','Sneha200512537');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_error());
      }
    }
    public function create_blog($Title, $Information){
      $sql = "INSERT INTO Blogs (blog_title,blog_information) VALUES ('$Title', '$Information')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
        return true;
      }else{
        return false;
      }
    }
	public function create_user($first_name, $last_name, $email, $password){
      $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
        return true;
      }else{
        return false;
      }
    }
	
	public function get_user($email=null){
      $sql = "SELECT * FROM users";
      if($email){
        $sql .= " WHERE email='$email'";
      }
      $res = mysqli_query($this->connection, $sql);
      return $res;
    }
	
	public function update_user($first_name, $last_name, $email){
      $sql = "UPDATE users SET first_name='$first_name', last_name='$last_name' WHERE email='$email'";
      $res = mysqli_query($this->connection, $sql);
      if($res){
        return true;
      }else{
        return false;
      }
    }
	
	public function delete_user($email){
      $sql = "DELETE FROM users WHERE email='$email'";
      $res = mysqli_query($this->connection, $sql);
      if($res){
        return true;
      }else{
        return false;
      }
    }
	
    public function get_blog($id=null){
      $sql = "SELECT * FROM Blogs";
      if($id){
        $sql .= " WHERE blog_id=$id";
      }
      $res = mysqli_query($this->connection, $sql);
      return $res;
    }
	
	
    public function update_blog($Title, $Information, $id){
      $sql = "UPDATE Blogs SET blog_title='$Title', blog_information='$Information' WHERE blog_id=$id";
      $res = mysqli_query($this->connection, $sql);
      if($res){
        return true;
      }else{
        return false;
      }
    }
	
    public function delete_blog($id){
      $sql = "DELETE FROM Blogs WHERE blog_id=$id";
      $res = mysqli_query($this->connection, $sql);
      if($res){
        return true;
      }else{
        return false;
      }
    }
    
	public function login($email, $password) {
		$sql = "SELECT * FROM users where email='$email' and password = '$password';";
		$res = mysqli_query($this->connection, $sql);
		$r   = mysqli_fetch_assoc($res);
		return $r;
	}
	
	
    public function sanitize($var){
      $return = mysqli_real_escape_string($this->connection, $var);
      return $return;
    }
  }
  $database = new Database();
?>
