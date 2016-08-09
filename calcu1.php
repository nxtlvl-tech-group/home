<!DOCTYPE html>
<html>
<head>
<body>
	<title>CalCu 1</title>
	<table width="1500" border="1" cellpadding="3">
	<tr>
	<td bgcolor="white">
	<h1>CalCu 1</h1>
	</td>
	</tr>
	</table>
	<p>
	</p>
	<p></p>
	<form action="calcu1.php" method="post">
	<h4>Number #1</h4>
	<td align="center"><input type="text" name="number1" placeholder="Enter first number here.." size="30"></td>
	<h4>Number #2</h4>
	<td align="center"><input type="text" name="number2" placeholder="Enter second number here.." size="30"></td>
	<p></p>
	<button type="submit">Calculate!</button>
	<p>
	</p>
	<p></p>
	<?php
	$randNum1 = $_POST['number1'];
	$randNum2 = $_POST['number2'];
	if($randNum1 ==""){	
	}
	else{
	echo "</br>Sum= " . ($randNum1 + $randNum2);
	echo "</br>Difference= " . ($randNum1 - $randNum2);
	echo "</br>Product= " . ($randNum1 * $randNum2);
	echo "</br>Quotient= " . ($randNum1 / $randNum2);
	}
	?>
	</form>
	<form action="
	<body bgcolor="white">
	<style type="text/css">
	h1{
	color: black;
	font-family: arial, black;
	font-size: 50pt;		
	}
	
	h4{
		color: black;
		font-family: arial, black;
		font-size: 20pt;
	}
		h3{
		color: black;
		font-family: arial, black;
		font-size: 15pt;
	}
		a{
		color: black;
		font-family: arial, black;
		font-size: 15pt;
	}
	
	
	
	
	</style>
</head>
</body>
</html>
