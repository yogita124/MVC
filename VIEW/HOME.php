<!--

  * @file

  * This  file contains The home page view.

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
       * Class that shows the home view.
       */
      class HomeView {
        function show($result) {
          echo '<div class = "row container mx-auto">';
          while ($row = $result->fetch_assoc()) {
            $words = explode(" ", $row['content']);
            echo "<div class = 'card'><div class = 'inside'><h2><a href = /m2/INDEX.php/blog/blog/" . $row['id'] . ">" . $row['title'] . "</a></h2><h5>";
            for ($i = 0; $i < 5; $i++) {
              echo  " " . $words[$i] ;
            }
            echo "...<a href = /m2/index.php/blog/blog/" . $row['id'] . ">Read more</a></h5>";
            echo "<p style = 'font-size:12px'>created by : <u>" . $row['username'] . "</u> --- created at : " . $row['created_at'] . "</p></div>" ;
            if ($_SESSION['uid'] == $row['username']) {
              echo "<a style = 'float:right;padding-right:10px;' href = '/m2/INDEX.php/delete/delete/" . $row['id'] . "'>DELETE POST</a></p>";
              echo "<a style = 'float:right;padding-right:10px;' href = '/m2/INDEX.php/edit/edit/" . $row['id'] . "'>EDIT POST</a></p> ";
            }
            echo "</div><br>";
          }
        }
      }
    ?>
  </body>
</html>
