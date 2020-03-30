<!--

  * @file

  * This  file contains The view of the page which shows individual blogs.

-->

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel = 'stylesheet' type = 'text/css' href = '/VIEW/SHOW.css'>
  </head>
  <body>
    <?php
      /**
       * This class shows the individual blogs.
       */
      class BlogView {
        function show($row) {
          echo '<div class = "container-fluid">';
            echo "<div class = 'card'><div class = 'inside'><h1>" . $row['title'] . "</a>
            </h1><div class = 'image fit flush'><img width = 200px; height = 200px src = '/" . $row['image'] . "'></div><br><br><h5>'"
            . $row['content'] . "</h5><br><p style = 'background-color:yellow;width: 39%;
            padding: 2px;'>created by : <u>" . $row['user'] . "</u></p></div>" ;
            if (isset ($_SESSION['user_id'])) {
              echo "<a style = 'float:right;padding-right:10px;' href = /index.php/Delete/delete/" . $row['id'] . "''>DELETE POST</a>";
              echo "<a style = 'float:right;padding-right:10px;' href = '/index.php/Edit/edit/" . $row['id'] . "'>EDIT POST</a>";
            }
            echo "</div><br>";
          }
        }
    ?>
  </body>
</html>
