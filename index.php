<!DOCTYPE html>
<html>
<head>
<title>Pharmacy Management System</title>
<link rel="stylesheet" type="text/css" href="styles/login.css">

<style>
#content {
height: auto;
}
#main{
height: auto;}
</style>
</head>

<body>

<div id="content">
  <div id="header">

  <h1>Pharmacy Management System</h1>
  </div>
  <div id="main">

    <section class="container">
    
      <div class="login">
        <img src="images/ulg.png">
            <!--<h1><center>Login here</center></h1>-->
          <!-- $message -->
          <form method="post" action="index.php" align="center" >
          
              <p><input type="text" name="username" value="" placeholder="Username" required></p>
              <p><input type="password" name="password" value="" placeholder="Password" required></p>
              <p class="submit"><input type="submit" name="submit" value="Login"></p>
          </form>
        </div>
      </section>
  </div>
  <div id="footer" align="center"> </div>
</div>

</body>
</html>