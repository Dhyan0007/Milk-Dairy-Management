<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'project');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form

      $admin_id = mysqli_real_escape_string($db,$_POST['admin_id']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT * FROM admin WHERE admin_id = '$admin_id' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      if ($row) {
          header("location: index.php");
?>

  <?php
      }
      else{
          ?>
          <script>
              alert("Failed to Login");
          </script>
  <?php
      }
  }
  ?>
<html lang="en" dir="ltr">

<head>
  <title> DAIRY </title>
  <link rel="stylesheet" href="index.css">

<style>
	body{
		background-image:url("../images/login.png");
		background-size: cover;
		background-attachment: fixed;
	}
</style>
</head>

<body>
  <center>
   <header>
   <meta http-equiv="Cache-control" content="no-cache">
      
    </header>
    <!-- <br><br><br><br> -->
    <div class="card">
      <div class="container" style="width: 250px; position:fixed; top: 200px; left:600px">
        <h1><font color='white'>Admin Login</h1>
        <form method="POST">
          <h3>Admin id</h3>
          <input type="text" placeholder="Enter id" class="field" name="admin_id" required>
          <h3>Password</h3>
          <input type="password" placeholder="Enter password" class="field" name="password" required>

         <br><br> <input type="submit" value="Login" class="btn">
        </form>
        <div class="pass-link">
          <a href="register.php"><font color='white'>register new admin?</a>
        </div>
      </div>
    </div>
  </center>
</body>
</html>