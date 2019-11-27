<?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
include 'connfile.php';
//$conn->query("INSERT INTO login (username,password) VALUES('$username','$password')");
$result=$conn->query("SELECT * FROM login WHERE username='$username'");

  $row=$result->fetch_assoc();
   $duser=$row['username'];
   $dpass=$row['password']; 
if($result->num_rows!=0)
{ 
   if(($username==$duser)&&(md5($password)==$dpass))
     { 
        echo"<script>
window.location.href='register.php?username=$username'</script>";
     }
   else
     { 
       echo "incorrect passoword";
     } 
 

}
else
{
die("USER DOESNT EXIST !");
}


?>
