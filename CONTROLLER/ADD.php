<?php
  /**
  * Controller file for adding new blog.
  */
	class AddController {
    /**
    * Function to show add form.
    *
    * @return mixed
    */
		function add() {
      // Checks if the user is logged in or not.
      if (isset ($_SESSION['user_id'])) {
       include('VIEW/ADD.php');
      }
      else {
        // Shows error 404.
        include('VIEW/ERROR.html');
      }
		}
    /**
    * Funtion for backend saving data in database.
    *
    * @return mixed
    */
		function add_feed() {
      // Checks if the user is logged in or not.
      if (isset ($_SESSION['user_id'])) {
        include('MODEL/ADD.php');
        $object = new AddModel;
        $object->add();
      }
      else {
        // Shows error 404.
        include('VIEW/ERROR.html');
      }
    }
  }
?>
