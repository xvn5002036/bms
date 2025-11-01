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
$npcImagesPath = ""; 
$query = mysql_query("SELECT COUNT(*) FROM `shops` ");
$date = mysql_fetch_array($query);
if($_POST['npcid'] != ""){
$nxitidresult = mysql_query("SELECT COUNT(*) FROM `shopitems` WHERE `shopid` = '" . $_POST['npcid'] . "' ") or die("Error:查詢數據庫出錯!");
$nxitiddb = mysql_fetch_array($nxitidresult);
$nownextid = $nxitiddb['0'] + 1;
$GetNpcid = mysql_query("SELECT * FROM `shops` WHERE `shopid` = '" . $_POST['npcid'] . "' ") or die("Error:查詢數據庫出錯!");
$TheNPCID = mysql_fetch_array($GetNpcid);
$NPCNameresult = mysql_query("SELECT * FROM `wormphp_npcs` WHERE `W_npcid` = '" . $TheNPCID[1] . "' ") or die("Error:查詢數據庫出錯!");
$NPCName = mysql_fetch_array($NPCNameresult);
}
if(isset($_POST['goto']))	
{
	if(!is_numeric($_POST['npcid']))
	die("物品?? 必須是數字得!<br><br> By Worm's 版權信息 WormShow.Com <br>QQ:WormShow@qq.com");
	}
?>
<table width="450"  class="navigation"   border="0" cellpadding="0" cellspacing="0">
<tr ><td width="450">	
<form method="post">
<b>商店總數: <font color=red><?php echo $date['0']; ?></font></b> <br><b>商店編號: <font color=red> <?php echo $_POST['npcid'] ?></font></b><br><b>NPC名稱: <font color=red><?php echo $NPCName[1]; ?></font></b><br><br> 
商店編號:　<input name="npcid" type="text" value="<?php echo $_POST['npcid'] ?>" size="7"> <input name="goto" type="submit" class="navigation"  value="OK">　<a href="index.php?page=ServerCfg&section=npcshoplist" target=_blank>[查找]</a>
 </b><br>
<br>

<table  border="0" cellspacing="0" cellpadding="0">
<tr><input name="Theid" type="hidden"  value="<?php echo $_POST['npcid'] ?>">
<td width="150" class="navigation"  >物品代碼:　<input name="itemid" type="text" size="9"></td>
</tr>
<td width="150" class="navigation"  >物品價格:　<input name="price" type="text" size="9" ></td>
</tr><tr>
<td width="250" class="navigation"  >物品排序:　<input name="position" type="text" size="9" ><input type="text" id="addnextid" value="<?php if($nownextid == Null){ echo "Worm"; } else {echo $nownextid;}?>" name="nextid"  maxlength="5" size="4	" readonly> Debug</td>
</tr>
<td></td></tr>

</table>
<p>
<input name="add"    type="submit" class="navigation" value="添加商品!"> 
<input name="remove" type="submit" class="navigation" value="刪除商品!"> 
<input name="change" type="submit" class="navigation"value="修改價格!">
<input name="paixua" type="submit" class="navigation"value="修改排序!"><br>
</form>



