<!--
  * @file
  * This  file contains The basic structure used to call amd implement mvc architecture.
-->

​<!-- Bootstrap CDN -->
<link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin = "anonymous">
<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  use site\CONTROLLER\Add;
  use site\CONTROLLER\Blog;
  use site\CONTROLLER\Delete;
  use site\CONTROLLER\Edit;
  use site\CONTROLLER\Home;
  use site\CONTROLLER\Login;
  use site\CONTROLLER\User;

  require_once 'vendor/autoload.php';
  // Default values of controller and function.
  $controller = 'Home';
  $function = 'home';
  // To fetch url and get individual parameters from url.
  $url = $_SERVER['REQUEST_URI'];
  $url_values = explode("/", $url);
  // Check if parameters exist in url.
  if (isset ($url_values[2]) && $url_values[2] != '') {
    $controller = $url_values[2];
  }
  if (isset ($url_values[3]) && $url_values[3] != '') {
    $function = $url_values[3];
  }
  if (isset ($url_values[4]) && $url_values[4] != '') {
    $id = $url_values[4];
  }
  // Start session and include header for each page.
  session_start();
  include('HEADER.php');
  echo "<br><br>";
  // Checks if file exists or not.
  if (file_exists ('blog/site/CONTROLLER/' . $controller . '.php')) {
    // Include Controller files and call objects for specified function.
    $class = "site\CONTROLLER\\" . $controller;
    $object = new $class;
    // Checks if the function exists or not.
    if (method_exists ($object, $function)) {
      // Checks if the function name is blog or the id exists or not.
      if (isset ($id) || $function == "blog") {
      $object -> $function($id);
    }
    else {
      $object -> $function();
   }
  }
  else {
    include('blog/site/VIEW/Error.php');
  }
}
   else {
     include('blog/site/VIEW/Error.php');
   }
?>
