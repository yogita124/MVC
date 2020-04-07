<!--

  * @file

  * This  file contains The view of the page which shows individual blogs.

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
    echo "<div class = 'card'><div class = 'inside'><h1>" . $result['title'] . "</a>
    </h1><img width = 200px; height = 200px src = '/" . $result['image'] . "'><br><br><h5>'"
    . $result['content'] . "</h5><br><p>created by : <u>" . $result['user'] . "</u></p></div>" ;
    if (isset ($_SESSION['user_id'])) {
      echo "<a href = /index.php/Delete/delete/" . $result['id'] . "''>DELETE POST</a>";
      echo "<a href = '/index.php/Edit/edit/" . $result['id'] . "'>EDIT POST</a>";
    }
    echo "</div></div><br>";
    ?>
  </body>
</html>
