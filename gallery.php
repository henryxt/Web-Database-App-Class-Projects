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

<style type="text/css">
 
h3 {
color: #eee;
font-family: Verdana;
}
 
.thumbnails img {
height: 100px;
border: 4px solid #555;
padding: 1px;
margin: 0 10px 10px 0;
}
 
.thumbnails img:hover {
border: 4px solid #00ccff;
cursor:pointer;
}
 
.preview img {
border: 4px solid #444;
padding: 1px;
height: 250px;
}
</style>

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
  <p align="center" style="font-size: 40px; color: #FFF;"><strong>Gallery of Dogs in Stock:</strong></p>
    <div class="store" id="storeform">

<script>
var prev;
function setPrev(img) {
prev = prev || document.getElementById('preview');
prev.src = img.src;
return false;
}
</script>    
<div class="gallery" align="center">
    <div class="thumbnails">
      <img onmouseover="setPrev(this)" id="img1" src="husky.jpg" title="Husky" alt="Image Not Loaded"/>
      <img onmouseover="setPrev(this)" id="img2" src="pitbull.jpg" title="Pitbull" alt="Image Not Loaded"/>
      <img onmouseover="setPrev(this)" id="img3" src="labrador.jpg" title="Labrador" alt="Image Not Loaded"/>
      <img onmouseover="setPrev(this)" id="img4" src="maltese.jpg" title="Maltese" alt="Image Not Loaded"/>
    </div>
    <br/>
    <div class="preview" align="center">
    <img id="preview" src="img1.jpg" alt="No Image Loaded"/>
    </div>
   </div> 


  
    </div>
    <br />
    <div align="center" style="font-size: 20px; color: #FFF;">
      <p>&nbsp;</p>
      <p><strong>You are visitor number:</strong> <img class="statcounter" src="http://c.statcounter.com/9478172/0/0e0faf17/0/" alt="web analytics"></p>
      </a>
      
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
