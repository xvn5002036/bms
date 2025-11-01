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
?>
服務器目前設置的NPC商店列表：
<table width="200" class="navigation"   border="0" cellpadding="0" cellspacing="0">
<?PHP 
  $error = "1";
	$result = mysql_query("SELECT * FROM `shops`") or die("Error:查詢數據庫出錯!");
	echo "<table width='100%' class='navigation' border='1' cellspacing='0' cellpadding='0'>";
	echo "<tr> <th> 商店ID編號 </th> <th >所屬NPC編號</th></tr>";
	while($row = mysql_fetch_array($result))
	{		
	  $error = "0";
		echo "<tr><td >"; 
		echo "<div align='center'>$row[0]</div>";
		echo "<td >"; 
		echo "<div align='center'>$row[1]</div>";
		echo "</td><td >";
    	}
	echo "</table>";

if ($error == "1"){echo "<b><font color=\"red\">Sorry,沒有在線用戶!</font></b>";}
?>
</table>