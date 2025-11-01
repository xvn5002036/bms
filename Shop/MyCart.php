<?php
// ********************************* 
// * 程序製作 By Worm QQ:523266656 *
// *                               *
// * 轉載或修改發佈請保留此版權！  *
// *                               *
// *  Http://Www.WormShow.com      *
// *                               *
// * WodinmsWeb Ver 1.2  08.06.20  *
// *********************************   
?>

<?php
	if(!isset($_SESSION['access'])){
	header("Location: index.php?page=login&error=nli");
	die();}

$rank = "0";
mysql_query("set names 'gbk'");
?>
<?php
if ($_GET['Cary'] == "ok")
{
$query = mysql_query("SELECT * FROM `w_shopcartlist` WHERE `userid` = '" .$_SESSION['user_id']. "' ORDER BY `time` DESC ");
?>
<script type="text/javascript" src="javascript/DelBuy.js"></script>	
<script type="text/javascript" src="javascript/NowBuy.js"></script>	
<b>購物車內物品:</b></br></br>
<table width="450" cellpadding="1">
<tr>
	<td><span class="content"><div align="center"><b>No.</b></div></span></td>
	<td><span class="content"><div align="center"><b>物品預覽</b></div></span></td>
	<td><span class="content"><div align="center"><b>物品名稱</b></div></span></td>
	<td><span class="content"><div align="center"><b>購買數量</b></div></span></td>
	<td><span class="content"><div align="center"><b>小記價格</b></div></span></td>
	<td><span class="content"><div align="center"><b>放入購買</b></div></span></td>
	<td><span class="content"><div align="center"><b>刪了它</b></div></span></td>
</tr>
<?php
//輸出

while ($data = mysql_fetch_array($query)){
$itemsDB_query = mysql_query("SELECT * FROM `wormphp_items` WHERE `w_itemid` = '" . $data['buyitemid'] . "' ") or die(mysql_error());
$itemsDB = mysql_fetch_array($itemsDB_query);
$itemsDB_query2 = mysql_query("SELECT * FROM `w_shopitemlist` WHERE `itemid` = '" . $data['buyitemid'] . "' ") or die(mysql_error());
$itemsDB2 = mysql_fetch_array($itemsDB_query2);
$ZjJG = $ZjJG + ($itemsDB2['BuyMn1']*$data['size']);
$ZjSL = $ZjSL + $data['size'];
	$rank++;
?>
	<tr>
		<td><span class="content"><div align="center"><?php echo $rank ; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo "<img src='$ImagesPath$data[buyitemid].png'></img><br>"; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $itemsDB['1']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $data['size']; ?>  個</div></span></td>
		<td><span class="content"><div align="center"><?php echo $itemsDB2['BuyMn1']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $data['time']; ?></div></span></td>
		<td><span class="content"><div align="center"><a href="javascript:" onclick="DelInfo(<?php echo $data['onlyid']; ?>)">刪掉</a></div></span></td>
	</tr>
<?php
}
//表結束
?>
</table>
<br>　合計價格:<?php if ($ZjJG == 0)echo"0";else echo $ZjJG; ?> 點 　物品總數: <?php if ($ZjSL == 0)echo"0";else echo $ZjSL; ?> 個 　消費後剩餘:<?php echo $_SESSION['UserMoney'] - $ZjJG; ?> 點

<form name="infofrm" action="index.php?page=Shop&Cary=ok"  method="post"><input name="BuyNow" type="button" onclick="NowBuy(<?php if ($ZjJG == 0)echo"0";else echo $ZjJG; ?>,<?php echo $_SESSION['UserMoney'] - $ZjJG; ?>)" value="現在結賬" /><input  type="button"  value="我的物品" onclick="GoMyitem()" /><input name="ChongZhi" type="submit"  value="點券沖值" disabled/></form>

<?php 
}
if ($_GET['Cary'] == "Myitem")
{
$setList = mysql_query("SELECT * FROM `wormphp_clientdb` WHERE `W_username` = '" .$_SESSION['username']. "'");
$Listdata = mysql_fetch_array($setList);
$okbuylist =  explode(",", $Listdata['W_BuyCodes']);
$okbuylist = array_filter($okbuylist,create_function('$v','return !empty($v);'));
?>
<b>我的物品:</br>　　</br></b>
<table width="450" cellpadding="1">
<tr>
	<td><span class="content"><div align="center"><b>No.</b></div></span></td>
	<td><span class="content"><div align="center"><b>物品預覽</b></div></span></td>
	<td><span class="content"><div align="center"><b>物品名稱</b></div></span></td>
	<td><span class="content"><div align="center"><b>物品領取 Key</b></div></span></td>
	<td><span class="content"><div align="center"><b>領取狀態</b></div></span></td>
<td><span class="content"><div align="center"><b>領取角色</b></div></span></td>
</tr>

<?php

foreach ($okbuylist as &$buynxcode)
{
$setBuyList = mysql_query("SELECT * FROM `nxcode` WHERE `code` = '" .$buynxcode. "'");
$Buydata = mysql_fetch_array($setBuyList);
$itemsname_query = mysql_query("SELECT * FROM `wormphp_items` WHERE `w_itemid` = '" . $Buydata['item'] . "' ") or die(mysql_error());
$itemsname = mysql_fetch_array($itemsname_query);
$rank++;
?>
<tr>
		<td><span class="content"><div align="center"><?php echo $rank ; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo "<img src='$ImagesPath$Buydata[item].png'></img><br>"; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $itemsname['1']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $buynxcode; ?></div></span></td>
		<td><span class="content"><div align="center"><?php if($Buydata['valid'] == 0){echo "<font color=red>已經領取</font>";}else{echo "<font color=green>尚未領取</font>";} ?></div></span></td>
		<td><span class="content"><div align="center"><?php if($Buydata['user'] == NULL or $Buydata['user'] == ""){echo "------------";}else{echo $Buydata['user'];} ?></div></span></td>
	</tr>

<?php
}//輸出購買物品結束
?>
	</table>
		<form action="index.php?page=Shop&Cary=ok"  method="post">
<p>　 <input  type="submit"  value="返回" /></p>
</form>　<b><font color=red>提示：請妥善保管 [物品Key] 否則物品被他人領取後果自負！</b></font>
	<?php
}
?>