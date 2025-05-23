<?php
$conn = new mysqli("localhost", "root", "", "project");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($requestType == 'POST') {
    $f_id = $_POST['f_id'];
    $dairy_id = $_POST['dairy_id'];
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    $query =  "INSERT INTO FARMER VALUES('" . $f_id . "', '" . $dairy_id . "', '" . $fname . "', '" . $address . "', '" . $contact . "', '" . $email . "')";
    $res = $conn->query($query);
    if ($res) {
?>
        <script>
            alert("Successfully inserted farmer details");
        </script>
<?php
    }
    else{
        ?>
        <script>
            alert("error occured while inserting");
        </script>
<?php
    }
}
?>
<html lang="en">

<head>
<style>
	body{
		background-image:url("../images/farmer.jpg");
		background-size: cover;
		background-attachment: fixed;
	}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy - Add Farmer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>

</body>
<button class="btn btn-success" style="width: 150px; position:fixed; top: 20px; left:20px" onclick="window.location.href='index.php'">BACK HOME</button>
<h1 class="h1 text-center display-4 mt-5"><font color='white'>ADD FARMER DETAILS</h1>
<div class="container mt-5">
    <form method="POST" action="">
        <div class="form-group">
            <label for="f_id">ENTER FARMER ID</label>
            <input type="number" class="form-control" id="f_id" name="f_id" required>
        </div>
        <div class="form-group">
            <label for="dairy_id">ENTER DAIRY ID</label>
            <input type="number" class="form-control" id="dairy_id" name="dairy_id" required>
        </div>

        <div class="form-group">
            <label for="fname">ENTER FARMER NAME</label>
            <input type="text" class="form-control" id="fname" name="fname" required>
        </div>


        <div class="form-group">
            <label for="address">ENTER ADDRESS</label>
            <textarea name="address" class="form-control" id="address" cols="10" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="contact">ENTER PHONE NUMBER</label>
            <input type="number" class="form-control" id="contact" name="contact" required>
        </div>
        
        <div class="form-group">
            <label for="email">ENTER E-MAIL</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        

        </div>
        <button type="submit" class="btn btn-secondary w-100 btn-lg">Submit</button>
    </form>
</div>


</html>