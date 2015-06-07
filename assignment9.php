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
  <p align="center" style="font-size: 40px; color: #FFF;"><strong>Please place your order here:</strong></p>
    <div class="store" id="storeform">
    <center>
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
  </center>
  <center>
  <FORM ACTION="assignment9OrderResults.php" method=post>
    <table border=0>
      
      <p><b>Please enter the type of dog you want to order and the quantity:</b></p>
     <tr>
     <td>Breed: </td>
     <td><input type = "text" name = "breed"></td>
     </tr>
      <br />
      <tr>
      <td>How many do you want to buy? </td>
      <td><input type = "text" name = "quantity"></td>
      </tr>
      
      
      <td></br>Where did you hear of Henry's Dog Store</td>
        <td><select name="find" style="color: #5991c4; font-weight:bold;">
        <option value = "a">T.V commericial</option>
        <option value = "b">Web Advertisement</option>
        <option value = "c">Google</option>
        <option value = "d">Friend</option>
        </td>
        <tr>
        <td colspan="2" align="center"><br>
        <input type="submit" value="Submit Order" style="color: #5991c4; font-weight:bold;">
        <input type="reset" style="color: #5991c4; font-weight:bold;" />
        </td>
        </tr>
        </table>
  </form>
</center>
    </div>
    <br />
    <div align="center" style="font-size: 20px; color: #FFF;"><strong>You are visitor number:</strong> <img class="statcounter" src="http://c.statcounter.com/9478172/0/0e0faf17/0/" alt="web analytics"></a>
      
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
