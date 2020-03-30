<!--
  * @file
  * This  file contains The view structure of the page which adds blog.
-->
<!DOCTYPE html>
  <head>
    <title>Add content to blogs</title>
  </head>
  <body>
    <h2 style="text-align: center;">Add Content</h2>
    <?php echo "<form action = '/index.php/Add/add_feed/' method = 'POST' enctype = 'multipart/form-data'>"; ?>
    <div>
      <label for = 'title'>Title</label>
      <input type = 'text' name = 'title'></input>
    </div>
    <div>
      <label for = 'image'>Image</label>
      <input type = 'file' name = "image"></input>
    </div>
    <div>
        <label for = 'contents'>Content</label>
        <textarea name = 'contents' cols = 10 rows = 10></textarea>
    </div>
    <p><input type = 'submit' name = 'submit' value = 'Add Post' /></p>
    </form>
  </body>
</html>
