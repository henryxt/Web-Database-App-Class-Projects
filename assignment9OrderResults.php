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
  <p align="center" style="font-size: 40px; color: #FFF;"><strong>Order Results:</strong></p>
    <div class="store" id="storeform">
    <center>
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
</center>
    </div>
	  
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
