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
      include('MODEL/EDIT.php');
      $object = new EditModel;
      $result = $object->edit_show($value);
      include('VIEW/EDIT.php');
      $object = new EditView;
      $object->edit($result);
    }
    /**
     * Feed the edited values to database with the blog id --> Values.
     *
     * @param [id] $value
     * @return mixed
     */ 
    function edit_feed($value) {
      include('MODEL/EDIT.php');
      $object = new EditModel;
      $object->edit($value);
    }
  }
?>