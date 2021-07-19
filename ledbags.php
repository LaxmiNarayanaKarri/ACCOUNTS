<?php


?>
<!DOCTYPE html>
<html>
<head>
<title>ACCOUNTS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.l1
		{
			position: relative;
			top:10px;
			font-size:35px;
			text-decoration: underline 1px;
		}
		.l2
		{
			position: relative;
			top:57px;
			font-size:25px;
		}
		.l3
		{
			position: relative;
			top:55px;
			left:98px;
			font-size:18px;

		}
		.l4
		{
			position: relative;
			top:59px;
			left:160px;
			font-size:25px;
		}
		.l5
		{
			position: relative;
			top:57px;
			left:160px;
			font-size:18px;
		}
		.l6
		{
			position: relative;
			top:109px;
			left:90px;
			font-size:25px;
		}
		.l7
		{
			position: relative;
			top:109px;
			left:90px;
			font-size:20px;
		}
		.l8
		{
			position: relative;
			top:109px;
			left:105px;
			font-size:25px;
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
<label class="l1">LEDGER IN SALE BAGS:</label>
<form method="post" action="ledbagsphp.php">
	<label class="l2">FROM:</label>
	<input type="date" name="fd" class="l3" required>
	<label class="l4">TO:</label>
	<input type="date" class="l5" name="td" required>
	<br>
	<label class="l6">ACCOUNT NAME:</label>
	<input type="text" class="l7" name="ac" required>
	<input type="submit"  class="l8" name="gen" id="sub" value="GENERATE" onclick="this.form.target='_blank';" >
</form>
<script type="text/javascript">
	window.addEventListener("keydown",(event)=>
	{
		if(event.which===13)
		{
			event.preventDefault();
		}
	})
</script>
<script type="text/javascript">
	let zxqw=document.getElementById("sub");
	zxqw.addEventListener('click',()=>
	{
		setTimeout(funin,2000);
	});


</script>
<script type="text/javascript">
	function funin() 
	{
		location.reload();
	}
</script>

</body>
</html>