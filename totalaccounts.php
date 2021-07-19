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
	.stable
{

	width:39%;
	overflow-x: hidden;
	overflow-y: scroll;
	position: absolute;
	left:50%;
	top:50%;
	transform: translate(-50%,-50%);
	box-shadow: 0 10px 100px 25px black;
	background-color:#a9a9a9;
}
.table tr th 
{
	border:0.3px solid #c0c0c0;
	color:#d3d3d3;
	background-color:#2c3e50;
}
.table tr td
{
	border:0.3px solid grey;
}
.table,tr,th,td
{
	font-size:24.4px;
	padding-left:88px;
	padding-right:88px; 
	text-align: center;
	border-collapse: collapse;
}
tr
{
	border:1px black;
}


th
{
	position: sticky;
	top:0;
}
.l2
{
	font-size:40px;
	position:relative;
	left:2px;
	top:2px;
	word-spacing:8px;

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
	<br>
<label class="l2">ALL ACOUNT  NAMES WITH TYPE: </label>
<div class="stable">
	<table class="table">
		<thead>
			<th>NAME</th>
			<th>TYPE</th>
		</thead>
		<tbody>
			<?php
			$s="select * from accounts ";
			$result=mysqli_query($con,$s);
			while ($rows=$result->fetch_assoc()): ?>
				<tr>
					<td><?php echo $rows['accname']?></td>
					<td><?php echo $rows['actype']?></td>
				</tr>
			<?php endwhile; ?>
		<tr>
			<td></td>
			<td></td>
		</tr>
		</tbody>
	</table>
</div>

</body>
</html>