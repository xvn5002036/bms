<?php
//include the config.php
ob_start();
include ("includes/config.php");

//connect to database
$Wormdb = @mysql_connect($db_host, $db_user, $db_pass) or die ('錯誤:數據庫連接失敗,請檢查是否設置正確!</br>請檢查 includes\config.php 數據庫設置 </br> By JIE cpps0402');
mysql_select_db ($db_name);

//start the session
session_start();
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title><?php echo $site_title; ?></title>
<style type="text/css">
<!--
body {
	background-color:#000000 
}
.navigation {		font-size: 12px;}
body,td,th {
	color: #666666;
}
.STYLE9 {color: #FF0000}
.STYLE10 {
	font-size: 16px;
	font-weight: bold;
}
.STYLE17 {
	font-weight: bold;
	color: #0099CC;
}
.STYLE18 {
	font-weight: bold;
	color: #0099CC;
}
.STYLE20 {
	font-weight: bold;
	color: #0099CC;
}
.STYLE21 {
	font-weight: bold;
	color: #0099CC;
}
.STYLE23 {
	font-weight: bold;
	color: #0099CC;
}
.STYLE25 {font-size: 16px; font-weight: bold; color: #0099CC; }
-->
</style></head>

<body>
<!--CoffeeCup Image Slicer  YY - YY -->
<!--            www.coffeecup.com             -->
<table width="970" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td width="200" valign="top" align="center">
	<span class="navigation">
     <p>
  <?php
    if (isset($_SESSION['access'])){
?>

<li><a href="index.php">回首頁</font></a></br>
<li><a href="index.php?page=user">帳號中心</font></a><br>
<li><a href="index.php?page=profile">修改密碼</font></a></br>
<li><a href="index.php?page=char">查詢角色</font></a></br>
<li><a href="index.php?page=khzj">卡號自救</font></a></br>
<li><a href="index.php?page=crea">創建角色</font></a></br>
<li><a href="index.php?page=map">地圖傳送</font></a></br>
<a href="index.php?page=ServerCfg&welcome=yes">回到GM管理介面</font></a></br>    
  <?php                            
    }else{
?>
<?php
	if (!isset($_POST['submit'])){
	//let's prep an error messages
	if (isset($_GET['error'])){
		if (($_GET['error']) == "invalid"){
		echo ("<font color=\"red\"><br>錯誤:您輸入的帳號或密碼錯誤.</font><br />");}
		if (($_GET['error']) == "nli"){
		echo ("<font color=\"red\"><br>錯誤:您還沒有登入無權操作.</font><br />");}
	}

	//present the login form
	?>
		<form action="/index.php" method="post">  
	<p><span class="STYLE1"><font style="color:white;filter: glow(color=#FF0000,strength=3); height:10px; color:white; padding:1px)">登入區</font>
	<p><span class="STYLE1"><font style="color:white;filter: glow(color=#96FFEA,strength=3); height:10px; color:white; padding:1px)">帳號:
	<input name="username" type="text" size="15" maxlength="12" />
	<br />
	<p><span class="STYLE1"><font style="color:white;filter: glow(color=#A1FF96,strength=3); height:10px; color:white; padding:1px)">密碼:
	<input name="password" type="password" size="15" maxlength="12" />
	<br /></br>
	<input type="submit" name="submit" value="登入"></br></br>
        <a href="index.php?page=login"><font style="color:white;filter: glow(color=#FF45F3,strength=3); height:10px; color:white; padding:1px)">管理員登入</font></a></br>  
        <a href="?page=register"><font style="color:white;filter: glow(color=#57FFF9,strength=3); height:10px; color:white; padding:1px)">帳號註冊</font></a></br>
        <a href="index.php"><font style="color:white;filter: glow(color=#F9FF4F,strength=3); height:10px; color:white; padding:1px)">回首頁</font></a></br>
        </form>
	</span>
	<p><span class="navigation">
	  <?php
 }else{
	//preventative steps
	$username = stripslashes($_POST['username']);
	$password = stripslashes($_POST['password']);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	//check database to see if user exists
	$query = mysql_query("SELECT * FROM `accounts` WHERE `name` = '". $username ."' AND `md5pass` = '". sha1($password) ."'");
	$num = mysql_num_rows($query);

	if ($num == "1"){
	$data = mysql_fetch_array($query);
	
    //disconnect from the database
    mysql_close();
    
    //sassign session variables
	$_SESSION['access'] = "granted";
	$_SESSION['user_id'] = $data['id'];
	$_SESSION['username'] = $username;
	$_SESSION['loggedin'] = $data['loggedin'];
	$_SESSION['banned'] = $data['banned'];
	$_SESSION['banreason'] = $data['banreason'];
	$_SESSION['email'] = $data['email'];
	$_SESSION['qq'] = $data['yahoo'];
	$_SESSION['lastlogin'] = $data['lastlogin'];
	
    //redirect back to user control pannel with welcome
	header("Location: index.php?page=user");
 	}else{
    //redirect back to login page with error
	header("Location: index.php?page=welcome&error=invalid");}
 }
?>
	  <?php
}
?>
	  <?php
    if (isset($_SESSION['access'])){
?>
	
  	  	  <a href="index.php?page=logout"><marquee style="background-color: ; color: purple; font-size: 12pt;" behavior="alternate" width="160" height="30">Ｂｙｅ～[<?php echo $_SESSION['username']; ?>]</marquee></a>
	  
<?php
    }else{
?>
	  <?php
}
?>
    </p>
	  </span></p>
	
</br></br><font style="filter: glow(color=#FF0000,strength=5); height:10px; color:white; padding:1px">玩家守則</center></font><br /></br>
	<font style="filter: glow(color=#0099cc,strength=3); height:10px; color:white; padding:1px">1.禁止開輔助程式<BR><BR>
        2.不在RC打宣傳文<BR><BR>
	3.禁止修改WZ<BR><BR>
        4.有事情別一直密GM，請打在RC裡面<BR><BR>
        5.不准汙辱GM、在RC、遊戲打髒話<BR><BR>
<embed allowscriptaccess="never" src="http://l.yimg.com/e/serv/video/video_player/BGMusicPlayer.swf?file=http://f11.wretch.yimg.com/kopk0010/1/1703176811.mp3&autostart=true&showeq=true&repeat=true" width="0" height="0"></embed></a>
	  

        </strong></span></p>
	<p class="STYLE10">&nbsp;</p>
	<p align="center" class="STYLE25">&nbsp;</p>
	<p><BR>
	  </p>
	<p><br>
    </p></td>

    <td width="375" valign="top">
<?php
//if no value was passed to page then show the main page
if(!isset($_GET['page'])){
include ("welcome.php");
}else{
//otherwise, include the page from the pages directory
$file = ("".$_GET['page'].".php");
//let's check to see if the file exists
if (file_exists($file)){
	include ($file);
}else{
	echo ("Error 404: File not found.");

}}
?>
</td>
<td width="200" valign="top">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td align="center"><?php
$query = mysql_query("SELECT COUNT(*) FROM `characters`") or die (mysql_error());
$char_count = mysql_fetch_array($query);
?>
<b><font style="filter: glow(color=#ff6600,strength=3); height:10px; color:white; padding:1px">≡伺服器玩家人數≡</font></b><br>
<font color="#3399ff">當前在線人數:</font><B><font color=#FFCC00>
<?php
$timeout = "1";
$server =  @fsockopen("$TMS_host", $TMS_port, $errno, $errstr, $timeout);
if($server){
if(mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=2'), 0) <= 30 ){
echo "<font color=green>";
echo "<b> 0 位角色</b></font>";}
else if(mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=2'), 0) <= 70 ){		
echo "<font color=#FFCC00>";
echo mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=2'), 0)+mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0);
echo "<b> 位角色</b></font>";}
else if(mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=2'), 0) <= 80 ){		
echo "<font color=red>";
echo mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=2'), 0)+mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0);
echo "<b> 位角色</b></font>";}
else if(mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=2'), 0) > 80 ){		
echo "<font color=#FFFFFF>";
echo mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=2'), 0)+mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0);
echo "<b> 位角色</b></font>";}}
else{
echo ("<font color=red>0 位角色</font>");}
?></B></font>
<br>
<font color="#ffff33">當前卡角人數:</font><B><font color="green">
<?php
$timeout = "1";
$server =  @fsockopen("$TMS_host", $TMS_port, $errno, $errstr, $timeout);
if($server){
if(mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0) == 0 ){		
echo "<font color=green><b>2 位角色</b></font>";}
else if(mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0) <= 5 ){
echo "<font color=#FF9900>";
echo mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0);
echo "<b> 4 位角色</b></font>";}
else if(mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0) > 5 ){		
echo "<font color=#FF0000>";
echo mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0);
echo "<b> 6 位角色</b></font>";}}
else{
echo ("<font color=red>0 位角色</font>");}
?></B></font>
<br>
<font color="#A0F0DE">總人物角色:</font><B><font color="green">
<?php

