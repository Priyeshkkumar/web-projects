<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=date]  {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus ,input[type=date]{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color:  #2196F3;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action='signup.php' method='post' enctype='multipart/form-data'>
  <div class="container">
    <h1>Sign Up</h1>
    <hr>


    <label for="Fullname"><b>Name</b></label>
    <input type="text" placeholder="Enter Fullname" name='fullname' required>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name='username' required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name='password' required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name='rpassword' required>
    
    <label for="dob"><b>Date of Birth</b></label>
    <input type="date" name='date'  required>
    
    <hr>


    <button type="submit" class="registerbtn" onclick ="returnvalidation();">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

<?php
$fullname=filter_input(INPUT_POST,'fullname');
$username=filter_input(INPUT_POST,'username');
$password=md5(filter_input(INPUT_POST,'password'));
$rpassword=md5(filter_input(INPUT_POST,'rpassword'));
$date= date("yy-mm-dd");

include 'connfile.php';
$namecheck=$conn->query("SELECT username FROM login WHERE username='$username'");
if($namecheck->num_rows!=0)
{die("username already exists !");}
if($fullname&&$username&&$password&&$rpassword&&$date)
{
  if($password==$rpassword)
   { 
    if (strlen($password)>6)
    {
     $conn->query("INSERT INTO login VALUES ('$fullname','$username','$password','$date')");
     echo " You have been succesfully registered !";
    }
    else
    { 
     echo"password length must be greater than 6";

    }
   }
  else
   {
    echo "your passwords don't match !";
   }
}
?>

</body>
</html>


