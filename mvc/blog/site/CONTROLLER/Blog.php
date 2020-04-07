<?php
  namespace site\CONTROLLER;
?>
<?php
  use site\MODEL\Blog as BlogModel;
  /**
  * Controller file for each blog details showing .
  */ 
	class Blog {
		/**
    * Id is the blog id provided by url.
    *
    * @param [int] $id
    * @return mixed
    */ 
		function blog($id) {
			$object = new BlogModel;
      $result = $object -> blog($id); 
      if (isset ($result)) {
        include('blog/site/VIEW/Blog.php');
      }
      else {
        include('blog/site/VIEW/Error.php');
      }
		}
	}
?>