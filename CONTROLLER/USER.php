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
      $user = $_SESSION['user_id'];
      include('MODEL/USERHOME.php');
      $object = new UserHomeModel;
      $object->home($user);
    }
  }
?>