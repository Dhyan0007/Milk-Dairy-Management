<?php
$conn = new mysqli("localhost", "root", "", "project");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($requestType == 'POST') {
    $dairy_id = $_POST['dairy_id'];
    $dairy_name = $_POST['dairy_name'];
    $location = $_POST['location'];
    $authorized_person = $_POST['authorized_person'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];



    $query =  "INSERT INTO DAIRY VALUES('" . $dairy_id . "', '" . $dairy_name . "','" . $location . "', '" . $authorized_person . "','" . $email . "', '" . $contact . "')";
    $res = $conn->query($query);
    if ($res) {
?>
        <script>
            alert("Successfully inserted Dairy details");
        </script>
    <?php
    } else {
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
		background-image:url("../images/dairy1.jpg");
		background-size: cover;
		background-attachment: fixed;
	}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAIRY - Add Dairy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>

</body>
<button class="btn btn-success" style="width: 150px; position:fixed; top: 20px; left:20px" onclick="window.location.href='index.php'">BACK HOME</button>

<h1 class="h1 text-center display-4 mt-5"><font color='white'>ADD DAIRY DETAILS</h1>
<div class="container mt-5">
    <form method="POST" action="">
        <div class="form-group">
            <div class="form-group">
                <label for="dairy_id">ENTER DAIRY ID</label>
                <input type="number" class="form-control" id="dairy_id" name="dairy_id" required >
            </div>

        </div>

        <div class="form-group">
            <label for="dairy_name">ENTER DAIRY NAME</label>
            <input type="text" class="form-control" id="dairy_name" name="dairy_name" required>
        </div>
	
	<div class="form-group">
            <label for="location">ENTER DAIRY LOCATION</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>

	<div class="form-group">
            <label for="authorized_person">ENTER DAIRY AUTHORIZED PERSON NAME</label>
            <input type="text" class="form-control" id="authorized_person" name="authorized_person" required>
        </div>

	<div class="form-group">
            <label for="email">ENTER E-MAIL</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>

	<div class="form-group">
            <label for="contact">ENTER CONTACT NUMBER</label>
            <input type="number" class="form-control" id="contact" name="contact" required>
        </div>

        <button type="submit" class="btn btn-secondary w-100 btn-lg">Submit</button>
    </form>
</div>


</html>