<?php
  /**
   * Model file for database editing of a blog .
   */
	class EditModel {
    /**
     * To show previous content in the form to be edited.
     *
     * @param [int] $value
     * @return mixed
     */
		function edit_show($value) {
			$con = mysqli_connect("localhost", "root", "root", "mvc");
			$sql = "SELECT * FROM blogs WHERE id = '$value'";
			$result = $con->query($sql);
			return $result;
		}
		/**
     * To update the blog with new content.
     *
     * @param [int] $value
     * @return mixed
     */
		function edit($value) {
			// Get values from blog edit form.
			$title = $_POST['title'];
			$usr = $_SESSION['user_id'];
			$img = $_FILES['image']['name'];
			$tmp_img = $_FILES['image']['tmp_name'];
			// Stores the temp name of image.
			$img_locate = "img/" . $img;
			// Locate the image in the folder.
			// Move image to location specified.
			move_uploaded_file($tmp_img,$img_locate);
			$content = $_POST['contents'];
			// SQL queries for updating data.
			$con = mysqli_connect("localhost", "root", "root", "mvc");
			$sql = "UPDATE blogs SET title = '$title', image = '$img_locate', content = '$content' WHERE id = '$value' and username = '$usr'";
			$con->query($sql);
			// Redirect user to user home page.
			header("location: /m2/INDEX.php/user/home");
		}
	}
?>
