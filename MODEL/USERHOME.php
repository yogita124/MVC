<?php
  /**
   * Model file for database fetching of user blogs for user home page.
   */
	class UserHomeModel {
		/**
     * Function to show blog of uid --> user.
     *
     * @param [int] $user
     * @return mixed
     */
		function home($user) {
			$con = mysqli_connect("localhost", "root", "root", "mvc");			
			$sql = "SELECT * FROM blogs WHERE username = '$user' order by created_at DESC";
			$result = $con->query($sql);
			include('VIEW/HOME.php');
			$object = new HomeView;
			$object->show($result);
		}
	}
?>