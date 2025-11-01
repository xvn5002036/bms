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
	//check if session exists
	if (!isset($_SESSION['access'])){
	header("Location: index.php?page=login&error=nli");
	die();}
?>
<?php
	if (!isset($_POST['submit'])){
	if (isset($_GET['error'])){
  if (($_GET['error']) == "kid"){
  echo ("<font color=\"red\">Error:System Error. 000001X0</br>錯誤:系統錯誤. 000001X0 </font><br />");}
	}
}
	
?>
<?php
mysql_query("set names 'gbk'");
$query = mysql_query("SELECT * FROM `characters` WHERE `accountid` = '". $_SESSION['user_id'] ."'");
?>

<b>--> 角色列表 </b></br></br>
<table cellpadding="1">
<tr>
	<td><span class="content"><div align="center"></div></span></td>
	<td><span class="content"><div align="center">角色名稱</div></span></td>
	<td><span class="content"><div align="center">等級</div></span></td>
	<td><span class="content"><div align="center">力量</div></span></td>
	<td><span class="content"><div align="center">敏捷</div></span></td>
	<td><span class="content"><div align="center">智慧</div></span></td>
	<td><span class="content"><div align="center">運氣</div></span></td>
	<td><span class="content"><div align="center">職業</div></span></td>
	<td><span class="content"><div align="center">選擇</div></span></td>
	<td><span class="content"><div align="center">剩餘點數</div></span></td>
</tr>
<?php
//output data
	
while ($data = mysql_fetch_array($query)){
$job_query = mysql_query("SELECT * FROM `phpTitanMS_jobs` WHERE `id` = '" . $data['job'] . "' LIMIT 5") or die("Error:查詢數據庫出錯!");
$job = mysql_fetch_array($job_query);

	$rank++;
	if ($rank >= 4)break;
?>
	<tr>
		<td></td>
		<td><span class="content"><div align="center"><?php echo $data['name']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $data['level']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $data['str']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $data['dex']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $data['int']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $data['luk']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $job[1]; ?></div></span></td>
		<td><span class="content"><div align="center"><a href="index.php?page=ucp&section=Jint&JinP=Jinto&id=<?php echo $data['id']; ?>"> + </a></div></span></td>
				<td><span class="content"><div align="center"><?php echo $data['ap']; ?></div></span></td>
	</tr>
<?php
}
//close table
?>

</table>


<?php
//if no value was passed to page then show the main page
if(!isset($_GET['JinP'])){
include ("ucp/Jint/welcome.php");
}else{
//otherwise, include the page from the pages directory
$file = ("ucp/Jint/".$_GET['section'].".php");
//let's check to see if the file exists
if (file_exists($file)){
	include ($file);
}else{
	echo ("Error 404: File not found.");
}}
?>

