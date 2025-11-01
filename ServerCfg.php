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
<table cellspacing="6">
	<tr valign="top">
	    <td ><span class="content">
		<b>服務器面板</b><br />
	    </br><a href="index.php?page=ServerCfg&section=info">查看服務器信息</a></br>
	    </br><a href="index.php?page=ServerCfg&section=KickAlllogin">清除服務器卡號</a></br>	
</br><a href="index.php?page=ServerCfg&section=npcshoplist">查看以設置商店</a></br>    
	    </br><a href="index.php?page=ServerCfg&section=npcshopset	">設置服務器商店</a></br>
	    </br><a href="index.php?page=ServerCfg&section=monsterdrops">設置服務器爆率</a></br>
            </br><a href="index.php?page=GameUserCfg&section=OlineUserList">在線玩家
</a></br>
	    </span>
		</td>
		<td >
        <span class="content">
<?php
//if no value was passed to page then show the main page
if(!isset($_GET['section'])){
include ("Server/welcome.php");
}else{
//otherwise, include the page from the pages directory
$file = ("Server/".$_GET['section'].".php");
//let's check to see if the file exists
if (file_exists($file)){
	include ($file);
}else{
	echo ("Error 404: File not found.");
}}
?>
		</span>
		</td>
	</tr>
</table>
