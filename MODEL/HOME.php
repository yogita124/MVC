<?php
  /**
  * Model file for database feeding of site homepage.
  */
  class HomeModel {
  /**
  * Home page all blog showing function.
  *
  * @return mixed
  */
    function home() {			
			$conn = mysqli_connect("localhost", "phpmyadmin", "root", "blog");
      $sql = "SELECT * FROM store";
      $result = $conn -> query($sql);
      include('VIEW/HOME.php');
      $object = new HomeView;
      $object -> show($result);
    }
  }
?>