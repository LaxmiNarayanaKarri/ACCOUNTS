<?php
session_start();
$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
if(isset($_POST['acsub']))
{
	$proname=$_POST['accname'];
	$s="select * from product where productname ='$proname' ";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	if($num>=1){
		echo"<script>alert('ProductName already present.');";
		echo"window.location.href='product creation.php';</script>";
	}
	else
	{

		$reg="insert into product(productname) values('$proname')";
		mysqli_query($con,$reg);
		echo"<script>alert('SUCESSFULLY ADDED');";
		echo"window.location.href='product creation.php';</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>ACCOUNTS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.acc
		{
			font-size: 25px;
			position: relative;
			top:100px;
			z-index: 1;


		}
		.accname
		{
			position: relative;
			top:97px;
			left:5px;
			width:300px;
			height:30px;
			font-size: 25px;
			z-index: 1;

		}
		.acsub
		{
			position: relative;
			top:100px;
			left:12px;
			font-size: 25px;
			width:100px;
			height:30px;
			background-color:  #FAF0E6;
			z-index: 1;

		}
		.acc6
		{
			position: relative;
			top:65px;
			left:510px;
			font-size: 25px;
			width:130px;
			height:30px;
			background-color:  #FAF0E6;
			z-index: 1;

		}
		.acc5
		{
			position: relative;
			top:65px;
			left:784px;
			font-size: 25px;
			width:130px;
			height:30px;
			color:red;
			background-color:#FAF0E6;
			z-index: 1;
		}
		.acc1
		{
			position: relative;
			top:40px;
			font-size: 45px;
			z-index: 1;
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
<label class="acc1">PRODUCT CREATION:</label>
<form method="post" >
	<label class="acc">PRODUCT NAME:</label>
	<input type="text" name="accname" id="accname" class="accname" required>
	<input type="submit" name="acsub" id="acsub" class="acsub" value="SAVE" >
</form>
<div>
<input type="button" class="acc5" id="addacc" value="ADD">
<input type="button" class="acc6" id="cancelacc" value="CANCEL" onclick="location.reload()">
</div>
<script type="text/javascript">
	document.getElementById("accname").disabled=true;
	document.getElementById("acsub").disabled=true;
	document.getElementById("addacc").disabled=false;
	document.getElementById("cancelacc").disabled=true;
</script>
<script type="text/javascript">
	let a=document.getElementById("addacc");
	a.addEventListener('click',()=>
	{
		document.getElementById("accname").disabled=false;
		document.getElementById("acsub").disabled=false;
		document.getElementById("cancelacc").disabled=false;
		a.disabled=true;
	});
</script>



</body>
</html>