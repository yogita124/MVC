<?php
  namespace site\CONTROLLER;
?>
<?php
  use site\MODEL\Add as AddModel;
  /**
  * Controller file for adding new blog.
  */
	class Add {
    /**
    * Function to show add form.
    *
    * @return mixed
    */
		function add() {
      // Checks if the user is logged in or not.
      if (isset ($_SESSION['user_id'])) {
       include('blog/site/VIEW/Add.php');
      }
      else {
        // Shows error 404.
        include('blog/site/VIEW/Error.php');
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
        $object = new AddModel;
        $object->add();
      }
      else {
        // Shows error 404.
        include('blog/site/VIEW/Error.php');
      }
    }
  }
?>
