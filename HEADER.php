<!--

  * @file

  * This  file contains The structure of header used in the project.

-->

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel = "stylesheet" type = "text/css" href = "/m2/VIEW/HEADER.css">
  </head>
  <body>
    <div class = "nav">
      <?php
        echo "<a style = 'float:left' href = '/m2/'>HOME</a>";
      if (isset($_SESSION['uid'])) {
        echo "<a style = 'float:left' href = '/m2/INDEX.php/user/home'>My Blogs</a>";
        echo "<a style = 'float:left' href = '/m2/INDEX.php/add/add'>ADD POST</a></p>";
        echo "<a style = 'float:right' href = '/m2/INDEX.php/login/logout'>LOGOUT</a>";	
      }
      else {
        echo "<a style = 'float:right' href = '/m2/LOGIN.php/login/login'>LOGIN</a>";
      }
      ?>
    </div>
  </body>
</html>
