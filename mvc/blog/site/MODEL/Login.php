<?php
  namespace site\MODEL;
?>
<?php
  /**
  * Model file for database checking of login.
  */
  class Login {
    /**
    * Funtion for validating login and returning details.
    *
    * @return mixed
    */
    function login() {
      $user = $_POST['uname'];
      $pass = $_POST['psw'];
      $conn = mysqli_connect("localhost", "phpmyadmin", "root", "blog");
      $sql = "SELECT * FROM login WHERE user = '$user' AND password = '$pass'";
      $result = $conn -> query($sql);
      $row = $result -> fetch_assoc();
      return $row;       
    }
  }
?>