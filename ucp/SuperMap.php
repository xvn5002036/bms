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
// By Worm's 08.05.17  ^_^

	//check if session exists
	if (!isset($_SESSION['access'])){
	header("Location: index.php?page=login&error=nli");
	die();}
?>
<?php
//定義地圖信息信息
$ThError = "0";
$Gomapid = $Worm_MapList;
$SuperMapOK = "0";
?>

<?php
//處理提交數據
	if(isset($_POST['submit'])){
		if(($_POST['gotocharid']) == ""){
		header("Location:index.php?page=ucp&section=SuperMap&error=xzjs");
   	die();}
		$query = mysql_query("SELECT * FROM `characters` WHERE `id` = '". $_POST['gotocharid'] ."'");
    $data = mysql_fetch_array($query);
	  if(($data['accountid']) != ($_SESSION['user_id'])){
		header("Location:index.php?page=ucp&section=SuperMap&error=ffcz");
   	die();}
   $query = mysql_query("SELECT * FROM `accounts` WHERE `ID` = ". $_SESSION['user_id'] ."");
   $data = mysql_fetch_array($query);
   if(($data['loggedin']) == "1"){
   	header("Location:index.php?page=ucp&section=SuperMap&error=yhzx");
   	die();
   	}
	  if($_POST['amapid'] == ""){
		header("Location:index.php?page=ucp&section=SuperMap&error=xzdt");
   	die();}	
	  $omap_query = mysql_query("SELECT * FROM `wormphp_maps` WHERE `W_mapid` = '" . $_POST['amapid'] . "' LIMIT 5");
    $omap = mysql_fetch_array($omap_query);
    if($omap == ""){
		header("Location:index.php?page=ucp&section=SuperMap&error=wfdq");
   	die();}
    $Gomapid = $Worm_MapList;
	  if(!in_array($_POST['amapid'], $Gomapid)){
		header("Location:index.php?page=ucp&section=SuperMap&error=ffdt");
   	die();}
		$sql = ("UPDATE `characters` SET `map` ='". $_POST['amapid'] ."'  WHERE `id` = '". $_POST['gotocharid'] ."'");
	  mysql_query ($sql) or die(mysql_error()); 
	  $SuperMapOK="1";
		
		}
		
?>


<b>--> 角色列表 </b></br></br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=ucp&section=SuperMap" method="post">
<table cellpadding="1">
<tr>
	<td><span class="content"><div align="center"></div></span></td>
	<td><span class="content"><div align="center">角色名稱</div></span></td>
	<td><span class="content"><div align="center">等級</div></span></td>
	<td><span class="content"><div align="center">職業</div></span></td>
	<td><span class="content"><div align="center">所在村落</div></span></td>
	<td><span class="content"><div align="center">所在地圖</div></span></td>
	<td><span class="content"><div align="center">傳誰?</div></span></td>
</tr>

<?php

//定義數據庫
mysql_query("set names 'gbk'");
$query = mysql_query("SELECT * FROM `characters` WHERE `accountid` = '". $_SESSION['user_id'] ."'");
//輸出數據
while ($data = mysql_fetch_array($query)){
$job_query = mysql_query("SELECT * FROM `phpTitanMS_jobs` WHERE `id` = '" . $data['job'] . "' LIMIT 5") or die("Error:查詢數據庫出錯!<br> By Worm QQ:523266656");
$job = mysql_fetch_array($job_query);

$omap_query = mysql_query("SELECT * FROM `wormphp_maps` WHERE `W_mapid` = '" . $data['map'] . "' LIMIT 5") or die("Error:查詢數據庫出錯!<br> By Worm QQ:523266656");
$omap = mysql_fetch_array($omap_query) or $ThError = "1";
$omap1 = $omap['W_mapname'];
$omap2 = "";
while ($omap = mysql_fetch_array($omap_query)){
$omap2 = $omap['W_mapname'];
break;
}
//debug
if ($omap1 == ""){
	$omap1 = "<font color=red><b>無法讀取</b><font>";
  $omap2 = "<font color=red><b>無法讀取</b><font>";}
    

?>
	<tr>
		<td></td>
		<td><span class="content"><div align="center"><?php echo $data['name']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $data['level']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $job[1]; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $omap1; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $omap2; ?></div></span></td>
		<td><span class="content"><div align="center"><input type="radio" name="gotocharid" value="<?php echo $data['id']; ?>"></select></div></span></td>
	</tr>
<?php

}
//循環結束
?>



</table>
<br>
<?php
		
	if (isset($_GET['error'])){
		if (($_GET['error']) == "ffcz"){
		echo ("<font color=\"red\">Error:System By Worm.</br>錯誤:非法操作.</font><br />");}
		if (($_GET['error']) == "xzjs"){
		echo ("<font color=\"red\">Error:Please select a role.</br>錯誤:請選擇一個角色傳送!</font><br />");}
		if (($_GET['error']) == "xzdt"){
		echo ("<font color=\"red\">Error:Please select a map.</br>錯誤:請選擇一個地圖傳送.</font><br />");}
    if (($_GET['error']) == "wfdq"){
		echo ("<font color=\"red\">Error:Can not read .</br>錯誤:無法讀取地圖數據.</font><br />");}
    if (($_GET['error']) == "ffdt"){
		echo ("<font color=\"red\">Illegal: map id.</br>非法操作:地圖ID非法.</font><br />");}
    if (($_GET['error']) == "yhzx"){
		echo ("<font color=\"red\">Error:You user is online.</br>錯誤:您的帳號當前在線!</font><br />");}
	}		
		
?>
<br><select name="amapid" type="text">
<option value="" >請選擇傳送地圖</option>
<?php

foreach ($Gomapid as $Gomapid) {
	
	$Gomap_query = mysql_query("SELECT * FROM `wormphp_maps` WHERE `W_mapid` = '" . $Gomapid . "' LIMIT 5") or die("Error:查詢數據庫出錯!");
  $Gomap = mysql_fetch_array($Gomap_query);
  while ($Gomap = mysql_fetch_array($Gomap_query)){
  $Gomapname = $Gomap['W_mapname'];
?>
<option value="<?php echo "$Gomapid"; ?>"><?php echo "$Gomapname"; ?></option>
    
    
<?php
break;
}
}

?> 
</select>　<input type="submit" name="submit" value="走嘍~!!">

<?php
if ($SuperMapOK == "1"){
?> 
<br> <br> <b><font color="red">OK:</br>傳送成功!</font><br /></	b>

<?php
}
//By Worm's 2008.05.17 ^_^
?>


