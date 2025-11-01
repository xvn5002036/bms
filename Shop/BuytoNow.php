<?php
 session_start();
//檢測登陸
if (!isset($_SESSION['access'])){
header("Location: /index.php?page=login&error=nli");
die();}

include ("../includes/config.php");
include ("../includes/class.php");
$Wormdb = @mysql_connect($db_host, $db_user, $db_pass) or die ('錯誤:數據庫連接失敗,請檢查是否設置正確!</br>請檢查 includes\config.php 數據庫設置 </br> By Worm QQ:523266656');
mysql_select_db ($db_name);

$getmoney = mysql_query("SELECT * FROM `w_shopcartlist` WHERE `userid` = '" .$_SESSION['user_id']. "' ORDER BY `time` DESC ");
$getelist = mysql_query("SELECT * FROM `w_shopcartlist` WHERE `userid` = '" .$_SESSION['user_id']. "' ORDER BY `time` DESC ");
if (mysql_num_rows($getmoney) < 1){die("-2");}
while ($CJG = mysql_fetch_array($getmoney))
{
$itemsDB_query2 = mysql_query("SELECT * FROM `w_shopitemlist` WHERE `itemid` = '" . $CJG['buyitemid'] . "' ") or die(mysql_error());
$itemsDB2 = mysql_fetch_array($itemsDB_query2);
$ZjJG = $ZjJG + ($itemsDB2['BuyMn1']*$CJG['size']);
}
$getmoney2 = mysql_query("SELECT * FROM `wormphp_clientdb` WHERE `W_username` = '" .$_SESSION['username']. "' "); 
$CJG2 = mysql_fetch_array($getmoney2);
if ( $CJG2['W_Money'] < $ZjJG ){die("0");} //餘額不足

while ($listdata = mysql_fetch_array($getelist))
{
$keycode = CNXC();
$add_nxcode = ("INSERT INTO `nxcode` (`code`, `valid`,`user`,`type`,`item`) VALUES ('".$keycode."',1,NULL,4,'". $listdata['buyitemid'] ."')");
mysql_query ($add_nxcode) or die (mysql_error());
$getcode = mysql_query("SELECT * FROM `wormphp_clientdb` WHERE `W_username` = '" .$_SESSION['username']. "' ");
$oldcode = mysql_fetch_array($getcode);
$update_buylist = ("UPDATE `wormphp_clientdb` SET `W_BuyCodes` =  '".$oldcode['W_BuyCodes'] .$keycode.','."'  WHERE `W_username` = '".$_SESSION['username']."'");
mysql_query ($update_buylist) or die (mysql_error());
$del_item = ("delete from `w_shopcartlist` WHERE `onlyid` = '" .$listdata['onlyid']. "' and  `userid` = '" .$_SESSION['user_id']. "'");
mysql_query ($del_item) or die (mysql_error());
}
$update_money = ("UPDATE `wormphp_clientdb` SET `W_Money` =  '".($CJG2['W_Money'] - $ZjJG)."'  WHERE `W_username` = '".$_SESSION['username']."'");
mysql_query ($update_money) or die (mysql_error());$_SESSION['UserMoney'] = $_SESSION['UserMoney'] - $ZjJG;
die("1"); ?>