<html>
<head>
<title>Henry's Dog Store - Order Results</title>
</head>
<body>
<h1>Henry's Dog Store</h1>
<h2>Order Results</h2>
  
<?php
echo "<p>Order processed at ";
echo date('H:i, jS F Y');
echo "</p>";
  
//create short variable names
$husky = $_POST['husky'];
$pitbull = $_POST['pitbull'];
$labrador = $_POST['labrador'];
  
echo "<p>Your order is as follows: </p>";
echo $husky. " Husky<br />";
echo $pitbull. " Pitbull<br />";
echo $labrador. " Labrador<br />";
  	
$totalqty = 0;
$totalqty = $husky + $pitbull + $labrador;
echo "Items ordered: ".$totalqty."<br />";
$totalamount = 0.00;
define('HUSKYPRICE', 300);
define('PITBULLPRICE', 200);
define('LABRADORPRICE', 300);
$totalamount = $husky * HUSKYPRICE
+ $pitbull * PITBULLPRICE
+ $labrador * LABRADORPRICE;
echo "Subtotal: $".number_format($totalamount,2)."<br />";
$taxrate = 0.0875; // local sales tax is 8.75%
$totalamount = $totalamount * (1 + $taxrate);
echo "Total including tax: $".number_format($totalamount,2)."<br />";
  
$find=$_POST['find'];
switch($find) {
case "a" :
echo "<p>Heard from T.V Commercial.</p>";
break;
case "b" :
echo "<p>Heard from Web Advertisement.</p>";
break;
case "c" :
echo "<p>Heard from Google.</p>";
break;
case "d" :
echo "<p>Heard from Friend.</p>";
break;
default :
echo "<p>We do not know how this customer found us.</p>";
break;
}
echo "<br>";
if ($totalqty == 0) :
echo "You did not order anything on the previous page!<br />";
exit;
endif;
  
?>
</body>
</html>