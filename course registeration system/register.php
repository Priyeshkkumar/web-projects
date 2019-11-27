<html>
<body>

<style>
  .button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.center {
  text-align: center;
  margin: auto;
  width: 30%;
  padding: 10px;

.signin {
  text-align: center;
  text-decoration:none;
}

.card { 
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

</style>

<div class="card center">
  <img src="images/avlogin.png" alt="Avatar" style="width:100%">
  <div class="container">
    <?php
    $username=$_GET['username'];
    echo "<h3><b> Hi " . $username . "</b></h3>"
    ?> 
    <a href="form.php"><button class="button signin" >Register</button></a>
    <a href="formfee.php"><button class="button signin">Pay Fees</button></a>
  </div>
</div>


</body>

</html>