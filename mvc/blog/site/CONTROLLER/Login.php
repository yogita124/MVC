<?php
  namespace site\CONTROLLER;
?>
<?php
  use site\MODEL\Login as LoginModel;
  /**
  * Controller file for login.
  */ 
  class Login {
    /**
    * Login page display functions.
    *
    * @return mixed
    */ 
    function login() {
    // Check is already a user is logged in or not.
      if (!isset ($_SESSION['user_id'])) {
        include('blog/site/VIEW/Login.php');
      }
      else {
        header("location: /index.php/User/home");
      }
    }
    /**
    * If not logged in Check back end data of user and validate login.
    *
    * @return mixed
    */ 
    function login_check() {
      $object = new LoginModel;
      $return_value = $object -> login();
      if ($return_value['password'] == $_POST['psw']) {
        $_SESSION['user_id'] = $return_value['user'];
        header("location: /index.php/User/home");
      }
      else {
        echo "ENTER CORRECT PASSWORD \ USERNAME";
        include('VIEW/Login.php');
      }
    }
    /**
    * Function for logout functionality.
    *
    * @return mixed
    */
    function logout() {
      session_destroy();
      echo "logout succesfully";
      echo $_SESSION['user_id'];
      header("location: /");
    }
  }
?>
