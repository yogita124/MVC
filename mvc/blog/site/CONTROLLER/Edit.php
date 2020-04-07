<?php
  namespace site\CONTROLLER;
?>
<?php
 use site\MODEL\Edit as EditModel;
  /**
  * Controller file for editing blog functions.
  */ 
  class Edit {
    /**
    * Edit page form display, Value is the blog id to be edited.
    *
    * @param [int] $value
    * @return mixed
    */ 
    function edit($value){
      // Checks if the user is logged in or not.
      if (isset ($_SESSION['user_id'])) {
      $object = new EditModel;
      $result = $object -> edit_show($value);
      include('blog/site/VIEW/EDIT.php');
      }
      else {
        // Shows error 404.
        include('blog/site/VIEW/Error.php');
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
      $object = new EditModel;
      $object -> edit($value);
      }
      else {
        // Shows error 404.
        include('blog/site/VIEW/Error.php');
      }
    }
  }
?>