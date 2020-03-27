<?php
  /**
  * Controller file for adding new blog functions.
  */
	class AddController {
    /**
     * Function to show add form.
     *
     * @return mixed
     */
		function add() {
			include('VIEW/ADD.php');
		}
    /**
     * Funtion for backend saving data in database.
     *
     * @return mixed
     */
		function add_feed() {
			include('MODEL/ADD.php');
			$object = new AddModel;
			$object->add();
		}
	}

?>
