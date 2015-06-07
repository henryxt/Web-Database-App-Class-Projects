<?xml version="1.0" encoding="ISO-8859-1"?>
<!-- Henry Cheung College of Staten Island -->
<!-- CSC226 Fall 2013 Assignment 8 -->
<!-- Modeled after w3schools.com -->
<!-- A simple XSLT transformation  -->
<!-- reference XSL style sheet URI -->

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
<head>
<meta charset="utf-8" />
   <link rel = "stylesheet" type = "text/css" href = "../familystyle.css" />
   <title>Henry's Online Dog Store XML Version</title>
</head>
<body>
  <h2>Henry's Online Dog Store XML Version</h2>
  <table border="1">
  	<col width="595" />
    <tr bgcolor="#00CCFF">
      <th>We currently have these dogs in stock</th>
    </tr>
  </table>
<br />
  <table border="1">
  	<col width="170" />
    <tr>
	  <td width="100">Item_Num</td>
    <xsl:for-each select="dog/item">
      <td width="100"><xsl:value-of select="item_num"/></td>
    </xsl:for-each>
    </tr>

    <tr>
	  <td>Breed</td>
    <xsl:for-each select="dog/item">
      <td><xsl:value-of select="breed"/></td>
    </xsl:for-each>
    </tr>

    <tr>  	
	  <td>Quantity</td>
    <xsl:for-each select="dog/item">
      <td><xsl:value-of select="quantity"/></td>
    </xsl:for-each>
    </tr>

    <tr>  
	  <td>Price</td>
    <xsl:for-each select="dog/item">
      <td>$ <xsl:value-of select="price"/></td> 
    </xsl:for-each>
    </tr>

  </table>

  </body>
  </html>
</xsl:template>

</xsl:stylesheet> 

