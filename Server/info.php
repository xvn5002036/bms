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

基本信息 (功能製作中...)
<br />
<?php
//count how many users we have
$query = mysql_query("SELECT COUNT(*) FROM `accounts`") or die (mysql_error());
$user_count = mysql_fetch_array($query);
?>
<b>總註冊用戶：</b>
<?php
//output the number of users
echo $user_count['0'];
?>
<br />
<?php
//count how many users we have
$query = mysql_query("SELECT COUNT(*) FROM `characters`") or die (mysql_error());
$char_count = mysql_fetch_array($query);
?>
<b>總人物角色：</b>
<?php
//output the number of users
echo $char_count['0'];
?>
<br />
<?php
//count how many users we have
$query = mysql_query("SELECT COUNT(*) FROM `accounts` WHERE `loggedin` = '1' ") or die (mysql_error());
$char_count = mysql_fetch_array($query);
?>
<b>總在線人數：</b>
<?php
//output the number of users
echo $char_count['0'];
?>
<br />
<?php
//count how many users we have
$query = mysql_query("SELECT COUNT(*) FROM `accounts` WHERE `banned` = '1' ") or die (mysql_error());
$char_count = mysql_fetch_array($query);
?>
<b>總封號人數：</b>
<?php
//output the number of users
echo $char_count['0'];
?>
<br />
<?php
//count how many users we have
$query = mysql_query("SELECT COUNT(*) FROM `shops` ") or die (mysql_error());
$char_count = mysql_fetch_array($query);
?>
<b>商店NPC數：</b>
<?php
//output the number of users
echo $char_count['0'];
?>
<br />
<?php
//count how many users we have
$query = mysql_query("SELECT COUNT(*) FROM `ipbans` ") or die (mysql_error());
$char_count = mysql_fetch_array($query);
?>
<b>封 IP 總數：</b>
<?php
//output the number of users
echo $char_count['0'];
?>
<br />
<?php
//count how many users we have
$query = mysql_query("SELECT COUNT(*) FROM `iplog` ") or die (mysql_error());
$char_count = mysql_fetch_array($query);
?>
<b>總登陸次數：</b>
<?php
//output the number of users
echo $char_count['0'];
?>
<br />