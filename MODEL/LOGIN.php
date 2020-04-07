<?php
  /**
   * Model file for database checking of login.
   */
	class LoginModel {
		/**
     * Funtion for validating login and returning details.
     *
     * @return mixed
     */
		function login() {
			$user = $_POST['uname'];
			$pass = $_POST['psw'];
			$con = mysqli_connect("localhost", "root", "root", "mvc");
			$sql = "SELECT * FROM login WHERE username ='$user' AND password ='$pass'";
			$result = $con->query($sql);
			$row = $result->fetch_assoc();
			return $row;
		}
	}
?>