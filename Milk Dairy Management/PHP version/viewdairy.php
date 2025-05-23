<?php
$conn = new mysqli("localhost", "root", "", "project");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$query = "SELECT * FROM DAIRY";
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
		background-image:url("../images/dairy1.jpg");
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
    <h1 class="h1 text-center display-4 mt-5"><font color='white'>DAIRY DETAILS</h1>
    <div class="container pl-5 pr-5 mt-5">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">DAIRY ID</th>
                    <th scope="col">DAIRY NAME</th>
		    <th scope="col">LOCATION</th>
                    <th scope="col">AUTHORIZED PERSON</th>
		    <th scope="col">E-MAIL</th>
                    <th scope="col">CONTACT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><font color='white'><?php echo $row['dairy_id']; ?></td>
                        <td><font color='white'><?php echo $row['dairy_name']; ?></td>
			<td><font color='white'><?php echo $row['location']; ?></td>
                        <td><font color='white'><?php echo $row['authorized_person']; ?></td>
			<td><font color='white'><?php echo $row['email']; ?></td>
                        <td><font color='white'><?php echo $row['contact']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>