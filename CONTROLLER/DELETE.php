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
			include('MODEL/DELETE.php');
			$obje = new DeleteModel;
			$obje->delete($value);
		}
	}

?>