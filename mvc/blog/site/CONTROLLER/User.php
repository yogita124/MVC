<?php
  namespace site\CONTROLLER;
?>
<?php
  use site\MODEL\UserHome as UserHomeModel;

  /**
  * Controller file for user home page.
  */
  class User {
    /**
    * Function to display user own blogs page.
    *
    * @return mixed
    */
    function home() {
      $user = $_SESSION['user_id'];
      $object = new UserHomeModel;
      $result = $object -> home($user);
      include('blog/site/VIEW/Home.php');
    }
  }
?>