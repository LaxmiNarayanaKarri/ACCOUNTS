<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACCOUNTS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.led
		{
			font-size:45px;
			position: absolute;
			top:90px;
			left:30px;
			z-index: 1;
		}
		.b1
		{
			background-color:grey;
			color:black;
			text-decoration: none;
			position: relative;
			top:150px;
			left:30px;
		}
		.lad
		{
			font-size:30px;
			position: absolute;
			top:170px;
			left:30px;
			z-index: 1;
		}
		.b2
		{
			background-color:grey;
			color:black;
			text-decoration: none;
			position: relative;
			top:150px;
			left:150px;
		}
		.a
		{
			text-decoration: none;
			color:black;
			font-size:30px;
			font-weight:600;

		}
		.a:hover
		{
			color:darkred;
		}
	</style>
</head>
<body>
	<div class="divofhome">
		<nav>
			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="home.php">TRANSACTIONS</a>
					<ul>
						<li><a href="sale.php">SALES</a>
							<ul>
								<li><a href="salelist.php">SALELIST</a></li>
							</ul>
						</li>
						<li><a href="purchase.php">PURCHASE</a>
							<ul>
								<li><a href="purlistview.php">PURCHASELIST</a></li>
							</ul>
						</li>
						<li><a href="salereturn.php">SALESRETURN</a></li>
						<li><a href="purchasereturn.php">PURCHASERETURN</a></li>
						<li><a href="payment.php">PAYMENT</a></li>
						<li><a href="receipt.php">RECEIPT</a></li>
					</ul>
				</li>	
				<li><a href="home.php">MASTER</a>
					<ul>
						<li><a href="account creation.php">ACCOUNTCREATE</a></li>
						<li><a href="product creation.php">PRODUCTCREATE</a></li>
					</ul>
				</li>
				<li><a href="ledger.php">LEDGER</a>
				<li>
				<li><a href="about.php">ABOUT US</a>
				<li>
			</ul>
		</nav>
		
	</div>
<label class="led">LEDGER:</label>
<label class="lad">click on any one to continue</label>
<button class="b1"><a href="leds.php" class="a">LEDGER IN SALE</a></button>
<button class="b2"><a href="ledp.php" class="a">LEDGER IN PURCHASE</a></button>
</body>
</html>