<?php
  namespace site\MODEL;
?>
<?php
  /**
  * Model file for database connectivity for a blog to be deleted.
  */
  class Delete {
    /**
    * Funtion to delete blog with blog id --> Value.
    *
    * @param [int] $value
    * @return mixed
    */
    function delete($value) {
			$conn = mysqli_connect("localhost", "phpmyadmin", "root", "blog");
      $sql = "DELETE FROM store WHERE id = '$value'";
      $conn -> query($sql);
      // Redirect to user home page.
      header("location: /index.php/User/home"); 
    }
  }
?>
