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
mysql_query("set names 'BIG5'");
//物品圖片拉取地址 *請保持默認 非懂勿動
$ImagesPath = "http://www.mapletip.com/images/maplestory-monsters/0"; 
$query = mysql_query("SELECT COUNT(*) FROM `monsterdrops` ");
$date = mysql_fetch_array($query);
if($_POST['blid'] != ""){
$MobNameresult = mysql_query("SELECT * FROM `wormphp_mobs` WHERE `W_mobid` = '" . $_POST['blid'] . "' ") or die("Error:查詢數據庫出錯!");
$MobName = mysql_fetch_array($MobNameresult);
}
if(isset($_POST['goto']))	
{
	if(!is_numeric($_POST['blid']))
	die("怪物?? 必須是數字得!<br><br> By Worm's 版權信息 WormShow.Com <br>QQ:WormShow@qq.com");
	}
?>
<table width="450" class="navigation"   border="0" cellpadding="0" cellspacing="0">
<tr><td width="300">	
<form method="post">
<b>總爆率數: <font color=red><?php echo $date['0']; ?></font></b> <br><b>怪物ID: <font color=red> <?php echo $_POST['blid'] ?></font></b><br><b>怪物名稱: <font color=red><?php echo $MobName[1]; ?></font></b><br><br> 
怪物ID:　<input name="blid" type="text" value="<?php echo $_POST['blid'] ?>" size="7"> <input name="goto" type="submit" class="navigation"  value="OK">　<a href="index.php?page=Allmobslist" target=_blank>[查找]</a>
 </b><br>
<br>

<table  border="0" cellspacing="0" cellpadding="0">
<tr><input name="Theid" type="hidden"  value="<?php echo $_POST['blid'] ?>">
<td width="150" class="navigation"  >物品ID:　<input name="itemid" type="text" size="9"></td>
</tr>
<td width="150" class="navigation"  >爆物率:　<input name="price" type="text" size="9" ></td>
<td></td></tr>

</table>
<p>
<input name="add"    type="submit" class="navigation" value="添加爆率!"> 
<input name="remove" type="submit" class="navigation" value="刪除爆率!"> 
<input name="change" type="submit" class="navigation"value="修改爆率值!"><br>

</form>



<?php
if(isset($_POST['add']))
{
	$error="1";
  $monsterid = $_POST['Theid'];
	$itemid = $_POST['itemid'];
	$price = $_POST['price'];
	

	if($itemid == "")
	{
		die('<h1>您沒有輸入物品ID!</h1>');
	}

	if($price == "")
	{
		die('<h1>您沒有輸入爆率!</h1>');
	}

	if(!is_numeric($itemid))
		die('<h1> 物品ID 非法必須是數字！ </h1>');
	if(!is_numeric($price))
		die('<h1> 爆率 非法 必須是數字！ </h1>');
	$check_item = mysql_query("SELECT * FROM `wormphp_items` WHERE `W_itemid` = '" . $itemid . "' ");
  if(!mysql_fetch_array($check_item)){echo "<font color=\"red\"><b>警告:您輸入的物品可能不存!</b></font><br>";}
  

	$result =  mysql_query("SELECT * FROM `monsterdrops` WHERE `monsterid` = '" . $monsterid . "' AND `itemid` = '" . $itemid . "' ");
	$tempitemAddError = "0";
	while($row = mysql_fetch_array($result))
	{
		$tempitemAddError = "1";
		echo "<font color=\"red\"><b>Sorry,已經存在不能重複添加,您可以修改其爆率!</font><br><font color=\"blue\">";
		$Nameresult = mysql_query("SELECT * FROM `wormphp_items` WHERE `W_itemid` = '" . $itemid . "' ") or die("Error:查詢數據庫出錯!");
		$itemname = mysql_fetch_array($Nameresult);
		echo $itemname[1];
		echo "</font></b> <img src='$ImagesPath$itemid.png'></img>";
	}
	if($tempitemAddError == "0")
	{
		$Add_bl = ("INSERT INTO `monsterdrops` (`monsterdropid`, `monsterid`, `itemid`, `chance` 	) VALUES (NULL,'".$monsterid."','".$itemid."','".$price."')");
		mysql_query ($Add_bl) or die (mysql_error());
		echo "<font color=\"green\"><b>添加物品成功!</font> - <font color=\"blue\">";
		$Nameresult = mysql_query("SELECT * FROM `wormphp_items` WHERE `W_itemid` = '" . $itemid . "' ") or die("Error:查詢數據庫出錯!");
		$itemname = mysql_fetch_array($Nameresult);
		echo $itemname[1];
		echo "</font></b> <img src='$ImagesPath$itemid.png'></img>";
	}
	$tempitemAddError = "0";
}



