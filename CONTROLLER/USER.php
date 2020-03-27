<?php
  /**
   * Controller file for user home page.
   */
	class UserController {
		/**
     * Function to display user own blogs page.
     *
     * @return mixed
     */
		function home() {
			$user = $_SESSION['uid'];
			include('MODEL/USERHOME.php');
			$object = new UserHomeModel;
			$object->home($user);
		}
	}
?>