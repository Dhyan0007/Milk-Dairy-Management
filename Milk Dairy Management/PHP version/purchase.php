<?php
$conn = new mysqli("localhost", "root", "", "project");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($requestType == 'POST') {
    $s_no = $_POST['s_no'];
    $dairy_id = $_POST['dairy_id'];
    $f_id = $_POST['f_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $fat = $_POST['fat'];
    $clr = $_POST['clr'];
    $snf = $_POST['snf'];
    $litre = $_POST['litre'];
    $rate = $_POST['rate'];
    $total = $_POST['total'];   

    $query =  "INSERT INTO PURCHASE VALUES('" . $s_no . "', '" . $dairy_id . "', '" . $f_id . "', '" . $date . "','" . $time . "','" . $fat . "', '" . $clr . "', '" . $snf . "','" . $litre . "', '" . $rate . "', '" . $total . "')";
    $res = $conn->query($query);
    if ($res) {
        if($litre>25){
            ?>

        <script>
            alert("Exceeded 25 Liters...!!! Successfully inserted purchase details");
        </script>
    <?php
        }
        else{
            ?>

            <script>
                alert("Successfully inserted purchase details");
            </script>
        <?php
        }

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
		background-image:url("../images/purchase.webp");
		background-size: cover;
		background-attachment: fixed;
	}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy - Add Purchase</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>

</body>
<button class="btn btn-success" style="width: 150px; position:fixed; top: 20px; left:20px" onclick="window.location.href='index.php'">BACK HOME</button>
<h1 class="h1 text-center display-4 mt-5"><font color='white'>PURCHASE</h1>
<div class="container mt-5">
    <form method="POST" action="">
        <div class="form-group">
            <label for="s_no">ENTER S_NO</label>
            <input type="number" class="form-control" id="s_no" name="s_no" required>
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
            <label for="date">ENTER DATE</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
	 <div class="form-group">
            <label for="time">ENTER TIME</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div>

        <div class="form-group">
            <label for="fat">ENTER FAT</label>
            <input type="float" class="form-control" id="fat" name="fat" required>
        </div>
        <div class="form-group">
            <label for="clr">ENTER CLR</label>
            <input type="float" class="form-control" id="clr" name="clr" required>
        </div>
        <div class="form-group">
            <label for="snf">ENTER SNF</label>
            <input type="float" class="form-control" id="snf" name="snf" required>
        </div>
      
        <div class="form-group">
            <label for="litre">ENTER LITRE</label>
            <input type="float" class="form-control" id="litre" name="litre" required>
        </div>
        <div class="form-group">
            <label for="rate">ENTER MILK RATE</label>
            <input type="float" class="form-control" id="rate" name="rate" required>
        </div>
        <div class="form-group">
            <label for="total">ENTER TOTAL AMOUNT</label>
            <input type="float" class="form-control" id="total" name="total" required>
        </div>


        <button type="submit" class="btn btn-secondary w-100 btn-lg">Submit</button>
    </form>
</div>


</html>