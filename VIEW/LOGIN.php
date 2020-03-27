<!--

  * @file

  * This  file contains The view of the login page.

-->

<!DOCTYPE html>
<html>
<head>
  <meta name = "viewport" content = "width = device-width">
  <link rel = "stylesheet" type = "text/css" href = "/m2/VIEW/LOGIN.css">
</head>
<body>
  <div class = "container">
    <h1>Login Form</h1>
    <br>
    <br>
    <form action = "/m2/INDEX.php/login/login_check" method = "post">
      <input type = "text" placeholder = "Enter Username" name = "uname" required>
      <br>
      <input type = "password" placeholder = "Enter Password" name = "psw" required>
      <br>
      <br>
      <button type = "submit"><b>Login</b></button>
      <br>
    </form>
</body>
</html>
