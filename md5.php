<?php
error_reporting(0);
if(isset($_POST['btn']))
{
	if($_POST['md5'] == null)
	{
		$result = "Write Something!!";
	}
	else
	{
		$words = $_POST['md5'];
		$statu = md5($words);
		$result = "
		<table>
		<tr>
			<td>
			<b>Original word : </b>$words
			</td>
		</tr>
		<tr>
			<td>
			<b>Md5 form : </b>$statu
			</td>
		</tr>
		<table>
		";
	}
}
?>
<!doctype html>
<html>
<head>
	<title>Md5 Form</title>
	<style>
		body{
			margin:0;
			padding:0px;
			background-color:#ddd;
			font-family:Georgia;
		}
		input{
			width:350px;
			height:40px;
			color:black;
			margin:50px;
			background-color:#ddd;
			text-align:center;
			font-size:16px;
			border-color:#00ffff;
			border-top:0;
			border-right:0;
			border-left:0;
			border-bottom:1;
		}
		button{
			width:250px;
			height:40px;
			color:black;
			background-color:#00ffff;
			border-color:#00f5ff;
			text-align:center;
			font-size:18px;
		}
	</style>
</head>
<body>
<center>
<br />
<font size='7'>Md5 form</font>
<br />
<form method='post'>
<input type='text' name='md5' placeholder='Write anything' autofocus />
<br />
<button name='btn'>CHANGE</button>
<br /><br />
<?php echo"$result"; ?>
</form>
</center>
</body>
</html>
