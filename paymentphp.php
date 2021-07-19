<?php

	session_start();
	$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
	$cname=$_POST['cname'];
	$ss="select id from accounts where accname='$cname' ";
	$sss=mysqli_query($con,$ss);
	$ssss=mysqli_fetch_array($sss);
	$s=$ssss[0];
	$date=$_POST['sdate'];
	$bil=$_POST['sbill'];
	$amount=$_POST['amount'];
	$reg="insert into payment(paname,padate,pabil,paamount,payid) values('$cname','$date','$bil','$amount','$s')";
	mysqli_query($con,$reg);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACCOUNTS</title>
</head>
<body>
<script type="text/javascript">
	setTimeout(funin,700);
	function funin() 
	{
		self.close();
	}
	
</script>
</body>
</html>