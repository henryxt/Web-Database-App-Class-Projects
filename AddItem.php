<html>
<head>
<title>Henry's Dog Store - Add Item Results</title>
</head>
<body>
<h1>Henry's Dog Store</h1>
<h2>Add Item Results</h2>
  
<?php
  
//create short variable names
$item_num = trim($_POST['item_num']);
$breed = trim($_POST['breed']);
$quantity = trim($_POST['quantity']);
$price = trim($_POST['price']);
$required = array("item_num", "breed", "quantity", "price");
$error = false;
$result2;
  
$db = mysql_connect('localhost', 'cheung', 'henry8160', 'cheung_DogStore');		//procedural connect to (host, user, password, database)
if (!$db) {
      die('YUCK Could not connect to the database, error # ' . mysql_error());
}  else 
      echo 'the mysql_connect succeeded'."<br />"; 

$query = "insert into cheung_DogStore.dog_types values('$item_num','$breed','$quantity','$price')";
$query2 = "select * from cheung_DogStore.dog_types where breed = '$breed'";
$result2 = mysql_query($query2, $db);

foreach($required as $field)
{
	if(empty($_POST[$field]))
	{
		$error = true;
	}
}

if($error)
{
	echo '<b>You have not filled all the items. Please go back and try again.</b>'."<br /><br />";
}
else
{

	if(mysql_num_rows($result2)>0)
	{
		echo '<b>This breed exist in the database already. Please add a new breed.</b>'."<br /><br />";
	}
	else
	{
		$result = mysql_query($query, $db);		//execute the SQL query - returned table is in variable $result
		echo '<b>Item has been added to the store</b>'."<br /><br />";
	}
}

mysql_free_result($result);		//free up the result set
mysql_free_result($result2);
mysql_close($db);				//close the database connection - lets other users in


  
?>
</body>
</html>