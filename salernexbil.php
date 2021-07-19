<?php
	session_start();
	$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
	$help= $_POST['help'];
	$bily=$help+1;
	$ss3="select srname from salesr where srbill='$bily'";
	$res3=mysqli_query($con,$ss3);
	$nambi=mysqli_fetch_array($res3);
	while($nambi==[])
	{
		$bily=$bily+1;
		$ss3="select srname from salesr where srbill='$bily'";
		$res3=mysqli_query($con,$ss3);
		$nambi=mysqli_fetch_array($res3);
		
	}
	$ss="select * from salesr where srbill='$bily'";
	$res=mysqli_query($con,$ss);
	$re=mysqli_fetch_row($res);
	$srena=$re[1];
	$srdat=$re[2];
	$srnar=$re[4];
	$ss1="select MAX(srbill) from salesr";
	$res1=mysqli_query($con,$ss1);
	$lea=mysqli_fetch_array($res1);
	$le=$lea[0];
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACCOUNTS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	.head
		{
			position: relative;
			font-size:25px;
			text-decoration: underline;
			top:-2px;
		}
		.salestable
		{
			height:300px;
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
<label class="head">SALES RETURN:</label>
<form method="post" action="salerphp.php">
<label class="l"> Customer Name:</label>
<input type="textbox" name="cname" class="sname" id="sname" value="<?php echo$srena ?>" required>
<label class="l1">Date:</label>
<input type="text" name="sdate" class="sdate" id="sdate" value="<?php echo$srdat ?>" required>
<label class="l2"> Bill No:</label>
<input type="text" name="sbill" class="sbill" id="sbill" value="<?php echo $bily ?>" required>
<br>
<label class="l3">Narration:</label>
<textarea name=" nar" class="nar" id="nar">
</textarea>
<div class="arrange">
<input type="text" name="pname" class="w" id="pname" placeholder="Product name" required>
<input type="text" name="bags" class="w1"  id="bags" placeholder="Bags" required>
<input type="text" name="qty" class="w2" id="qty" placeholder="Quantity" required>
<input type="text" name="rate" class="w3"  id="rate" placeholder="Rate" required>
<input type="submit" name="but" class="w4" id="savesale" value="SAVE" onclick="this.form.target='_blank';" >
<input type="button" class="w6" id="cancelsale" value="CANCEL">
</div>
</form>
<input type="button" class="w5" id="addsale" value="ADD">

<br>
<br>
<br>
<div class="salestable"> 
	<table class="table" id='table'>
	  	<thread class="thread">
			<tr>
				<th>Product Name</th>
				<th>Bags</th>
				<th>Quantity</th>
				<th>Rate</th>
				<th>Amount</th>
		<?php
			$da="select * from salesr where srbill='$bily' ";
			$data=mysqli_query($con,$da);
			while($rows=mysqli_fetch_array($data))
			{
				echo "<tr>";
				echo "<td>";
				echo $rows['srpnames'];
				echo "</td>";
				echo "<td>";
				echo $rows['srbags'];
				echo "</td>";
				echo "<td>";
				echo $rows['srqty'];
				echo "</td>";
				echo "<td>";
				echo $rows['srrate'];
				echo "</td>";
				echo "<td>";
				echo $rows['sramount'];
				echo "</td>";
				echo "</tr>";
			}
		?>

			</tr>
	  	</thread>
	<tbody class="tbody" id="tbody">
</tbody>
	</table>
</div>
<button class="salebrowsebut" id="salebrowsebut">BROWSE</button>
<form method="post" action="salerpre.php" name="f1" >
	<input type="hidden" name="help" class="help" value="<?php echo$bily?>">
	<input type="submit" class="salepre"  id="salepre" value="PRE" onclick="this.form.target='_blank';" >
	<input type="submit"  class="salenex" id="salenext" value="NEXT" onclick="f1.action='salernexbil.php';f1.target='_blank';">
	<input type="submit"  class="saledel" id="saledel" value="DELETE" onclick="f1.action='SALERDE.php';f1.target='_blank';">
</form>
<div class="salebrowse" id="salebrowse">
		<button class="salep"  id="saletop">TOP</button>
		<button class="salep"  id="salebot">BOTT</button>
		<button class="salep"  id="saleedit">EDIT</button>
</div>
<script type="text/javascript">
	document.getElementById("sname").disabled=true;
	document.getElementById("pname").disabled=true;
	document.getElementById("sdate").disabled=true;
	document.getElementById("sbill").disabled=true;
	document.getElementById("bags").disabled=true;
	document.getElementById("qty").disabled=true;
	document.getElementById("rate").disabled=true;
	document.getElementById("savesale").disabled=true;
	document.getElementById("nar").disabled=true;
	document.getElementById("cancelsale").disabled=true;
	document.getElementById("addsale").disabled=true;
</script>
<script type="text/javascript">
	document.getElementById('nar').value="<?php echo$srnar ?>";
</script>
<script type="text/javascript">
	let a=document.getElementById("saleedit");
	a.addEventListener('click',()=>
	{
		document.getElementById("pname").disabled=false;
		document.getElementById("bags").disabled=false;
		document.getElementById("qty").disabled=false;
		document.getElementById("rate").disabled=false;
		document.getElementById("savesale").disabled=false;
		document.getElementById("nar").disabled=false;
		document.getElementById("cancelsale").disabled=false;
		da=new Date();
		y=da.getFullYear();
		m=da.getMonth()+1;
		d=da.getDate();
		document.getElementById("sdate").value=y+"/"+m+"/"+d;
		a.disabled=true;
		a.disabled=true;
		a.disabled=true;
	});
</script>
<script type="text/javascript">
	let c=document.getElementById("cancelsale");
	c.addEventListener('click',()=>{

		window.location.href="salereturn.php";
	});
</script>
<script>
let but=document.getElementById("savesale");
but.addEventListener('click',()=>
{
	var pname=document.getElementById("pname").value;
	var bags=document.getElementById("bags").value;
	var qty=document.getElementById("qty").value;
	var rate=document.getElementById("rate").value;
	var cname=document.getElementById("sname").value;
	var amount=qty*rate;
	if(pname!='' && bags!='' && qty!='' && rate!='' && cname!='' )
	{
		let table=document.querySelector('tbody');
		let templet=`
					<tr>
						<td>${pname}</td>
						<td>${bags}</td>
						<td>${qty}</td>
						<td>${rate}</td>
						<td>${amount}</td>
					</tr>`;
		table.innerHTML=table.innerHTML+templet;
	}
}
)
</script>
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
			document.getElementById('salepre').style.visibility='visible';
			document.getElementById('salenext').style.visibility='visible';
			document.getElementById('saletop').style.visibility='visible';
			document.getElementById('salebot').style.visibility='visible';
			document.getElementById('saleedit').style.visibility='visible';
			document.getElementById('saledel').style.visibility='visible';
</script>

<script type="text/javascript">
	document.getElementById('nar').value="<?php echo$srnar ?>";
</script>
<script type="text/javascript">
	var max="<?php echo$le ?>";
	var prese="<?php echo$bily ?>";
	if(max==prese)
	{
		document.getElementById("salenext").disabled=true;
	}
	else
	{
		document.getElementById("salenext").disabled=false;
	}
</script>
<script type="text/javascript">
	let zxqw=document.getElementById("saledel");
	zxqw.addEventListener('click',()=>
	{
		if(document.getElementById("sname").value!='')
		{
			setTimeout(funin,2000);
		}
		else
		{
			alert("enter the Customer Name");
		}
	});
</script>
<script type="text/javascript">
	let sb=document.getElementById("salebot");
	sb.addEventListener('click',()=>
	{
		
		window.open("salerbot.php","_blank");
		self.close();

	});
</script>
<script type="text/javascript">
	let sp=document.getElementById("saletop");
	sp.addEventListener('click',()=>
	{
		
		window.open("salertop.php","_blank");
		self.close();

	});
</script>
<script type="text/javascript">
	let prere=document.getElementById("salepre");
	prere.addEventListener('click',()=>
	{
		self.close();
	});
</script>
<script type="text/javascript">
	let prere3=document.getElementById("salenext");
	prere3.addEventListener('click',()=>
	{
		self.close();
	});
</script>
</body>
</html>