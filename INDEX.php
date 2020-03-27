<!--

  * @file

  * This  file contains The basic structure used to call amd implement mvc architecture.

-->

​<!-- Bootstrap CDN -->
<link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin = "anonymous">
<?php
	// Default values of controller and function.
	$controller = 'home';
	$function = 'home';
	// To fetch url and get individual parameters from url.
	$url = $_SERVER['REQUEST_URI'];
	$url_values = explode("/", $url);
	// Check if parameters exist in url.
	if (isset ($url_values[3]) && $url_values[3] != '') {
		$controller = $url_values[3];
	}
	if (isset ($url_values[4]) && $url_values[4] != '') {
		$function = $url_values[4];
	}
	if (isset ($url_values[5]) && $url_values[5] != '') {
		$id = $url_values[5];
	}
	// Start session and include header for each page.
	session_start();
	include('HEADER.php');
	echo "<br><br>";
	// Include Controller files and call objects for specified function.
	include('CONTROLLER/' . $controller . '.php');
	$class = $controller . 'Controller';
	$object = new $class;
	// Check if ID parameter has a value.
	if (isset ($id)) {
		$object->$function($id);
	}
	else {
		$object->$function();
	}
?>
