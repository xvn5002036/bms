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
include ("../includes/config.php");
$Wormdb = @mysql_connect($db_host, $db_user, $db_pass) or die ('錯誤:數據庫連接失敗,請檢查是否設置正確!</br>請檢查 includes\config.php 數據庫設置 </br> By Worm QQ:523266656');
mysql_select_db ($db_name);

//session 開啟
session_start();
//檢測登錄
if (!isset($_SESSION['access'])){die();}
$chid = ereg_replace("[^0-9]", "", $_GET['s']);
if($chid != $_GET['s']){die("-2");}
$item = $_GET['s'];
$youmeiyou =  mysql_num_rows(mysql_query("SELECT * FROM `w_shopcartlist` WHERE `onlyid` = '" .$item. "' and  `userid` = '" .$_SESSION['user_id']. "'"));
if($youmeiyou == "0"){die("0");}
//全部檢測通過
$del_item = ("delete from `w_shopcartlist` WHERE `onlyid` = '" .$item. "' and  `userid` = '" .$_SESSION['user_id']. "'");
mysql_query ($del_item) or die (mysql_error());
echo "1";
?>