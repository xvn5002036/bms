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
		
	    
	    
	    </span>
		</td>
		<td >
        <span class="content">
<?php
//if no value was passed to page then show the main page
if(!isset($_GET['section'])){
include ("GameUserCfg/welcome.php");
}else{
//otherwise, include the page from the pages directory
$file = ("GameUserCfg/".$_GET['section'].".php");
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
