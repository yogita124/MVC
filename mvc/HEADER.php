<!--

  * @file

  * This  file contains The structure of header used in the project.

-->
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel = "stylesheet" type = "text/css" href = "/blog/site/VIEW/HEADER.css">
  </head>
  <body>
    <div class = "nav">
      <?php
        echo "<a style = 'float:left' href = '/'>HOME</a>";
      if (isset ($_SESSION['user_id'])) {
        echo "<a style = 'float:left' href = '/index.php/User/home'>My Blogs</a>";
        echo "<a style = 'float:left' href = '/index.php/Add/add'>ADD POST</a></p>";
        echo "<a style = 'float:right' href = '/index.php/Login/logout'>LOGOUT</a>";	
      }
      else {
        echo "<a style = 'float:right' href = '/index.php/Login/login'>LOGIN</a>";
      }
      ?>
    </div>
  </body>
</html>
