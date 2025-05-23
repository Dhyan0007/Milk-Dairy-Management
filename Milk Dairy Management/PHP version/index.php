<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAIRY - DBMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
	.b > input{
  	background-color: #ff004c;
  	border-radius: 6px;
  	color: #ffffff; 
  	text-align: center;
  	font-family: poppins;
  	font-size: 16px;
  	line-height: 10px;
  	width: 100px;
  	height: 40px;
  	margin-right: -1290px;
	}

	.b > input:hover,:active {
  	background-color: #ff5858;
  	border: 1px solid #ff5858;
  	color: #ffffff;  
	}
		 
	 	 .homepage-buttons{
         	  height: 50px;
           	  font-size: 0.8em;
          	  font-weight: 600;    
       		 }
		body{
		background-image:url("../images/wallpaper.jpg");
		background-size: cover;
		background-attachment: fixed;
		}

    </style>
</head>

<body>
	
</body>
    
    <h1 class="container"><center><font color='white'><br>DAIRY DATABASE</center></h1>
	<div class="b" style="width: 200px; position:fixed; top: 50px; right:20px">
        <input type="button" value="Log out" onclick="window.location.href='admin.php';"/>
        </div>
    <div class="container-fluid mt-1">
        <div class="row mb-1">
   	    <div class="col-4 p-4 text-center" style="width: 200px; position:fixed; top: 120px; left:80px">

                <button class="btn btn-secondary w-75 m-auto btn-1g homepage-buttons" onclick="window.location.href='dairy.php'">DAIRY</button>
            </div>
            <div class="col-4 p-4 text-center" style="width: 200px; position:fixed; top: 190px; left:80px">

                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='farmer.php'">FARMER</button>
            </div>
            <div class="col-4 p-4 text-center" style="width: 200px; position:fixed; top: 260px; left:80px">

                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='purchase.php'">PURCHASE</button>
            </div>

	    <div class="col-4 p-4 text-center" style="width: 200px; position:fixed; top: 330px; left:80px">

                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='receipt.php'">RECEIPT</button>
            </div>
            <div class="col-4 p-4 text-center" style="width: 200px; position:fixed; top: 405px; left:80px">

                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='sales.php'">SALES</button>
            </div>
            <div class="col-4 p-4 text-center" style="width: 200px; position:fixed; top: 480px; left:80px">

                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='payment.php'">PAYMENT</button>
            </div>
            <div class="col-4 p-4 text-center" style="width: 200px; position:fixed; top: 550px; left:80px">

                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='feeds.php'">FEEDS</button>
            </div>
            
           
        </div>

       <div class="row mb-1">
	   <div class="col-2 p-3 text-center" style="width: 200px; position:fixed; top: 135px; right:60px">
		
                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='viewdairy.php'">VIEW DAIRY DETAILS</button>
            </div>

            <div class="col-2 p-3 text-center" style="width: 200px; position:fixed; top: 205px; right:60px">

                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='viewfarmer.php'">VIEW FARMER DETAILS</button>
            </div>
            <div class="col-2 p-2 text-center" style="width: 200px; position:fixed; top: 280px; right:55px">

                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='viewpurchase.php'">VIEW PURCHASE DETAILS</button>
            </div>
	    <div class="col-2 p-3 text-center" style="width: 200px; position:fixed; top: 345px; right:60px">

                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='viewreceipt.php'">VIEW RECEIPT DETAILS</button>
            </div>
            <div class="col-2 p-3 text-center" style="width: 200px; position:fixed; top: 420px; right:60px">

                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='viewsales.php'">VIEW SALES DETAILS</button>
            </div>

            <div class="col-2 p-3 text-center" style="width: 200px; position:fixed; top: 490px; right:60px">

                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='viewpayment.php'">VIEW PAYMENT DETAILS</button>
            </div>

	        <div class="col-2 p-3 text-center" style="width: 200px; position:fixed; top: 560px; right:60px">

                <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='viewfeeds.php'">VIEW FEEDS DETAILS</button>
            </div>

            <div class="col-2 p-3 text-center" style="width: 200px; position:fixed; top: 630px; right:60px">

               <button class="btn btn-secondary w-75 m-auto btn-lg homepage-buttons" onclick="window.location.href='viewpurchaselogs.php'">PURCHASE LOGS</button>
           </div>
            
        </div>
    </div>
</html>