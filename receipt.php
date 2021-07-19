<?php
	session_start();
		$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
	$s="select MAX(rebill) from receipt";
	$result=mysqli_query($con,$s);
	$bill=mysqli_fetch_array($result);
	$bil=$bill[0]+1;
	$Bil=$bil;
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACCOUNTS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	.rela
		{
			position: relative;
			font-size:35px;
			left:5px;
			top:-1px;
			padding-bottom:3px; 
			text-decoration: underline 2px; 

		}
		.anna
		{
		    position:relative;
		    top:60px;
		    left:90px;
		}
		.amo1
		{
		    font-size:25px;
		}
		.amount
		{
		    font-size:18px;
		    width:150px;
		    position:relative;
		    left:10px;
            background-color:  #FAF0E6;
		}
		.salestable
		{
		    position:relative;
		    top:-20px;
		    height:275px;
		}
		.table tr th 
		{
			padding-left:119px;
			padding-right:119px;
		}
		.w4
		{
		    position:relative;
		    top:18px;
		    left:560px;
		}
		.w6
		{
		    position:relative;
		    top:-21px;
		    left:715px;
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
<label class="rela">RECEIPT :</label>
<form method="post" action="receiphp.php">
<label class="l"> ACCOUNT NAME:</label>
<input type="text" name="cname" class="sname" id="sname" required>
<label class="l1">Date:</label>
<input type="text" name="sdate" class="sdate" id="sdate" required>
<label class="l2"> Bill No:</label>
<input type="text" name="sbill" class="sbill" id="sbill" value="<?php echo $Bil ?>" required>
<div class="anna">
<label class="amo1">AMOUNT:</label>
<input type="text" name="amount" class="amount" id="samo"  required>
</div>
<br>
<input type="submit" name="but" class="w4" id="savesale" value="SAVE" onclick="this.form.target='_blank';" >

</form>
<input type="button" class="w5" id="addsale" value="ADD">
<input type="button" class="w6" id="cancelsale" value="REFRESH">

<br>
<br>
<br>
<div class="salestable"> 
	<table class="table" id='table'>
	  	<thread class="thread">
			<tr>
				<th>ACCOUNT NAME</th>
				<th>DATE</th>
				<th>BILL NO</th>
				<th>Amount</th>
			</tr>
	  	</thread>
	<tbody class="tbody" id="tbody">
		
</tbody>
	</table>
</div>
<button class="salebrowsebut" id="salebrowsebut">BROWSE</button>
<form method="post" action="recpre.php" name="f1">
	<input type="hidden" name="help" id="help" class="help" value="<?php echo $Bil?>">
	<input type="submit" class="salepre"  id="salepre" value="PRE" onclick="this.form.target='_blank';" >
	<input type="submit" class="salenex" id="salenext" value="NEXT" onclick="f1.action=' '">
	<input type="submit" class="saledel" id="saledel" value="DELETE" onclick="f1.action='RECDE.php';f1.target='_blank';">
</form>

<div class="salebrowse" id="salebrowse">
		<button class="salep"  id="saletop">TOP</button>
		<button class="salep"  id="salebot">BOTT</button>
		<button class="salep"  id="saleedit">EDIT</button>
</div>
	
</div>
<script type="text/javascript">
	da=new Date();
	y=da.getFullYear();
	m=da.getMonth()+1;
	d=da.getDate();
	document.getElementById("sdate").value=y+"/"+m+"/"+d;
	let f=document.getElementById("sname");
	f.addEventListener("keydown",(event) =>{
		if (event.key==="F3")
		{	
			event.preventDefault();
			window.location.href='scname.php';

		}
	});
</script>
<script type="text/javascript">
	let aqa=document.getElementById("savesale");
	aqa.addEventListener('click',()=>
	{
		document.getElementById("saledel").disabled=false;
		setTimeout(funre,1100);

	});
</script>
<script type="text/javascript">
	function funre() 
	{
		document.getElementById("sname").value='';
		document.getElementById("samo").value='';
	}
</script>
<script type="text/javascript">
	document.getElementById("sname").disabled=true;
	document.getElementById("sdate").disabled=true;
	document.getElementById("sbill").disabled=true;
	document.getElementById("samo").disabled=true;
	document.getElementById("savesale").disabled=true;
	document.getElementById("cancelsale").disabled=true;
	document.getElementById("addsale").disabled=false;
	document.getElementById("saledel").disabled=true;
	document.getElementById("salenext").disabled=true;
</script>
<script type="text/javascript">
	let aqa=document.getElementById("savesale");
	aqa.addEventListener('click',()=>
	{
		document.getElementById("saledel").disabled=false;
	});
</script>
<script type="text/javascript">
	let a=document.getElementById("addsale");
	a.addEventListener('click',()=>
	{
		document.getElementById("sname").disabled=false;
		document.getElementById("sdate").disabled=false;
		document.getElementById("sbill").disabled=false;
		document.getElementById("samo").disabled=false;
		document.getElementById("savesale").disabled=false;
		document.getElementById("cancelsale").disabled=false;
		a.disabled=true;
	});
</script>
<script type="text/javascript">
	let c=document.getElementById("cancelsale");
	c.addEventListener('click',()=>{

		window.location.href="receipt.php";
	});
</script>
<script>
let but=document.getElementById("savesale");
but.addEventListener('click',()=>
{
	var sname=document.getElementById("sname").value;
	var amo=document.getElementById("samo").value;
	var billno=document.getElementById("sbill").value;
	var date=document.getElementById("sdate").value;
	if(sname!='' &&  date!='' &&  billno!='' && amo!='' )
	{
		let table=document.querySelector('tbody');
		let templet=`
					<tr>
						<td>${sname}</td>
						<td>${date}</td>
						<td>${billno}</td>
						<td>${amo}</td>
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
	let br=document.getElementById('salebrowsebut');
	br.addEventListener('click',()=>
	{
		if(document.getElementById('salepre').style.visibility='hidden')
		{
			document.getElementById('salepre').style.visibility='visible';
			document.getElementById('salenext').style.visibility='visible';
			document.getElementById('saletop').style.visibility='visible';
			document.getElementById('salebot').style.visibility='visible';
			document.getElementById('saleedit').style.visibility='visible';
			document.getElementById('saledel').style.visibility='visible';
		}
		
	});
</script>
<script type="text/javascript">
	let sp=document.getElementById("saletop");
	sp.addEventListener('click',()=>
	{
		
		window.open("rectopbil.php","_blank");

	});
</script>
<script type="text/javascript">
	let sb=document.getElementById("salebot");
	sb.addEventListener('click',()=>
	{
		
		window.open("recbot.php","_blank");


	});
</script>
<script type="text/javascript">
	let zxqw=document.getElementById("saledel");
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