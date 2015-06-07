<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Henry's Online Dog Store</title>
</head>

<body>
  <h1>Henry's Online Dog Store</h1>
<?php
$db = mysql_connect('localhost', 'cheung', 'henry8160', 'cheung_DogStore');		//procedural connect to (host, user, password, database)
$query = "SELECT * FROM cheung_DogStore.dog_types";
$result = mysql_query($query, $db);

echo "<table border = '1'>
<tr>
<th>Item_Num</th>
<th>Breed</th>
<th>Quantity</th>
<th>Price</th>
</tr>";

while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['item_num'] . "</td>";
	echo "<td>" . $row['breed'] . "</td>";
	echo "<td>" . $row['quantity'] . "</td>";
	echo "<td>" . $row['price'] . "</td>";
	echo "</tr>";
}
echo "</table>"."<br />";
mysql_free_result($result);
mysql_close($db);
?>

<FORM ACTION="orderDog.php" method=post>
<table border=0>

<p><b>Please enter the type of dog you want to order and the quantity:</b></p>
Breed: <input type = "text" name = "breed">
<br />
How many do you want to buy? <input type = "text" name = "quantity">


<td></br>Where did you hear of Henry's Dog Store</td>
<td><select name="find">
	<option value = "a">T.V commericial</option>
	<option value = "b">Web Advertisement</option>
	<option value = "c">Google</option>
	<option value = "d">Friend</option>
</td>
<tr>
<td colspan="2" align="center"><br>
<input type="submit" value="Submit Order">
<input type="reset" />
</td>
</tr>
</table>
</form
</body>
</html>

