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
<?php
$timeout = "0";

$server =  @fsockopen("$TMS_host", $TMS_port, $errno, $errstr, $timeout);
if($server)
  {
	echo "<font color=#9933CC><b><img src='images/0.gif' width=15 height=15 border=0 align=absmiddle>警告:服務器正常開啟 (您不能使用本功能!)</b></font><br><br>";
	$Serveroline = "0";
	}
else
  {
	echo "<font color=green><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>服務器關閉維護中... (您可以使用本功能!) </b></font><br><br>";
	$Serveroline = "1";
	}
?>	
<b><font color="red">清理卡號:<br>
警告:此功能請勿在服務器開啟時使用．<br>
用於服務器異常關閉造成批量卡號之用!</font><br></b>
<form  method="post">
<input name="BanAll" type="submit" class="navigation" value="我要清理"> 


<?php
if(isset($_POST['BanAllYes']) and $Serveroline == "1" )
{ 
	$Worm_n = "0";
	$result = mysql_query("SELECT * FROM `accounts` WHERE `loggedin` = 2 ") or die(mysql_error());
	while($row = mysql_fetch_array($result))
	{		
	$Worm_n++;
	$sql = ("UPDATE `accounts` SET `loggedin` =	'0'  WHERE `id` = '" . $row[0] . "'");
	mysql_query ($sql) or die(mysql_error());
	}
	echo "<br><br><font color=\"green\"><b>卡號處理完畢! <br><font color=\"blue\">總處理數量:</font><font color=\"red\">";
	echo $Worm_n;
	echo "</b></font></font>";
}

?>


<?php
if(isset($_POST['BanAll']) and $Serveroline == "1" )
{
  $error = "1";
	$result = mysql_query("SELECT * FROM `accounts` WHERE `loggedin` = 2 ") or die("Error:查詢數據庫出錯!");
  echo "<br><br><b><font color=\"red\">如果您服務器關閉，那麼下面為卡號用戶!</font></b><br>";
	echo "<table width='650' class='navigation' border='1' cellspacing='0' cellpadding='0'>";
	echo "<tr> <th> 用戶 ID </th> <th> 用 戶 名 </th> <th>註冊時間</th> <th>最後登陸</th> <th>Loggedin</th> </tr>";
	while($row = mysql_fetch_array($result))
	{		
	  $error = "0";
		echo "<tr><td width='150'>"; 
		echo "<div align='center'>$row[0]</img></div>";
		echo "<td width='150'>"; 
		echo "<div align='center'>$row[1]</div>";
		echo "</td><td width='150'>";
		echo "<div align='center'>$row[6]</div>";
		echo "</td><td width='150'>"; 
		echo "<div align='center'>$row[5]</div>";
		echo "</td><td width='150'>";
		echo "<div align='center'>$row[4]</div>";
		echo "</td></tr width='150'>";
    
		
	
	}
	echo "</table>";
	if ($error != "1" and $Serveroline == "1")
	echo "<br><input name=\"BanAllYes\" type=\"submit\" class=\"navigation\" value=\"我以確認－開始清理吧!\">";
}
if ($error == "1" and $Serveroline == "1"){echo "<b><font color=\"red\">Sorry,沒有卡號!</font></b>";}
if (isset($_POST['BanAll']) and $Serveroline == "0"){echo "<br><br><b><font color=\"red\">嚴重警告:服務器開啟中嚴禁使用!!你想自殺不成?</font></b>";}
?>
</form>