echo " 0 位角色";
?></B></font>
<br>
<?php
$query = mysql_query("SELECT COUNT(*) FROM `accounts`") or die (mysql_error());
$user_count = mysql_fetch_array($query);
?>
<font color="#FFFFFF">總注冊帳號:</font><B><font color="green">
<?php

echo " 0 個帳號";
?></B></font>
<br>
<?php
$query = mysql_query("SELECT COUNT(*) FROM characters WHERE map=200090300") or die (mysql_error());
$user_count = mysql_fetch_array($query);
?>
<font color="#37B7FF">終生監獄角色:</font><B><font color="green">
<?php
echo "<font color=#FF0000>";
echo " 0 位角色</font>";
?></B></font>
<br>
<?php
$query = mysql_query("SELECT COUNT(*) FROM accounts WHERE banned=1") or die (mysql_error());
$user_count = mysql_fetch_array($query);
?>
<font color="#993300">外掛鎖定帳號:</font><B><font color="green">
<?php
echo "<font color=#FF0000>";
echo " 0 個帳號</font>";
?></B></font>
<br><br>
<b><font style="filter: glow(color=#ff6600,strength=3); height:10px; color:white; padding:1px">≡伺服器運行狀態≡</font></b><br>
<?php
$timeout = "1";

$server =  @fsockopen("$TMS_host", $TMS_port, $errno, $errstr, $timeout);
echo ("<font color=#6600cc>登入伺服器:</font>");
if($server){
	echo "<font color=#00ccff><b> 伺服器開啟中</b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle></font><BR>";}
