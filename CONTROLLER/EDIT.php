<?php
  /**
  * Controller file for editing blog functions.
  */ 
  class EditController {
    /**
    * Edit page form display, Value is the blog id to be edited.
    *
    * @param [int] $value
    * @return mixed
    */ 
    function edit($value){
      // Checks if the user is logged in or not.
      if (isset ($_SESSION['user_id'])) {
      include('MODEL/EDIT.php');
      $object = new EditModel;
      $result = $object->edit_show($value);
      include('VIEW/EDIT.php');
      $object = new EditView;
      $object->edit($result);
      }
      else {
        // Shows error 404.
        include('VIEW/ERROR.html');
      }
    }
    /**
    * Feed the edited values to database with the blog id --> value.
    *
    * @param [id] $value
    * @return mixed
    */ 
    function edit_feed($value) {
      // Checks if the user is logged in or not.
      if (isset ($_SESSION['user_id'])) {
      include('MODEL/EDIT.php');
      $object = new EditModel;
      $object->edit($value);
      }
      else {
        // Shows error 404.
        include('VIEW/ERROR.html');
      }
    }
  }
?>