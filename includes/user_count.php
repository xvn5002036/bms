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
$query = mysql_query("SELECT COUNT(*) FROM `accounts`") or die (mysql_error());
$user_count = mysql_fetch_array($query);
?>
<b>總註冊用戶：</b><br />
<?php
echo $user_count['0'];
?>
