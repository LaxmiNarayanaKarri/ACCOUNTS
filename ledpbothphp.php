<?php
	session_start();
	$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
	$cname=$_POST["ac"];
	$fr=$_POST["fd"];
	$to=$_POST["td"];
	$ss="select id from accounts where accname='$cname' ";
	$sss=mysqli_query($con,$ss);
	$ssss=mysqli_fetch_array($sss);
	$s=$ssss[0];
	$zss="select actype from accounts where accname='$cname' ";
	$zsss=mysqli_query($con,$zss);
	$zssss=mysqli_fetch_array($zsss);
	$zs=$zssss[0];
	$total=0;
	$tcre=0;
	$todeb=0;
	if($zs=='customer' or $zssss==[ ] )
	{
	    echo"<script>alert('CANNOT FIND THE SUPPLIER WITH THAT NAME,PLEASE CREATE TO USE.');";
	    echo"self.close();</script>";
	}
	$total=0;
	$tcre=0;
	$todeb=0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACCOUNTS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body
		{
			overflow-x: hidden;
			overflow-y:scroll;
		}
		table
		{
			page-break-inside: auto;
		}
		tr
		{
			page-break-inside: avoid;
			page-break-after: auto;
		}
		thead
		{
			display:table-header-group;
		}
		tfoot
		{
			display:table-footer-group;
		}
		table tr th
		{
			position: relative;
			top:25px;
			left:-22px;
			font-size:20px;

			
		}
		table,tr,td
		{
			position: relative;
			top:28px;
			font-size:20px;
			left:-22px;
			padding-left:-5px;
		 
		}
		.tab
		{

		}
		table,tr,th,td
		{
			padding-left:31px;
			padding-right:29px; 
		}
		.cap
		{
			display: table-caption;
			text-align: center;
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
<br>
<table>
	<caption class="cap" >
		ACCOUNT NAME : <?php echo$cname?> PERIOD : <?php echo$fr ?> to <?php echo$to ?>;
	</caption>

	<thead>
		<tr>
			<th>DATE</th>
			<th>DESCRIPTION</th>
			<th>BILL NO</th>
			<th>PRODUCT</th>
			<th>BAGS</th>
			<th>QUANTITY</th>
			<th>CREDIT</th>
			<th>DEBIT</th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			
		</tr>
	</tfoot> 
	<tbody>
		<?php
			for($i=$fr; $i<=$to;)
			{
				$i=date('Y-m-d',strtotime($i."+1 days"));
				$da="select * from purchase where pudate='$i' and purid='$s' ";
				$data=mysqli_query($con,$da);
				while($rows=mysqli_fetch_array($data))
				{	
					
						echo "<tr>";
						echo "<td >";	
						echo $rows['pudate'];
						echo "</td>";
						echo "<td>";
						echo "TO PURCHASE";
						echo "</td>";
						echo "<td >";	
						echo $rows['pubill'];
						echo "</td>";
						echo "<td >";	
						echo $rows['puproductname'];
						echo "</td>";
						echo "<td >";	
						echo $rows['pubags'];
						echo "</td>";
						echo "<td >";	
						echo $rows['puqty'];
						echo "</td>";
						echo "<td>";
						echo 0;
						echo "</td>";
						echo "<td>";
						echo $rows['puamount'];
						echo "</td>";
						echo "</tr>";
						$todeb=(int)$rows['puamount']+(int)$todeb;
				}
				
				$da1="select * from payment where padate='$i' and payid='$s' ";
				$data1=mysqli_query($con,$da1);
				while($row=mysqli_fetch_array($data1))
				{	
						echo "<tr>";
						echo "<td >";	
						echo $row['padate'];
						echo "</td>";
						echo "<td>";
						echo "BY PAYMENT";
						echo "</td>";
						echo "<td >";	
						echo $row['pabil'];
						echo "</td>";
						echo "<td >";	
						echo  " ";
						echo "</td>";
						echo "<td >";	
						echo  " ";
						echo "</td>";
						echo "<td >";	
						echo " ";
						echo "</td>";
						echo "<td>";
						echo $row['paamount'];
						echo "</td>";
						echo "<td>";
						echo 0;
						echo "</td>";
						echo "</tr>";
						$tcre=(int)$row['paamount']+(int)$tcre;
				}
				$da2="select * from purchaser where purrdate='$i' and purrnid='$s' ";
				$data2=mysqli_query($con,$da2);
				while($ro=mysqli_fetch_array($data2))
				{		
						echo "<tr>";
						echo "<td >";	
						echo $ro['purrdate'];
						echo "<td>";
						echo "BY PURCHASERETURN";
						echo "</td>";
						echo "<td >";	
						echo $ro['purrbill'];
						echo "</td>";
						echo "<td >";	
						echo  " ";
						echo "</td>";
						echo "<td >";	
						echo  " ";
						echo "</td>";
						echo "<td >";	
						echo " ";
						echo "</td>";
						echo "<td>";
						echo $ro['purramount'];
						echo "</td>";
						echo "<td>";
						echo 0;
						echo "</td>";
						echo "</tr>";
						$tcre=(int)$ro['purramount']+(int)$tcre;
				}
			}
					$total=(int)$tcre-(int)$todeb;
					echo "<tr>";
					echo "<td >";
					echo "</td >";
					echo "<td >";
					echo "</td >";
					echo "<td >";
					echo "</td >";
					echo "<td >";
					echo "</td >";
					echo "<td >";
					echo "</td >";
					echo "<td >";
					echo "<hr color='black'>";	
					echo "TOTAL"."=".$total;
					echo "<hr color='black'>";	
					echo "</td>";
					echo "<td >";
					echo "<hr color='black'>";	
					echo "TOTALCREDIT"."=".$tcre;
					echo "<hr color='black'>";	
					echo "</td>";
					echo "<td >";	
					echo "<hr color='black'>";	
					echo "TOTALDEBIT"."=".$todeb;
					echo "<hr color='black'>";	
					echo "</td>";
					echo "</tr>";
				?>
	</tbody>
	</table>

</body>
</html>