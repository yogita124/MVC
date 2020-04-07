<?php
  /**
   * Controller file for login.
   */ 
	class LoginController {
		/**
     * Login page display functions.
     *
     * @return mixed
     */ 
		function login() {
      // Check is already a user is logged in or not.
			if (!isset ($_SESSION['uid'])) {
				include('VIEW/LOGIN.php');
			}
			else {
				header("location: /m2/INDEX.php/user/home");
			}
		}
		/**
     * If not logged in Check back end data of user and validate login.
     *
     * @return mixed
     */ 
		function login_check() {
			include('MODEL/LOGIN.php');
			$object = new LoginModel;
			if ($return_value['password'] == $_POST['psw']) {
				$_SESSION['user_id'] = $return_value['username'];
				header("location: /m2/INDEX.php/user/home");
			}
			else {
				echo "ENTER CORRECT PASSWORD \ USERNAME";
				include('VIEW/LOGIN.php');
			}
		}
		/**
     * Function for logout functionality.
     *
     * @return mixed
     */
		function logout() {
			session_destroy();
			echo "logout done succesfull";
			echo $_SESSION['uid'];
			header("location: /m2/");
		}
	}
?>