if(isset($_POST['remove']))
{
  $monsterid = $_POST['Theid'];
	$itemid = $_POST['itemid'];
	$price = $_POST['price'];
	

	if($itemid == "")
	{
		die('<h1>您沒有輸入物品ID!</h1>');
	}


	if(!is_numeric($itemid))
		die('<h1> 物品ID 非法必須是數字！ </h1>');



	$result =  mysql_query("SELECT * FROM `monsterdrops` WHERE `monsterid` = '" . $monsterid . "' AND `itemid` = '" . $itemid . "' ");
	$row = mysql_fetch_array($result) or $row = "Error";
	if ($row == "Error")echo "<font color=\"red\"><b>Sorry,該爆率並不存在!</font> ";
	
	$result =  mysql_query("SELECT * FROM `monsterdrops` WHERE `monsterid` = '" . $monsterid . "' AND `itemid` = '" . $itemid . "' ");
	while($row = mysql_fetch_array($result))
	{
		$del_result = mysql_query("DELETE FROM monsterdrops WHERE monsterid = $monsterid AND itemid = $itemid");
		echo "<font color=\"green\"><b>刪除該爆率成功!</font> - <font color=\"blue\">";
		$Nameresult = mysql_query("SELECT * FROM `wormphp_items` WHERE `W_itemid` = '" . $itemid . "' ") or die("Error:查詢數據庫出錯!");
		$itemname = mysql_fetch_array($Nameresult);
		echo $itemname[1];
		echo "</font></b> <img src='$ImagesPath$itemid.png'></img>";
		break;
	}

	
}

if(isset($_POST['change']))
{
  $monsterid = $_POST['Theid'];
	$itemid = $_POST['itemid'];
	$price = $_POST['price'];
	

	if($itemid == "")
	{
		die('<h1>您沒有輸入物品ID!</h1>');
	}

	if($price == "")
	{
		die('<h1>您沒有輸入爆率!</h1>');
	}

	if(!is_numeric($itemid))
		die('<h1> 物品ID 非法必須是數字！ </h1>');
	if(!is_numeric($price))
		die('<h1> 爆率 非法 必須是數字！ </h1>');
	if($price < 1)
	  die('<h1> 爆率 不能小於 1 . </h1>');


	$result =  mysql_query("SELECT * FROM `monsterdrops` WHERE `monsterid` = '" . $monsterid . "' AND `itemid` = '" . $itemid . "' ");
	$row = mysql_fetch_array($result) or $row = "Error";
	if ($row == "Error")echo "<font color=\"red\"><b>Sorry,該爆率並不存在!</font> ";
	
	$result =  mysql_query("SELECT * FROM `monsterdrops` WHERE `monsterid` = '" . $monsterid . "' AND `itemid` = '" . $itemid . "' ");
	while($row = mysql_fetch_array($result))
	{
		$sql = ("UPDATE `monsterdrops` SET `chance` ='". $price ."'  WHERE `monsterid` = '" . $monsterid . "' AND `itemid` = '" . $itemid . "' ");
		mysql_query ($sql) or die(mysql_error());
		echo "<font color=\"green\"><b>修改該爆率成功!</font> - <br><font color=\"blue\">";
		$Nameresult = mysql_query("SELECT * FROM `wormphp_items` WHERE `W_itemid` = '" . $itemid . "' ") or die("Error:查詢數據庫出錯!");
		$itemname = mysql_fetch_array($Nameresult);
		echo $itemname[1];
		echo " <img src='$ImagesPath$itemid.png'></img><br></font>調整爆率值:<font color=\"red\">";
		echo $price;
		echo "</font></b>";
		break;
	}

	
}
?>

<?php
  $error = "1";
	$result = mysql_query("SELECT * FROM `monsterdrops` WHERE `monsterid` = '" . $_POST['blid'] . "' ") or die("Error:查詢數據庫出錯!");
	if($_POST['blid'] != ""){
	echo "<p>";
	echo "<table class='navigation' border='0' cellspacing='0' cellpadding='0'>";
	echo "<tr> <th> 物品預覽 </th> <th> 物品名稱 </th> <th> 物品 ID</th> <th>　爆率值 </th> <th>　數據ID</th> </tr>";
	while($row = mysql_fetch_array($result))
	{
		$Nameresult = mysql_query("SELECT * FROM `wormphp_items` WHERE `W_itemid` = '" . $row[2] . "' ") or die("Error:查詢數據庫出錯!");
		$itemname = mysql_fetch_array($Nameresult);
		$itemid = $row[2];
		$price = $row[3];
		$position = $row[0];
		$error = "0";

		
	
		echo "<tr><td>"; 
		echo "<div align='center'><img src='$ImagesPath$itemid.png'></img></div>";
		echo "<td>"; 
		echo "<div align='center'>$itemname[1]</div>";
		echo "</td><td>";
		echo "<div align='center'>$itemid</div>";
		echo "</td><td>"; 
		echo "<div align='center'>$price</div>";
		echo "</td><td>";
		echo "<div align='center'>$position</div>";
		echo "</td></tr>";
    
		
	
	}
	echo "</table>";
}
if ($error == "1" and $_POST['blid'] != ""){echo "<b><font color=\"red\">Sorry,該怪物無爆率信息!</font></b>";}
?>
</td>
<td  width="140">
<?php
if ($_POST['blid'] != 0){
	  $mobimg = $_POST['blid'];
		
?>
<div style="position:absolute;top:350;z-index:1" width="200"><font color="green"><b>怪物預覽:</b></font></div>
<img style="position:absolute;top:400;width="200" src="http://imagedb.mapletip.com/images/Mob/_<?php if(strlen($mobimg) < 7){echo "0$mobimg";}else{ echo $mobimg;} ?>/stand.0.png"></img></td>

<?php
}
?>
</tr></table>
