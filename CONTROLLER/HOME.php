<?php
  /**
  * Controller file for basic home page.
  */ 
  class HomeController {
    /**
    * Funtion to display home contents.
    *
    * @return mixed
    */ 
    function home() {
      include('MODEL/HOME.php');
      $obje = new HomeModel;
      $obje->home();
    }
  }
?>