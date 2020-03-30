<?php
  /**
  * Model file for database feeding of new blog.
  */
  class AddModel {
    /**
    * Data feed function.
    *
    * @return mixed
    */
    function add() {
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
      $sql = "INSERT INTO store (title, image, content, user) VALUES ('$title', '$img_locate', '$content', '$user')";
      $conn->query($sql);
      // Redirect user to user home page after adding  data.
      header("location: /index.php/User/home"); 
    }
  }
?>
