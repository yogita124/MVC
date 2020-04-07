<?php
  /**
   * Model file for database feeding of site homepage.
   */
	class HomeModel {
		/**
     * Home page all blgo showing function.
     *
     * @return mixed
     */
		function home() {
			$con = mysqli_connect("localhost", "root", "root", "mvc");			
			$sql = "SELECT * FROM blogs order by created_at DESC";
			$result = $con->query($sql);
			include('VIEW/HOME.php');
			$object = new HomeView;
			$object->show($result);
		}
	}
?>