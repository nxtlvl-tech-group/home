<!DOCTYPE html>
<html>
<head>
<body>
	<title>CalCu 2</title>
	<table width="1500" border="1" cellpadding="3">
	<tr>
	<td bgcolor="white">
	<h1>CalCu 2</h1>
	</td>
	</tr>
	</table>
	<p>
	</p>
	<p></p>
	<form action="calcu2.php" method="post">
	<h4>Sum:</h4>
	<td align="center"><input type="text" name="sum" placeholder="Enter sum here.." size="30"></td>
	<h4>Difference:</h4>
	<td align="center"><input type="text" name="difference" placeholder="Enter difference here.." size="30"></td>
	<h4>Product:</h4>
	<td align="center"><input type="text" name="product" placeholder="Enter product here.." size="30"></td>
	<h4>Quota:</h4>
	<td align="center"><input type="text" name="quota" placeholder="Enter quota here.." size="30"></td>
	<p></p>
	<button type="submit">Calculate!</button>
	<p>
	</p>
	<p></p>
	<?php
	$sum = $_POST['sum'];
	$difference = $_POST['difference'];
	$product = $_POST['product'];
	$quota = $_POST['quota'];
if (($sum == null) || ($difference == null) || ($product == null) || ($quota == null)){
echo "<h4>Please input all values.";
} else{
echo "<h4>The numbers are " . (($sum + $difference) / (2)) . " and " . (($sum + $difference) / (2) / ($quota)). ".";
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
