<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Welling & Thomson debugged and modified by Henry Cheung, College of Staten Island / CUNY -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dog Store Search</title>
</head>
<body>
<h1>Dog Store Results</h1>
<?php
  $searchtype=$_POST['searchtype'];			  //php variables
  $searchterm=trim($_POST['searchterm']);	  //remove whitespace before & after the search term
  if (!$searchtype || !$searchterm) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }

$db = mysql_connect('localhost', 'cheung', 'henry8160', 'cheung_DogStore');		//procedural connect to (host, user, password, database)
if (!$db) {
      die('YUCK Could not connect to the database, error # ' . mysql_error());
}  else 
      echo 'the mysql_connect succeeded'."<br />"; 

$query = "select * from cheung_DogStore.dog_types where ".$searchtype." like '%".$searchterm."%'";	//SQL query uses 'like' to improve chance of a hit
$result = mysql_query($query, $db);		//execute the SQL query - returned table is in variable $result
// note that W&T has this backwards!: $result = mysql_query($db, $query);
$num_results = mysql_num_rows($result);
echo "<p>Number of Breeds found: ".$num_results."</p>";

for ($i=0; $i <$num_results; $i++) {
    $row = mysql_fetch_assoc($result);		//returns a row of the result set as a 1-dim array indexed by attribute names
    echo "<p><strong>".($i+1).". Item Number: ";
    echo $row['item_num'];
    echo "</strong><br />Breed: ";
    echo $row['breed'];
    echo "</p>";
    }
mysql_free_result($result);		//free up the result set
mysql_close($db);				//close the database connection - lets other users in
?>
</body>
</html>