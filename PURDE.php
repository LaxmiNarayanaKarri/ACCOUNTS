<?php
	session_start();
	$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
	$s= $_POST['help'];
	$ss="delete from purchase where pubill='$s'";
	$res=mysqli_query($con,$ss);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	setTimeout(funin,500);
	function funin() 
	{
		self.close();
	}
	
</script>
</body>
</html>