<?php
session_start();
$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
if(isset($_POST['acsub']))
{
	$accname=$_POST['accname'];
	$ty=$_POST['type'];
	$s="select * from accounts where accname ='$accname'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	if($num>=1){
		echo"<script>alert('AccountName already taken.');";
		echo"window.location.href='account creation.php';</script>";
	}
	else
	{

		$reg="insert into accounts(accname,actype) values('$accname','$ty')";
		mysqli_query($con,$reg);
		echo"<script>alert('SUCESSFULLY ADDED');";
		echo"window.location.href='account creation.php';</script>";
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
			left:-286px;
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
		.l9
		{
			position:relative;
			z-index: 5;
			top:160px;
			left:-386px;
			font-size: 25px
			
		}
		.l10
		{
			position:relative;
			z-index: 5;
			width: 220px;
			font-size: 25px;
			top:158px;
			left:-381px;
		
		}
		.accbut
		{
			position: relative;
			font-size: 25px;
			top:278px;
			left:220px;
			background-color:white;
			
		}
		.acclab
		{
			position: relative;
			font-size: 25px;
			top:278px;
			left:200px;
			font-weight:550;

			
		}
		.accan
		{
			text-decoration: none;
			color:red;
			font-size:25px;
			font-weight:600;
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
<label class="acc1">ACCOUNT CREATION:</label>
<form method="post" >
	<label class="acc">ACCOUNT NAME:</label>
	<input type="text" name="accname" id="accname" class="accname" required>
	<label class="l9">TYPE:</label>
	<select class="l10" id="l7" name="type" required>
		<option value="supplier">SUPPLIER</option>
		<option value="customer">CUSTOMER</option>
		<option value="both">BOTH</option>
		
	</select>
	<input type="submit" name="acsub" id="acsub" class="acsub" value="SAVE" >
</form>
<div>
<input type="button" class="acc5" id="addacc" value="ADD">
<input type="button" class="acc6" id="cancelacc" value="CANCEL" onclick="location.reload()">
</div>
<label class="acclab">click here to get total account list:</label>
<button class="accbut"><a href="totalaccounts.php" target="_blank" class="accan">ACCOUNTS LIST</a></button>
<script type="text/javascript">
	document.getElementById("accname").disabled=true;
	document.getElementById("acsub").disabled=true;
	document.getElementById("addacc").disabled=false;
	document.getElementById("cancelacc").disabled=true;
	document.getElementById("l7").disabled=true;
</script>
<script type="text/javascript">
	let a=document.getElementById("addacc");
	a.addEventListener('click',()=>
	{
		document.getElementById("accname").disabled=false;
		document.getElementById("acsub").disabled=false;
		document.getElementById("cancelacc").disabled=false;
		document.getElementById("l7").disabled=false;
		a.disabled=true;
	});
</script>



</body>
</html>