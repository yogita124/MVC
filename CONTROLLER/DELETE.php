<?php
  /**
   * Controller file for delete blog functions.
   */ 
	class DeleteController {
		/**
    * Function to delete blog
    *
    * @param [int] $value
    * @return mixed
    */ 
		function delete($value) {
      // Checks if the user is logged in or not.
      if (isset ($_SESSION['user_id'])) {
			include('MODEL/DELETE.php');
			$obje = new DeleteModel;
      $obje->delete($value);
      }
      else {
        // Shows error 404.
        include('VIEW/ERROR.html');
      }
		}
	}

?>