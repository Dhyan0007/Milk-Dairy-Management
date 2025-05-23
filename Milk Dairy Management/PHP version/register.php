<?php
$conn = new mysqli("localhost", "root", "", "project");
if($conn->connect_errno){
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $admin_id = $_POST['admin_id'];
  $password = $_POST['password'];    
  $query =  "INSERT INTO admin VALUES('" . $admin_id . "', '" . $password . "')";
  $data = mysqli_query($conn,$query);
  if ($data) {
    ?>
    <script>
    alert("Details Uploaded Succesfuly")  
    </script>    
    <?php
       header("location: admin.php");  
        }
        else{
            ?>
            <script>
                alert("Error Accoured While Uploading Details")
            </script>
            <?php
            }   
          }                  
     ?>
<html lang="en" dir="ltr">

<head>
  <title> register/Dairy </title>
  <link rel="stylesheet" href="register.css">
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
     
    </header>
    <!-- <br><br><br><br> -->
    <div class="card">
      <div class="container" style="width: 250px; position:fixed; top: 200px; left:600px">
        <h1><font color='white'> Admin Register </h1>     
        <form action="" method="POST" enctype="multipart/form-data">
          <h3>Admin id</h3>
          <input type="text" placeholder="Enter id" name="admin_id" class="field" required>
          <h3>Password</h3>
          <input type="password" placeholder="Enter password" name="password" class="field" required>
  <br><br><input type="submit" value="Done" class="btn">
        </form>               
      </div>
    </div>
  </center>
</body>
</html>