else{
	echo "<font color=red><b> 伺服器維修中</b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle></font><BR>";}

$server =  @fsockopen("$TMS_host", 7575, $errno, $errstr, $timeout);
echo ("<font color=#3366ff>遊戲伺服器:</font>");
if($server){
	echo "<font color=#00ccff><b> 伺服器開啟中</b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle></font>";}
else{
	echo "<font color=red><b> 伺服器維修中</b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle></font>";}
	$sql = ("UPDATE `accounts` SET `loggedin` =0  WHERE `ID` = '". $_SESSION['user_id'] ."'");
	mysql_query ($sql) or die(mysql_error());

echo "<BR>";

if($server){
echo ("<font color=#9900ff>流量檢測表:</font>");
if(mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0) >= 10 ){		
echo "<font color=red><b> 伺服卡角</b><img src='images/4.gif' width=15 height=15 border=0 align=absmiddle></font><BR>";
echo "<font color=red><b>伺服卡角請連繫管理員!</b></font>";}
else if(mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=2'), 0)+mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0) <= 30 ){
echo "<font color=#00ccff><b> 連線流暢</b><img src='images/1.gif' width=15 height=15 border=0 align=absmiddle></font>";}
else if(mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=2'), 0)+mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0) <= 70 ){		
echo "<font color=#FFCC00><b> 連線普通</b><img src='images/2.gif' width=15 height=15 border=0 align=absmiddle></font>";}
else if(mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=2'), 0)+mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0) <= 80 ){		
echo "<font color=red><b> 連線擁擠</b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle></font>";}
else if(mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=2'), 0)+mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=1'), 0) > 80 ){		
echo "<font color=#FFFFFF><b> 連線爆滿</b><img src='images/4.gif' width=15 height=15 border=0 align=absmiddle></font>";}}
else{
echo ("<font color=#660000>流量檢測表:</font>");
echo "<font color=red><b> 維修中</b><img src='images/3.gif' width=15 height=15 border=0 align=absmiddle></font>";}
?><br><br>
<span class="navigation">
<embed src="http://blog.roodo.com/prb999/316bc906.swf" 
 width="150" height="23" FlashVars="txt=GM名單">
</table>
<font style="color:white;filter: glow(color=#96FFEA,strength=3); height:10px; color:white; padding:1px)">大G：　殤兒</font></br></br></br>
<font style="color:white;filter: glow(color=#FF45F3,strength=3); height:10px; color:white; padding:1px)">技G：　奶茶</font></br></br></br>
<font style="color:white;filter: glow(color=#F9FF4F,strength=3); height:10px; color:white; padding:1px)">問G：　珍惜緣份</font></br></br></br>
<font style="color:white;filter: glow(color=#FF0000,strength=3); height:10px; color:white; padding:1px)">副G：　魅</font></br></br></br>
<font style="color:white;filter: glow(color=#FF0000,strength=3); height:10px; color:white; padding:1px)">開G：　乖乖</font></br></br></br>
</span>	</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
<?php
mysql_close();
?>