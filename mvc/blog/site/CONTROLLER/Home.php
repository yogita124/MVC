<?php
  namespace site\CONTROLLER;
?>
<?php
  use site\MODEL\Home as HomeModel;
  /**
  * Controller file for basic home page.
  */ 
  class Home {
    /**
    * Funtion to display home contents.
    *
    * @return mixed
    */ 
    function home() {
      $object = new HomeModel;
      $result = $object -> home();
      include('blog/site/VIEW/Home.php');
    }
  }
?>