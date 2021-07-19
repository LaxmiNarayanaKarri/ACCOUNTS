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
			width:140px;
		}
		.b3
		{
			background-color:grey;
			color:black;
			text-decoration: none;
			position: relative;
			top:190px;
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
		.b4
		{
			background-color:grey;
			color:black;
			text-decoration: none;
			position: relative;
			top:190px;
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
<label class="led">LEDGER IN SALE:</label>
<label class="lad">click on any one to continue</label>
<button class="b1"><a href="ledkgs.php" class="a">IN KGS</a></button>
<button class="b2"><a href="ledboth.php" class="a">BOTH KGS AND BAGS</a></button>
<br>
<button class="b3"><a href="ledbags.php" class="a">IN BAGS</a></button>
<button class="b4"><a href="ledsall.php" class="a">FOR ALL CUSTOMERS</a></button>

</body>
</html>