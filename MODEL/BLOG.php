<?php
  /**
  * Model file for database fetching of single blog.
  */
  class BlogModel {
    /**
    * Funtion to retrive blog of Blog ID --> Value.
    *
    * @param [int] $value
    * @return mixed
    */
    function blog($value) {			
      $conn = mysqli_connect("localhost", "phpmyadmin", "root", "blog");
      $sql = "SELECT * FROM store WHERE id = '$value'";
      $result = $conn -> query($sql);
      $result = ($result -> fetch_assoc());
      if (!empty ($result['title'])) {
        include ('VIEW/BLOG.php');
        $object = new BlogView;
        // Return the results to show function.
        $object -> show($result);
      }
      else {
        include('VIEW/ERROR.html');
      }
    }
  }
?>