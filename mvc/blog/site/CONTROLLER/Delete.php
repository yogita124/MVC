<?php
  namespace site\CONTROLLER;
?>
<?php
  use site\MODEL\Delete as DeleteModel;;
  /**
   * Controller file for delete blog functions.
   */ 
	class Delete {
		/**
    * Function to delete blog
    *
    * @param [int] $value
    * @return mixed
    */ 
		function delete($value) {
      // Checks if the user is logged in or not.
      if (isset ($_SESSION['user_id'])) {
			$object = new DeleteModel;
      $object->delete($value);
      }
      else {
        // Shows error 404.
        include('blog/site/VIEW/Error.php');
      }
		}
	}

?>