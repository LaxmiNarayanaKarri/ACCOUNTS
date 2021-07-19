<?php
	session_start();
	$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
	$zs="select MAX(id) from purchase";
	$zresult=mysqli_query($con,$zs);
	$zbill=mysqli_fetch_array($zresult);
	$zbil=$zbill[0];
	$s="select pubill from purchase where id='$zbil' ";
	$result=mysqli_query($con,$s);
	$bill=mysqli_fetch_array($result);
	$bil=$bill[0];
	$ss="select * from purchase where pubill='$bil'";
	$res=mysqli_query($con,$ss);
	$re=mysqli_fetch_row($res);
	$srena=$re[1];
	$srdat=$re[2];
	$srnar=$re[4];
?>
<!DOCTYPE html>
<html>
<head>
<title>ACCOUNTS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">

		
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
<form method="post" action="purphp.php">

<label class="l"> Supplier Name:</label>
<input type="textbox" name="cname" class="sname" id="sname" value="<?php echo$srena ?>" required>
<label class="l1">Date:</label>
<input type="text" name="sdate" class="sdate" id="sdate" value="<?php echo$srdat ?>" required>
<label class="l2"> Bill No:</label>
<input type="text" name="sbill" class="sbill" id="sbill" value="<?php echo $bil ?>" required>
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
<input type="button" class="w6" id="cancelsale" value="REFRESH">
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
			</tr>
	  	</thread>
	<tbody class="tbody" id="tbody">
		<?php
			$da="select * from purchase where pubill='$bil' ";
			$data=mysqli_query($con,$da);
			while($rows=mysqli_fetch_array($data))
			{
				echo "<tr>";
				echo "<td>";
				echo $rows['puname'];
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
<button class="salebrowsebut" id="salebrowsebut">BROWSE</button>
<form method="post" action="purpre.php" name="f1" >
	<input type="hidden" name="help" class="help" value="<?php echo$bil?>">
	<input type="submit" class="salepre"  id="salepre" value="PRE" onclick="this.form.target='_blank';" >
	<input type="submit"  class="salenex" id="salenext" value="NEXT" onclick="f1.action='purnexbil.php';f1.target='_blank';">
	<input type="submit"  class="saledel" id="saledel" value="DELETE" onclick="f1.action='PURDE.php';f1.target='_blank';">
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
	document.getElementById("salenext").disabled=true;
</script>
<script type="text/javascript">
	let a=document.getElementById("saleedit");
	a.addEventListener('click',()=>
	{
		document.getElementById("sname").disabled=false;
		document.getElementById("sdate").disabled=false;
		document.getElementById("sbill").disabled=false;
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
		document.getElementById("sname").value='';
		document.getElementById("nar").value='';
		a.disabled=true;
	});
</script>
<script type="text/javascript">
	let c=document.getElementById("cancelsale");
	c.addEventListener('click',()=>{

		window.location.href="purchase.php";
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
	let sp=document.getElementById("saletop");
	sp.addEventListener('click',()=>
	{
		
		window.open("purtopbill.php","_blank");
		self.close();

	});
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
	function funin() 
	{
		location.reload();
	}
</script>
<script type="text/javascript">
	let sp223=document.getElementById("salepre");
	sp223.addEventListener('click',()=>
	{
		
		self.close();

	});
</script>
<script type="text/javascript">
	let sp2234=document.getElementById("salenext");
	sp2234.addEventListener('click',()=>
	{
		
		self.close();

	});
</script>
</body>
</html>