<?php
if(isset($_POST['add']))
{
	$error="1";
  $Thisnpcid = $_POST['Theid'];
	$itemid = $_POST['itemid'];
	$price = $_POST['price'];
	$nextid = $_POST['nextid'];
	

	if($itemid == "")
	{
		die('<h1>您沒有輸入物品ID!</h1>');
	}

	if($price == "")
	{
		die('<h1>您沒有輸入價格!</h1>');
	}

	if(!is_numeric($itemid))
		die('<h1> 物品ID 非法必須是數字！ </h1>');
	if(!is_numeric($price))
		die('<h1> 價格 非法 必須是數字！ </h1>');
	$check_item = mysql_query("SELECT * FROM `wormphp_items` WHERE `W_itemid` = '" . $itemid . "' ");
  if(!mysql_fetch_array($check_item)){echo "<font color=\"red\"><b>警告:您輸入的物品可能不存!</b></font><br>";}
  

	$result =  mysql_query("SELECT * FROM `shopitems` WHERE `shopid` = '" . $Thisnpcid . "' AND `itemid` = '" . $itemid . "' ");
	$tempitemAddError = "0";
	while($row = mysql_fetch_array($result))
	{
		$tempitemAddError = "1";
		echo "<font color=\"red\"><b>Sorry,已經存在不能重複添加,您可以修改排序或刪除!</font><br><font color=\"blue\">";
		$Nameresult = mysql_query("SELECT * FROM `wormphp_items` WHERE `W_itemid` = '" . $itemid . "' ") or die("Error:查詢數據庫出錯!");
		$itemname = mysql_fetch_array($Nameresult);
		echo $itemname[1];
		echo "</font></b> <img src='$ImagesPath$itemid.png'></img>";
	}
	if($tempitemAddError == "0")
	{ 
		$Add_bl = ("INSERT INTO `shopitems` (`shopid`, `itemid`, `price`, `position` 	) VALUES ('".$Thisnpcid."','".$itemid."','".$price."','".$nownextid."')");
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
	$shopid = $_POST['Theid'];
	$electQuery  = "SELECT itemid, price, position FROM shopitems WHERE shopid = $shopid ORDER BY position";
	$deleteitem = $_POST['itemid'];
	$foundpos = 0;

	if($deleteitem == "")
	{
		die('<h1><b>您沒有輸入物品ID!</b></h1>');
	}

	if(!is_numeric($deleteitem))
		die('<h1> 物品ID 是數字的你虎誰那! </h1>');

	$result = mysql_query($electQuery);

	while($row = mysql_fetch_array($result))
	{
		$item = $row[0];
		$lastpos = $row[2];
		
		if($item == $deleteitem)
		{
			$foundpos = $row[2];
		}
	}
	
	if($foundpos == 0)
	{
		echo "<br><img src='$ImagesPath$deleteitem.png'> </img><br>";
		die('<h1>錯誤:此商店內沒有該商品請核對操作!</h1>');
	}
	
	if($foundpos == $lastpos)
	{
		$result = mysql_query("DELETE FROM shopitems WHERE shopid = $shopid AND itemid = $deleteitem");
		echo "<br><img src='$ImagesPath$deleteitem.png'> </img><br>";
		echo("<font color=\"green\"><b>物品ID:<b>$deleteitem</b> 刪除成功! </font><br>");
	}
	else
	{
		mysql_query("DELETE FROM shopitems WHERE itemid = $deleteitem AND position = $foundpos");
		mysql_query("UPDATE shopitems SET position = position - 1 WHERE position > $foundpos AND shopid = $shopid");	
		echo "<br><img src='$ImagesPath$deleteitem.png'> </img><br>";	
		echo ("<font color=\"green\"> 商品刪除完畢!  該商品原排序為: <b>$foundpos</b> </br>並且後續商品排序已經自動調整完畢!</font>");	
	}	
}

if(isset($_POST['change']))
{
  $Thisnpcid = $_POST['Theid'];
	$itemid = $_POST['itemid'];
	$price = $_POST['price'];
	

	if($itemid == "")
	{
		die('<h1>您沒有輸入物品ID!</h1>');
	}

	if($price == "")
	{
		die('<h1>您沒有輸入價格!</h1>');
	}

	if(!is_numeric($itemid))
		die('<h1> 物品ID 非法必須是數字！ </h1>');
	if(!is_numeric($price))
		die('<h1> 物品ID 非法 必須是數字！ </h1>');
	if($price < 1)
	  die('<h1> 價格 不能小於 1 . </h1>');


	$result =  mysql_query("SELECT * FROM `shopitems` WHERE `shopid` = '" . $Thisnpcid . "' AND `itemid` = '" . $itemid . "' ");
	$row = mysql_fetch_array($result) or $row = "Error";
	if ($row == "Error")echo "<font color=\"red\"><b>Sorry,該物品並不存在!</font> ";
	
	$result =  mysql_query("SELECT * FROM `shopitems` WHERE `shopid` = '" . $Thisnpcid . "' AND `itemid` = '" . $itemid . "' ");
	while($row = mysql_fetch_array($result))
	{
		$sql = ("UPDATE `shopitems` SET `price` ='". $price ."'  WHERE `shopid` = '" . $Thisnpcid . "' AND `itemid` = '" . $itemid . "' ");
		mysql_query ($sql) or die(mysql_error());
		echo "<font color=\"green\"><b>修改該價格成功!</font> - <br><font color=\"blue\">";
		$Nameresult = mysql_query("SELECT * FROM `wormphp_items` WHERE `W_itemid` = '" . $itemid . "' ") or die("Error:查詢數據庫出錯!");
		$itemname = mysql_fetch_array($Nameresult);
		echo $itemname[1];
		echo " <img src='$ImagesPath$itemid.png'></img><br></font>調整價格為:<font color=\"red\">";
		echo $price;
		echo "</font></b>";
		break;
	}

	
}

if(isset($_POST['paixua']))
{
	$shopid = $_POST['Theid'];
	$electQuery  = "SELECT itemid, price, position FROM shopitems WHERE shopid = $shopid ORDER BY position";
	$itemid = $_POST['itemid'];
	$price = $_POST['price'];
	$pos = $_POST['position'];

	if($itemid == "")
	{
		die('<h1>您沒有輸入物品ID</h1>');
	}

	if($pos == "")
	{
		die('<h1> 排序 您必須填寫!</h1>');
	}

	if($pos != "")
	{
		if(!is_numeric($pos))
			die('<h1> 排序必須是數字! </h1>');
	}

	if(!is_numeric($itemid))
		die('<h1> 物品ID必須是數字! </h1>');
	

	$result = mysql_query($electQuery);

	while($row = mysql_fetch_array($result))
	{
		$item = $row[0];
		$currentpos = $row[2];

		if($item == $itemid)
		{

			if($pos != "" && $pos != $currentpos)
			{
				if($pos > $currentpos)
				{
					mysql_query("UPDATE shopitems SET position = position - 1 WHERE position > $currentpos AND position <= $pos AND shopid = $shopid");
				}
				if($pos < $currentpos)
				{
					mysql_query("UPDATE shopitems SET position = position + 1 WHERE position < $currentpos AND position >= $pos AND shopid = $shopid");
				}

				mysql_query("UPDATE shopitems SET position = $pos WHERE itemid = $item AND shopid = $shopid");
				break;
			}
			
			
		}
		
	}
	echo "<img src='$ImagesPath$itemid.png'> </img><br>";
	if($pos != "")
	{
		echo "<font color=\"green\"><b>物品ID:<b>$itemid</b> <br>物品排序調整為: $pos </font><br>";	
	}
}


?>

<?php
  $error = "1";
  $nextid = "1";
	$result = mysql_query("SELECT * FROM `shopitems` WHERE `shopid` = '" . $_POST['npcid'] . "' ORDER BY position ") or die("Error:查詢數據庫出錯!");
	if($_POST['npcid'] != ""){
	echo "<p>";
	echo "<table width='400' class='navigation' border='0' cellspacing='0' cellpadding='0'>";
	echo "<tr> <th> 預覽 </th> <th> 物品名稱 </th> <th> 物品 ID</th> <th>　價格 </th> <th>　排序</th> </tr>";
	while($row = mysql_fetch_array($result))
	{
		$Nameresult = mysql_query("SELECT * FROM `wormphp_items` WHERE `W_itemid` = '" . $row[2] . "' ") or die("Error:查詢數據庫出錯!");
		$itemname = mysql_fetch_array($Nameresult);
		$itemid = $row[2];
		$price = $row[3];
		$position = $row[4];
		$error = "0";

		
	
		echo "<tr><td>"; 
		echo "<div align='center'><img src='$ImagesPath$itemid.png'></img></div>";
		echo "<td>"; 
		if($itemname[1] != NULL){ echo "<div align='center'>$itemname[1]</div>";}else{echo "<div align='center'><font color='red'>[無中文數據]</font></div>";}
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
if ($error == "1" and $_POST['npcid'] != ""){echo "<b><font color=\"red\">Sorry,該商店ID無相關信息,請查核後在輸入!</font></b>";}
?>
</td>
<td  width="140">
<?php
if ($_POST['npcid'] != NULL){
	$resultnpcid = mysql_query("SELECT * FROM `shops` WHERE `shopid` = '" . $_POST['npcid'] . "' ");
	$gnpcid = mysql_fetch_array($resultnpcid);
	  $npcimg = $gnpcid[1];
		
?>
<div style="position:absolute;top:400;z-index:1" width="200"><font color="green"><b>ID: <?PHP if($npcimg == NULL){ echo "<font color=\"red\">無</font>";}else {echo $npcimg;} ?></b></font></div>
<div style="position:absolute;top:80;z-index:1" width="200"><font color="red"><b>NPC:</b></font></div>
<img style="position:absolute;top:300"  src="http://imagedb.mapletip.com/images/Npc/_<?php if(strlen($npcimg) < 6){echo "00$npcimg";}else{ echo $npcimg;} ?>/stand.0.png"></img></td>

<?php
}
?>
</tr></table>