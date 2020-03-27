<?php
  /**
   * Model file for database fetching of single blog.
   */
	class BlogModel {
		/**
     * Funtion to retrive blog of Blog ID --> Value.
     *
     * @param [int] $value
     * @return mixed
     */
		function blog($value) {
			$con = mysqli_connect("localhost", "root", "root", "mvc");			
			$sql = "SELECT * FROM blogs WHERE id = '$value'";
			$result = $con->query($sql);
			include ('VIEW/BLOG.php');
			$object = new BlogView;
			// Return the results to show function.
			$object->show($result);
		}
	}
?>