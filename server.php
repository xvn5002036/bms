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
//設定檢測超時時間
$timeout = "0";
//檢測登陸服務器狀態
$server =  @fsockopen("$TMS_host", $TMS_port, $errno, $errstr, $timeout);
echo ("登陸狀態: ");
if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle> 正常開啟</b></font></br>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font></br>";}

	
//分線檢測 1~5
echo "</br>下面為 1~20 線運行狀態!</br>";
$server =  @fsockopen("$TMLS_host01", 7575, $errno, $errstr, $timeout);
if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7576, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7577, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7578, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7579, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	

//分線檢測 5~10
 echo "</br>";
$server =  @fsockopen("$TMLS_host01", 7580, $errno, $errstr, $timeout);
if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7581, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7582, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7583, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7584, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
//檢測 10~15			
 echo "</br>";
$server =  @fsockopen("$TMLS_host01", 7585, $errno, $errstr, $timeout);
if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7586, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7587, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7588, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7589, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
//檢測 15~20
echo "</br>";
$server =  @fsockopen("$TMLS_host01", 7590, $errno, $errstr, $timeout);
if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7591, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7592, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7593, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}
	
$server =  @fsockopen("$TMLS_host01", 7594, $errno, $errstr, $timeout);

if($server){
	echo "<font color=green><b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle>開啟</b></font>";}
else{
	echo "<font color=red><b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle>關閉</b></font>";}

//END
?>
