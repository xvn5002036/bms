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
	//檢測登陸
	if (!isset($_SESSION['access'])){
	header("Location: index.php?page=login&error=nli");
	die();}
  //輸出類別按鈕
?>

<table width="100%" border="0">
  <tr>
    <td width="40">
<form action="index.php?page=Shop" method="post">
  <input name="SList_TJ" type="submit" value="推薦" /><br />
<input name="SList_ZX" type="submit" value="最新" /><br />
<input name="SList_wuqi" type="submit" value="武器" /><br />
<input name="SList_maozi" type="submit" value="帽子" /><br />
<input name="SList_lianshi" type="submit" value="臉飾" /><br />
<input name="SList_yanshi" type="submit" value="眼飾" /><br />
<input name="SList_shangyi" type="submit" value="上衣" /><br />
<input name="SList_kuzi" type="submit" value="褲子" /><br />
<input name="SList_quanshen" type="submit" value="全身" /><br />
<input name="SList_shoutao" type="submit" value="手套" /><br />
<input name="SList_jiezhi" type="submit" value="戒指" /><br />
<input name="SList_xiezi" type="submit" value="鞋子" /><br />
<input name="SList_erhuan" type="submit" value="耳環" /><br />
<input name="SList_pifeng" type="submit" value="披風" /><br />
<input name="SList_xiaoguo" type="submit" value="效果" /><br />
<input name="SList_kapian" type="submit" value="卡片" /><br />
<input name="SList_biaoqing" type="submit" value="表情" /><br />
<input name="SList_chongzhuang" type="submit" value="寵裝" /><br />
<input name="SList_chongwu" type="submit" value="寵物" /><br />
<input name="SList_taozhuang" type="submit" value="套裝" /><br /></form>	</td>
<td valign="top"><span class="navigation">
<?PHP 
     if ($_GET['Cary'] == NULL) //檢測是否按下購物車按鈕
{
	?>
	<?php include ("shop/outlist.php");?></span></td>

<?PHP 
}
else //否則
{
//調用購物車
$file = ("shop/MyCart.php");
if (file_exists($file)){
	include ($file);
}else{
	echo ("錯誤 404: 文件不存在.");
}}
?>
    <td valign="top"><span class="navigation"><?php include ("shop/User.php");?></span></td>
  </tr>
</table>
