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

<b>服務器運行狀態!</b><br />
<?php
$timeout = "0";

$server =  @fsockopen("$TMS_host", $TMS_port, $errno, $errstr, $timeout);
echo ("登陸服務器: ");
if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle></br>正常開啟</b></font></br>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle></br>正常開啟</b></font></br>";}

$server =  @fsockopen("$TMS_host", 7575, $errno, $errstr, $timeout);
echo ("遊戲服務器: ");
if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle></br>正常開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle></br>正常開啟</b></font>";}
?>
