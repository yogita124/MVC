<?php
  /**
   * Controller file for each blog details showing .
   */ 
	class BlogController {
		/**
     * Id is the blog id provided by url.
     *
     * @param [int] $id
     * @return mixed
     */ 
		function blog($id) {
			include('MODEL/BLOG.php');
			$object = new BlogModel;
			$object->blog($id);
		}
	}
?>