<!--

  * @file

  * This  file contains The view of the page which shows individual blogs.

-->

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel = 'stylesheet' type = 'text/css' href = '/m2/VIEW/SHOW.css'>
  </head>
  <body>
    <?php
      /**
       * This class shows the individual blogs.
       */
      class BlogView {
        function show($value) {
          echo '<div class = "row container mx-auto">';
          while ($row = $value->fetch_assoc()) {
            echo "<div class = 'card'><div class = 'inside'><h1>" . $row['title'] . "</a>
            </h1><div class = 'image fit flush'><img src = '/m2/" . $row['image'] . "'></div><br><br><h5>"
            . $row['content'] . "</h5><br><p style = 'background-color:yellow;width: 39%;
            padding: 2px;'>created by : <u>" . $row['username'] . "</u> --- created
            at : " . $row['created_at'] . "</p></div>" ;
            if (isset ($_SESSION['uid'])) {
              echo "<a style = 'float:right;padding-right:10px;' href = /m2/INDEX.php/delete/delete/" . $row['id'] . "''>DELETE POST</a>";
              echo "<a style = 'float:right;padding-right:10px;' href = '/m2/INDEX.php/edit/edit/" . $row['id'] . "'>EDIT POST</a>";
            }
            echo "</div><br>";
          }
        }
      }
    ?>
  </body>
</html>
