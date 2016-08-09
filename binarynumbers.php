<html>
	<table width="1150" border="0" cellpadding="3">
	<form action="binarynumbers.php" method="post">
		<tr>
		<td>
 		<h1>Binary Numbers</h1>
		</td>
		</tr>
		</table>
	<h2>Decimal number to binary:</h2>
	<td align="center"><input type="text" name="number" placeholder="Enter number here.." width="1150">
	<h2>or</h2>
		<p>			
		</p>
	<h2>Binary number to decimal:</h2>
	<td align="center"><input type="text" name="binary" placeholder="Enter binary number here.." width="1150">
		<p>
			
		</p>
	<button type="submit">Submit</button>
		<p>
			
		</p>
		<a href="binarynumbers.php" style="text-decoration:none">Clear</a>
		</html>
<?php
$number = $_POST['number'];
$binary = $_POST['binary'];
if(($number == null) && ($binary == null)){
echo "";
}
elseif($binary == null){
printf("<h3>The number $number is equal to %b in binary.",$number);
}elseif($number == null){
echo "<h3>The binary number $binary is equal to ".bindec($binary)." in decimal.";
}
elseif(($number != null) && ($binary != null)){
printf("<h3>The number $number is equal to %b in binary.",$number);
echo "<h3>The binary number $binary is equal to ". bindec($binary)." in decimal.";
}

?>
<html>
<style type="text/css">

h1{
text-align: center;
font-family: courier, monospaced;
}
	td{
		background-color:rgb(200,0,0);	
		}
h2{
font-family: courier, monospaced;
}
h2{
font-family: courier, monospaced;
}	
	button{
		font-family: courier, monospaced;
	}
	a{
font-family: courier, monospaced;
		color: black;
}
	
	
</style>
		</html>
