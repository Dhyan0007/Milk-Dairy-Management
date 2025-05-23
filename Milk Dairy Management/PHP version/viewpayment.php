<?php
$conn = new mysqli("localhost", "root", "", "project");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$query = "SELECT * FROM payment";
$result = $conn->query($query);
if (!$result) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}
?>
<html lang="en">

<head>
<style>
	
	body{
		background-image:url("../images/payment1.jpg");
		background-size: cover;
		background-attachment: fixed;
	}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Farmer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <button class="btn btn-success" style="width: 150px; position:fixed; top: 20px; left:20px" onclick="window.location.href='index.php'">BACK HOME</button>
    <h1 class="h1 text-center display-4 mt-5"><font color='white'>PAYMENT DETAILS</h1>
    <div class="container pl-5 pr-5 mt-5">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">PAY_NO</th>
		    <th scope="col">FARMER_ID</th>
                    <th scope="col">DAIRY_ID</th>
		    <th scope="col">DATE</th>
		    <th scope="col">AMOUNT</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><font color='white'><?php echo $row['pay_id']; ?></td>
       			<td><font color='white'><?php echo $row['f_id']; ?></td>
			<td><font color='white'><?php echo $row['dairy_id']; ?></td>
                        <td><font color='white'><?php echo $row['date']; ?></td>
			<td><font color='white'><?php echo $row['amount']; ?></td>
                        
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>