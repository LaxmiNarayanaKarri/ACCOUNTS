<?php

		session_start();
		$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');	
		$fd=$_POST['fdate'];
		$td=$_POST['todate'];
		$fb=$_POST['fbil'];
		$tb=$_POST['tobill'];
		$na=$_POST['acname'];
		if($fd=='' && $td=='' && $fb=='' && $tb=='' && $na=='')
		{
			echo"<script>self.close();</script>";
		}
		

		


?>
<!DOCTYPE html>
<html>
<head>
	<title>ACCOUNTS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.salestable
		{
			position: relative;
			top:5px;
			height:570px;
			overflow-y: scroll;
			overflow-x: scroll;
			padding-left:-160px;  
		}
		.table tr th 
		{
			font-size:18px;
			padding:10px;

		}
		td
		{
			padding:0px;
			vertical-align:top; 
		}
		table tr,th,td
		{
			width:300px;
			border:1px solid black;
			padding: 3px;
			text-align:center;
			font-size:20px;
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
<div class="salestable"> 
	<table class="table" id='table'>
	  	<thread class="thread">
			<tr>
				<th>NAME:</th>
				<th>DATE</th>
				<th>BILL</th>
				<th>NARRATION</th>
				<th>Product Name</th>
				<th>Bags</th>
				<th>Quantity</th>
				<th>Rate</th>
				<th>Amount</th>
			</tr>
	  	</thread>
	<tbody class="tbody" id="tbody">
		<?php


		if($td=='')
		{
			$zs="select max(pudate) from purchase";
			$zresult=mysqli_query($con,$zs);
			$zbill=mysqli_fetch_array($zresult);
			$td=$zbill[0];
		}
		if($tb=='')
		{
			$sqw="select max(pubill) from purchase";
			$qresult=mysqli_query($con,$sqw);
			$qsbill=mysqli_fetch_array($qresult);
			$tb=$qsbill[0];
		}
		if($fd=='')
		{
			$s2="select max(pudate) from purchase";
			$eresult=mysqli_query($con,$s2);
			$esbill=mysqli_fetch_array($eresult);
			$fd=$esbill[0];
		}
		if($fb=='')
		{
			$s3="select min(pubill) from purchase";
			$wresult=mysqli_query($con,$s3);
			$wsbill=mysqli_fetch_array($wresult);
			$fb=$wsbill[0];
		}

		if($na=='')
			{
				$da="select * from purchase where pudate between '$fd' and '$td' and pubill between '$fb' and '$tb'";

			}

			if($na!='')
			{
				$da="select * from purchase where pudate between '$fd' and '$td'  and pubill between '$fb' and '$tb' and puname='$na' ";
			}
			$data=mysqli_query($con,$da);
			while($rows=mysqli_fetch_array($data))
			{
				echo "<tr>";
				echo "<td align='left'>";	
				echo $rows['puname'];
				echo "</td>";
				echo "<td>";
				echo $rows['pudate'];
				echo "</td>";
				echo "<td>";
				echo $rows['pubill'];
				echo "</td>";
				echo "<td>";
				echo $rows['punar'];
				echo "</td>";
				echo "<td>";
				echo $rows['puproductname'];
				echo "</td>";
				echo "<td>";
				echo $rows['pubags'];
				echo "</td>";
				echo "<td>";
				echo $rows['puqty'];
				echo "</td>";
				echo "<td>";
			    echo $rows['purate'];
			    echo "</td>";
				echo "<td>";
			    echo $rows['puamount'];
			    echo "</td>";
				echo "</tr>";
			}
			
		?>	
	</tbody>
	</table>
</div>


</body>
</html>