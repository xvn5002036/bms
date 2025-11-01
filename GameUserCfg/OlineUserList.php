  <?php
// ********************************* 
// * 程序製作 By Worm QQ:523266656 *
// *                               *
// * 轉載或修改發佈請保留此版權！  *
// *                               *
// *  Http://Www.WormShow.com      *
// *                               *
// * WormSuperAdmin V1.3 08.07.15  *
// *********************************

	//check if session exists
	if (!isset($_SESSION['gmaccess'])){
	header("Location: index.php?page=login&error=nli");
	die();}
  
  $error = "1";
	$result = mysql_query("SELECT * FROM `accounts` WHERE `loggedin` = 2 ") or die("Error:查詢數據庫出錯!");
	echo "<table width='650' class='navigation' border='1' cellspacing='0' cellpadding='0'>";
	echo "<tr> <th>  ID </th> <th >登陸帳號</th> <th>註冊時間</th> <th>最後登陸</th> <th>MAC</th> <th>生日</th> <th>預留</th></tr>";
	while($row = mysql_fetch_array($result))
	{		
	  $error = "0";
		echo "<tr><td >"; 
		echo "<div align='center'>$row[0]</div>";
		echo "<td >"; 
		echo "<div align='center'>$row[1]</div>";
		echo "</td><td >";
    echo "<div align='center'>$row[createdat]</div>";
		echo "</td><td >"; 
		if($row[lastlogin] == NULL){ echo"<div align='center'>從未登陸</div>";}else{echo "<div align='center'>$row[lastlogin]</div>";}
		echo "</td><td >";
		if($row[macs] == NULL or $row[macs] == "0"){ echo"<div align='center'>-----------無------------</div>";}else{echo "<div align='center'>$row[macs]</div>";}
		echo "</td><td >";
		echo "<div align='center'>$row[birthday]</div>";
		echo "</td><td >";
		echo "<div align='center'><input type=\"radio\" name=\"gotocharid\" value=\"<?php echo $row[0]; ?>\"></select></div>";
		echo "</td></tr>";
    	}
	echo "</table>";

if ($error == "1"){echo "<b><font color=\"red\">Sorry,沒有在線用戶!</font></b>";}
?>