<!--
  * @file
  * This  file contains The view of the page which edits the blog.
-->
<!DOCTYPE html>
  <head>
    <title>edit content to blogs</title>
  </head>
  <body>
    <h2 style = "text-align: center;">Edit Content</h2>
    <?php
        while ($row = $result->fetch_assoc()) {
          echo "<form action = '/index.php/Edit/edit_feed/" . $row['id'] . "' method = 'POST' enctype = 'multipart/form-data'>";
          $words = explode("/", $row['image']);
          echo "<div><label for = 'title'>Title</label>";
          echo "<input type = 'text' placeholder = 'Blog title here' name = 'title' value = '" . $row['title'] . "'></input>";
          echo "</div><div><label for = 'image'>Image</label>";
          echo "<input type = 'file' name = 'image'></input>";
          echo "</div><div><label for = 'contents'>Content</label>";
          echo "<textarea placeholder = 'Please add the blog content here' name = 'contents' cols = 20 rows = 20>" . $row['content'] . "</textarea></div>";
          echo "<p><input type = 'submit' name = 'submit' value = 'Edit Post' /></p>";
        }
    ?>
        </form>
  </body>
</html>
