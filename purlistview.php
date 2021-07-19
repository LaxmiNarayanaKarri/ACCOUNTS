<?php
	session_start();
	$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
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
			font-size: 35px;
			text-decoration: underline 2px;
			top:20px;
		}
		.l2
		{
			position: relative;
			font-size:25px;
			top:92px;
			left:-195px;
		}
		.l3
		{
			position: relative;
			font-size:18px;
			top:90px;
			left:-192px;
		}
		.l4
		{
			position: relative;
			font-size:25px;
			top:95px;
			left:-145px;
		}
		.l5
		{
			position: relative;
			font-size:18px;
			top:94px;
			left:-145px;
		}
		.l6
		{
			position: relative;
			font-size:25px;
			top:155px;
			left:-825px;
		}
		.l7
		{
			position: relative;
			font-size:18px;
			top:155px;
			width: 177px;
			left:-825px;
		}
		.l8
		{
			position: relative;
			font-size:25px;
			top:130px;
			left:570px;
			
		}
		.l9
		{
			position: relative;
			font-size:18px;
			top:130px;
			width: 177px;
			left:580px;
		}
		.l10
		{
			position: relative;
			font-size:25px;
			top:185px;
			left:-185px;
		}
		.l11
		{
			position: relative;
			font-size:18px;
			top:183px;
			left:-185px;
			width:300px;
		}
		.l12
		{
			position: relative;
			font-size:25px;
			top:185px;
			left:-119px;

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
<form method="post" action="purlistviewphp.php">
	<label class="l1">PURCHASE LIST VIEW:</label>
	<label class="l2">FROM DATE:</label>
	<input type="date" class="l3" name="fdate" id="l1" >
	<label class="l4">TO DATE:</label>
	<input type="date" class="l5" name="todate" id="l2">
	<label class="l6">FROM BILL:</label>
	<input type="text" class="l7" name="fbil" id="l3" >
	<br>
	<label class="l8">TO BILL:</label>
	<input type="text" class="l9" name="tobill" id="l4">
	<label class="l10">ACCOUNT NAME:</label>
	<input type="text" name="acname" class="l11" id="l5">
	<input type="submit" name="submit" class="l12" id="l6" onclick="this.form.target='_blank';" >
</form>

<script type="text/javascript">
	
	
let a5=document.getElementById("l6");
a5.addEventListener('click',()=>
{
	var a=document.getElementById("l1").value;
	var a1=document.getElementById("l2").value;
	var a2=document.getElementById("l3").value;
	var a3=document.getElementById("l4").value;
	var a4=document.getElementById("l5").value;
	if( a=='' && a1=='' && a2=='' &&  a3=='' &&  a4=='')
	{

		alert('FILL ATLEAST ONE VALUE');
	}
	setTimeout(funin,2000);
}
)
</script>
<script type="text/javascript">
	function funin() 
	{
		location.reload();
	}
</script>
</body>
</html>