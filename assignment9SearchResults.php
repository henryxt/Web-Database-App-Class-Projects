<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Henry Cheung, College of Staten Island / CUNY -->
<!-- CS dept database server 163.238.35.165 -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <link href="assignment9.css" rel="stylesheet" type="text/css" />
   	  <link href="SpryMenuBarHorizontal2.css" rel="stylesheet" type="text/css" />
<title>Henry Cheung's Dog Store</title>
<script src="SpryMenuBar2.js" type="text/javascript"></script>
</head>

<body>
<div class="wrapper" id="wrap">
  <h2><center>
    <p>&nbsp;</p>
    <p style="font-size:40px"><strong>Henry Cheung's Dog Store</strong></p>
    </center>
  </h2>
  <hr />
  
  <div align="center" id = "menubar">
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><strong><a href="http://163.238.35.165/~cheung/assignment9.php">Home</a></strong></li>
      <li><strong><a href="http://163.238.35.165/~cheung/gallery.php">Gallery</a></strong></li>
      <li><strong><a href="#">About</a></strong></li>
      <li><strong><a href="#">Contact</a></strong></li>
    </ul>
    </div>
      <br />
      <form action="assignment9SearchResults.php" method="post">
    <div align="right">
      <select name="searchtype" style="color: #5991c4; font-weight:bold;">	
        <!--give options for the search -->
        <option value="item_num">Item Number
          <option value="breed">Breed
        </select>
      <input name="searchterm" type="text" size="29" placeholder = "Please Enter Your Search Text" style="color: #5991c4;">
      <input type="submit" name="submit" value="Search" style="color: #5991c4; font-weight:bold;">
    </div>
  </form>
  <hr />
  <div class="banner" id="welcome">
  <p align="center" style="font-size: 40px; color: #FFF;"><strong>Search Results:</strong></p>
    <div class="store" id="storeform">
<center>  
<?php
  $searchtype=$_POST['searchtype'];			  //php variables
  $searchterm=trim($_POST['searchterm']);	  //remove whitespace before & after the search term
  if (!$searchtype || !$searchterm) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }

$db = mysql_connect('localhost', 'cheung', 'henry8160', 'cheung_DogStore');		//procedural connect to (host, user, password, database)

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
	echo "</strong><br />Quantity: ";
	echo $row['quantity'];
	echo "</strong><br />Price: ";
	echo $row['price'];
    echo "</p>";
    }
mysql_free_result($result);		//free up the result set
mysql_close($db);				//close the database connection - lets other users in
?>
</center>
    </div>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
      </div>
    <br />
    <div align="center" style="font-size: 20px; color: #FFF;"><strong>You are vistor number:</strong> <img class="statcounter" src="http://c.statcounter.com/9478172/0/0e0faf17/0/" alt="web analytics"></a>
      
    </div>
    <hr />
    <div class="footer" id="copyright">
      <p align="center" style="font-size:20px"><strong>&copy; 2013 Henry Cheung</strong></p>
    </div>
    <br />
  </div>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryMenuBarDownHover.gif", imgRight:"SpryMenuBarRightHover.gif"});
  </script>
</body>
</html>
