<?php
  namespace site\MODEL;
?>
<?php
  /**
  * Model file for database feeding of site homepage.
  */
  class Home {
  /**
  * Home page all blog showing function.
  *
  * @return mixed
  */
    function home() {			
			$conn = mysqli_connect("localhost", "phpmyadmin", "root", "blog");
      $sql = "SELECT * FROM store";
      $result = $conn -> query($sql);
      return $result;
    }
  }
?>