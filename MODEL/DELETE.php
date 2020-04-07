<?php
  /**
   * Model file for database connectivity for a blog to be deleted.
   */
	class DeleteModel {
		/**
     * Funtion to delete blog with blog id --> Value.
     *
     * @param [int] $value
     * @return mixed
     */
		function delete($value) {
			$con = mysqli_connect("localhost", "root", "root", "mvc");
			$sql = "DELETE FROM `blogs` WHERE id = '$value'";
			$con->query($sql);
			// Redirect to user home page.
			header("location: /m2/INDEX.php/user/home"); 
		}
	}
?>-
