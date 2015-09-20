<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Form Submission</title>
	</head>
	<body>
	<?php
		setlocale(LC_MONETARY,"en_US");
		
		$name = $_POST['name'];
		$address = $_POST['address'];
		$address2 = $_POST['address2'];
		$paymeth = $_POST['pay-meth'];
		$unpop = $_POST['unpop'];
		$caramel = $_POST['caramel'];
		$caramelnut = $_POST['caramel-nut'];
		$toffee = $_POST['toffee'];
		$unpoppr = $unpop * 3;
		$caramelpr = $caramel * 3.50;
		$caramelnutpr = $caramelnut * 4.50;
		$toffeepr = $toffee * 5;
		
		$popnum = $unpop + $caramel + $caramelnut + $toffee;
		$total = $unpoppr + $caramelpr + $caramelnutpr + $toffeepr;
	
	echo "<h3>Customer:</h3>";
	echo $name . "<br />";
	echo $address . "<br />";
	echo $address2 . "<br /><br />";
	
	echo "<table border=\"1\" style=\"text-align: center\">
		  <tr>
		    <th>Product</th>
		    <th>Unit Price</th>		
		    <th>Quantity Ordered</th>
		    <th>Item Cost</th>
		  </tr>
		  <tr>
		    <td>Unpopped Popcorn</td>
		    <td>$3.00</td>		
		    <td>{$unpop}</td>
		    <td>$ {$unpoppr}</td>
		  </tr>
		  <tr>
		    <td>Caramel Popcorn</td>
		    <td>$3.50</td>		
		    <td>{$caramel}</td>
		    <td>$ {$caramelpr}</td>
		  </tr>
		  <tr>
		    <td>Caramel Nut Popcorn</td>
		    <td>$4.50</td>		
		   <td>{$caramelnut}</td>
		   <td>$ {$caramelnutpr}</td>
		  </tr>
		  <tr>
		    <td>Toffee Nut Popcorn</td>
		    <td>$5.00</td>		
		    <td>{$toffee}</td>
		    <td>$ {$toffeepr}</td> 
		  </tr>
		</table><br/>";
	
	if (isset($paymeth) && $paymeth=="visa") 
		$paymeth = "Visa";
	if (isset($paymeth) && $paymeth=="mc") 
		$paymeth = "MasterCard";
	if (isset($paymeth) && $paymeth=="disc") 
		$paymeth = "Discover Card";
	if (isset($paymeth) && $paymeth=="cheque") 
		$paymeth = "Cheque";
	
	echo "You ordered " . $popnum . " popcorn items.<br />";
	echo "Your total bill is: $" . $total . "<br />";	
	echo "Your chosen method of payment is: " . $paymeth . "<br />";
	?>
	</body>
</html>
