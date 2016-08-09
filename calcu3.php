<!DOCTYPE html>
<html>
<head>
<body>
	<title>CalCu 3</title>
	<table width="1500" border="1" cellpadding="3">
	<tr>
	<td bgcolor="white">
	<h1>CalCu 3</h1>
	</td>
	</tr>
	</table>
	<p>
	</p>
	<p></p>
	<form action="calcu3.php" method="post">
	<h4>Add:</h4>
	<td align="center"><input type="text" name="term1" placeholder="Enter first number here.." size="30"></td>
	<h4>+</h4>
	<td align="center"><input type="text" name="term2" placeholder="Enter second number here.." size="30"></td>
	<p></p>
	<h4>Subtract:</h4>
	<td align="center"><input type="text" name="term3" placeholder="Enter first number here.." size="30"></td>
	<h4>-</h4>
	<td align="center"><input type="text" name="term4" placeholder="Enter second number here.." size="30"></td>
	<p></p>
	<h4>Multiply:</h4>
	<td align="center"><input type="text" name="factor1" placeholder="Enter first number here.." size="30"></td>
	<h4>*</h4>
    <td align="center"><input type="text" name="factor2" placeholder="Enter second number here.." size="30"></td>
	<p></p>
	<h4>Divide</h4>
	<td align="center"><input type="text" name="taljare" placeholder="Enter first number here.." size="30"></td>
	<h4>/</h4>
	<td align="center"><input type="text" name="namnare" placeholder="Enter second number here.." size="30"></td>
	<?php
	$term1 = $_POST['term1'];
	$term2 = $_POST['term2'];
	$term3 = $_POST['term3'];
	$term4 = $_POST['term4'];
	$factor1 = $_POST['factor1'];
	$factor2 = $_POST['factor2'];
	$taljare = $_POST['taljare'];
	$namnare = $_POST['namnare'];
	
	if(($term1 == null) && ($term2 == null) && ($term3 == null) && ($term4 == null) && ($factor1 == null) && ($factor2 == null) && ($taljare == null) && ($namnare == null)){}
	else{
		
		echo "<h4>Sum = " . ($term1 + $term2); 
		echo "<h4>Difference = " . ($term3 - $term4);
		echo "<h4>Product = " . ($factor1 * $factor2);
		echo "<h4>Quota = " . ($taljare / $namnare);
	}
	
	?>
	<html>
	<style type="text/css">
	h1{
	color: black;
	font-family: arial, black;
	font-size: 50pt;		
	}
	
	h4{
		color: black;
		font-family: arial, black;
		font-size: 15pt;
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
</body>
</html>
