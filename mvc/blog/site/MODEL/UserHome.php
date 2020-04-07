<?php
  namespace site\MODEL;
?>
<?php
  /**
  * Model file for database fetching of user blogs for user home page.
  */
  class UserHome {
    /**
    * Function to show blog of uid --> user.
    *
    * @param [int] $user
    * @return mixed
    */
    function home($user) {		
      $conn = mysqli_connect("localhost", "phpmyadmin", "root", "blog");
      $sql = "SELECT * FROM store WHERE user = '$user'";
      $result = $conn->query($sql);
      return $result;
    }
  }
?>