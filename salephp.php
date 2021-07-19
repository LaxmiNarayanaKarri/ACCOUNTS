<?php
session_start();
	$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
$cname=$_POST['cname'];
$ss="select id from accounts where accname='$cname' ";
$sss=mysqli_query($con,$ss);
$ssss=mysqli_fetch_array($sss);
$s=$ssss[0];
$pname=$_POST['pname'];
$sdate=$_POST['sdate'];
$sbil=$_POST['sbill'];
$bags=$_POST['bags'];
$qty=$_POST['qty'];
$rate=$_POST['rate'];
$nar=$_POST['nar'];
$amount=(int)$rate*(int)$qty;
$reg="insert into sales(sname,sdate,sbill,snar,spname,sbags,sqty,srate,samount,sacid,date) values('$cname','$sdate','$sbil','$nar','$pname','$bags','$qty','$rate','$amount','$s','$sdate')";
mysqli_query($con,$reg);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	
	self.close();
</script>
</body>
</html>