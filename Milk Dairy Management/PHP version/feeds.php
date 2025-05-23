<?php
$conn = new mysqli("localhost", "root", "", "project");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($requestType == 'POST') {
    $req_id = $_POST['req_id'];
    $dairy_id = $_POST['dairy_id'];
    $f_id = $_POST['f_id'];
    $req_date = $_POST['req_date'];
    $qty = $_POST['qty'];
    $feed_type = $_POST['feed_type'];
    $cost = $_POST['cost'];

    $query =  "INSERT INTO feeds VALUES('" . $req_id . "', '" . $dairy_id . "', '" . $f_id . "', '" . $req_date . "', '" . $qty . "', '" . $feed_type . "', '" . $cost . "')";
    $res = $conn->query($query);
    if ($res) {
?>
        <script>
            alert("Successfully inserted feeds details");
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
		background-image:url("../images/feeds.jpg");
		background-size: cover;
		background-attachment: fixed;
	}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy - Add Feeds</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>

</body>
<button class="btn btn-success" style="width: 150px; position:fixed; top: 20px; left:20px" onclick="window.location.href='index.php'">BACK HOME</button>
<h1 class="h1 text-center display-4 mt-5"><font color='white'> FEEDS</h1>
<div class="container mt-5">
    <form method="POST" action="">
        <div class="form-group">
            <label for="req_id">ENTER REQ ID</label>
            <input type="number" class="form-control" id="req_id" name="req_id" required>
        </div>
        <div class="form-group">
            <label for="dairy_id">ENTER DAIRY ID</label>
            <input type="number" class="form-control" id="dairy_id" name="dairy_id" required>
        </div>

        <div class="form-group">
            <label for="f_id">ENTER FARMER ID</label>
            <input type="number" class="form-control" id="f_id" name="f_id" required>
        </div>
	<div class="form-group">
            <label for="req_date">ENTER DATE</label>
            <input type="date" class="form-control" id="req_date" name="req_date" required>
        </div>

       
        <div class="form-group">
            <label for="qty">ENTER QTY</label>
            <input type="number" class="form-control" id="qty" name="qty" required>
        </div>
        
        <div class="form-group">
            <label for="feed_type">ENTER FEEDS TYPE</label>
            <input type="text" class="form-control" id="feed_type" name="feed_type" required>
        </div>
        
	<div class="form-group">
            <label for="cost">ENTER FEED COST</label>
            <input type="number" class="form-control" id="cost" name="cost" required>
        </div>
        </div>
        <button type="submit" class="btn btn-secondary w-100 btn-lg">Submit</button>
    </form>
</div>


</html>