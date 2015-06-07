<html>
<head>
<title>Henry's Dog Store - Order Results</title>
</head>
<body>
<h1>Henry's Dog Store</h1>
<h2>Order Results:</h2>
  
<?php
$db = mysql_connect('localhost', 'cheung', 'henry8160', 'cheung_DogStore');		//procedural connect to (host, user, password, database)
  
//create short variable names
$breed = $_POST['breed'];
$quantity = $_POST['quantity'];
$query = "SELECT * FROM cheung_DogStore.dog_types WHERE breed = '$breed'";
$query2 = "UPDATE cheung_DogStore.dog_types SET quantity = quantity - '$quantity' WHERE breed = '$breed'";
$result = mysql_query($query, $db);

echo "<p>Order processed at ";
echo date('H:i, jS F Y');	
echo "</p>";

while($row = mysql_fetch_array($result))
{
	$breed2 = $row['breed'];
	$quantity2 = $row['quantity'];
	$price = $row['price'];
}

$total = $price *  $quantity; 
 
echo "<p><b>Your order is as follows: </b></p>";

if($quantity <= $quantity2)
{
	mysql_query($query2, $db);
	echo 'You ordered ' . $quantity . " " . $breed . "." . "<br/>";
	echo 'Your Total is ' . "$" . $total . "." .  "<br />";
	echo '***Store has been updated after purchase***';

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
	if ($quantity == 0) :
	echo "You did not order anything on the previous page!<br />";
	exit;
	endif;	
}
else if($quantity > $quantity2)
{
	echo 'There is an Insufficient Stock of ' . $breed . '. Please try your order again or wait for sufficient stock.' . "<br />" . "<br />";
	echo '<b><a href="http://163.238.35.165/~cheung/assignment7.php" style="color: #000000">Click Here to Try Your Order Again</a></b>';
}

mysql_free_result($result);
mysql_close($db);  
?>
<?php
$db = mysql_connect('localhost', 'cheung', 'henry8160', 'cheung_DogStore');		//procedural connect to (host, user, password, database)
$query3 = "SELECT * FROM cheung_DogStore.dog_types";
$result2 = mysql_query($query3, $db);

echo "<table border = '1'>
<tr>
<th>Item_Num</th>
<th>Breed</th>
<th>Quantity</th>
<th>Price</th>
</tr>";

while($row2 = mysql_fetch_array($result2))
{
	echo "<tr>";
	echo "<td>" . $row2['item_num'] . "</td>";
	echo "<td>" . $row2['breed'] . "</td>";
	echo "<td>" . $row2['quantity'] . "</td>";
	echo "<td>" . $row2['price'] . "</td>";
	echo "</tr>";
}
echo "</table>";

mysql_free_result($result2);
mysql_close($db);  
?>
</body>
</html>