<?php
  /**
   * Model file for database feeding of new blog.
   */
	class AddModel {
		/**
     * Data feed function.
     *
     * @return mixed
     */
		function add() {
			// To fetch data from submited form.
			$title = $_POST['title'];
			$image = $_POST['image'];
			$target_dir = "image/";
			$user = $_SESSION['uid'];
			$file_name = basename($_FILES["image"]["name"]);
      $target_file = $target_dir . $file_name;
      $image_path = $target_file;
			$content = $_POST['contents'];
			// To move image to the specified folder.
			move_uploaded_file($file_name, $target_file);
			// Main sql querries to be executed.
			$con = mysqli_connect("localhost", "root", "root", "mvc");
			$sql = "INSERT INTO blogs (title, image, content, username) VALUES ('$title', '$image_path', '$content', '$user')";
			$con->query($sql);
			// Redirect user to user home page agter adding  data.
			header("location: /m2/INDEX.php/user/home"); 
		}
	}
?>
