<?php
  /**
  * Model file for database editing of a blog .
  */
  class EditModel {
    /**
    * To show previous content in the form to be edited.
    *
    * @param [int] $value
    * @return mixed
    */
    function edit_show($value) {
			$conn = mysqli_connect("localhost", "phpmyadmin", "root", "blog");
      $sql = "SELECT * FROM store WHERE id = '$value'";
      $result = $conn -> query($sql);
      return $result;
    }
    /**
    * To update the blog with new content.
    *
    * @param [int] $value
    * @return mixed
    */
    function edit($value) {
			$conn = mysqli_connect("localhost", "phpmyadmin", "root", "blog");
      $user = $_SESSION['user_id'];
      $content = $_POST['contents'];
      // To fetch data from submited data.
      $title = $_POST['title'];
      // Store name of image in img.
      $img = $_FILES['image']['name'];       
      // Stores the temp name of image.
      $tmp_img = $_FILES['image']['tmp_name']; 
      // Locate the image in the folder
      $img_locate = "image/" . $img;        
      // To move image to the specified folder.
      move_uploaded_file($tmp_img, $img_locate);            
      // Show image on screen.   
      echo "<br><img src = '$img_locate' height = 200 width = 200>";    
      // Main sql queries to be executed.
      $sql = "UPDATE store SET title = '$title', image = '$img_locate', content = '$content' WHERE id = '$value' and user = '$user'";
      $conn->query($sql);
      // Redirect user to user home page.
      header("location: /index.php/User/home");
    }
  }
?>
