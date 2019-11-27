<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title> Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>
   <img src="images/7.gif" alt="logo" align="middle" class="w3-image"  width=100px"><br>
   Log-in</h1><br>
  <form name="login_form" action="retrieval.php" method ="post" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="Submit"  onclick ="returnvalidation();" >
  </form>

  <div class="login-help">
    <a href="signup.php">Register</a> 
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>