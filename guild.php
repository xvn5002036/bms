<style>
*{ FONT-SIZE: 8pt; FONT-FAMILY: century gothic; background-image: url(images/bg1.gif); } b { FONT-WEIGHT: bold; } .listtitle { BACKGROUND: transparent; COLOR: #000000; white-space: nowrap; } td.list { BACKGROUND: #transparent; white-space: nowrap; } </style>




<br>
<?php
mysql_query("set names 'big5'");
include('config2.php');
$con = mysql_connect($sql_host, $sql_user, $sql_pass);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($sql_db, $con);

$result = mysql_query("SELECT name, capacity, gp FROM guilds ORDER BY gp DESC")
or die(mysql_error());  


echo "<center><table border='0' bordercolor='#ffffff' style='dashed thin'>";
echo "<tr> <th bgcolor='#333333'>&nbsp;公會名字&nbsp;</th> <th bgcolor='#222222'>&nbsp;公會能力&nbsp;</th> <th bgcolor='#333333'>&nbsp;公會分數&nbsp;</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "&nbsp;<tr><td bgcolor='#222222'>&nbsp;&nbsp;"; 
	echo $row['name'];
	echo "&nbsp;</td><td bgcolor='#333333'>&nbsp;&nbsp;"; 
	echo $row['capacity'];
	echo "&nbsp;</td><td bgcolor='#333333'>&nbsp;&nbsp;"; 
	echo $row['gp'];
	echo "</td></tr>"; 
} 

echo "</table></centeR>";
?>