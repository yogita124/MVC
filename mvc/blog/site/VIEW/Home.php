<!--
  * @file
  * This  file contains The home page view.
-->
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel = 'stylesheet' type = 'text/css' href = '/blog/site/VIEW/SHOW.css'>
  </head>
  <body>
    <?php
      echo '<div class = "container-fluid">';
      while ($row = $result->fetch_assoc()) {
        $words = explode(" ", $row['content']);
        echo "<div class = 'card'><div class = 'inside'><h2><a href = /index.php/Blog/blog/" . $row['id'] . ">" . $row['title'] . "</a></h2><h5>";
        if (isset ($words[5])) {
          for ($i = 0; $i < 5; $i++) {
            echo  " " . $words[$i] ;
          }
        echo "...<a href = /index.php/Blog/blog/" . $row['id'] . ">Read more</a></h5>";
        }
        else {
          print_r($row['content']);
        }
        echo "<p style = 'font-size:12px'>created by : <u>" . $row['user'] . "</p></div>" ;
        if (isset ($_SESSION['user_id'])) {
          if ($_SESSION['user_id'] == $row['user']) {
            echo "<a href = '/index.php/Delete/delete/" . $row['id'] . "'>DELETE POST</a></p>";
            echo "<a href = '/index.php/Edit/edit/" . $row['id'] . "'>EDIT POST</a></p> ";
          }
        }
          echo "</div><br>";
      }
    ?>
  </body>
</html>
