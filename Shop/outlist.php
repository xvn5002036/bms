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
//使用全POST數據提交分頁顯示模式! By Worm 



	//檢測登陸
	if (!isset($_SESSION['access'])){
	header("Location: index.php?page=login&error=nli");
	die();}
?>
<script type="text/javascript" src="javascript/AddBuy.js"></script>
<?php
//使用動態查詢
$pageN = "11";
if($_POST['thispage'] == ""){$offset = "0";}else{$offset=$_POST['thispage'];}
$Worm_D1 = "";$Worm_D2 = "";$Worm_D3 = "";$BTcooke = "";$Wrom_CloseWhere = "0";
//按鈕賦值
include ("shop/PSetCfg.php");

//生成查詢語句
if($Wrom_CloseWhere=="0"){$Worm_Where = "WHERE $Worm_D2 = $Worm_D3";}else{$Worm_Where="";}
$pages = mysql_num_rows(mysql_query("SELECT * FROM `w_shopitemlist` $Worm_Where ORDER BY $Worm_D1 DESC")); //or die (mysql_error()) 出錯時輸出錯誤信息 Debug

//計算總共需要的頁數 

$t01=0;
if((($pages % $pageN) != 0) and ($pages > $pageN ))
{$t01=$pages - ($pages % $pageN);}
else{if($pages > $pageN){$t01=$pages-$pageN;}}

//分頁程序 加 減
if($_POST[$BTcooke] == "首"){$offset="0";}
if($_POST[$BTcooke] == "末"){$offset=$t01;}
if($_POST[$BTcooke] == "&raquo;"){if(($pages/($offset+$pageN)) > 1){$offset+=$pageN;}}
if($_POST[$BTcooke] == "&laquo;"){if($_POST['thispage']>0){$offset-=$pageN;}}
mysql_query("set names 'gbk'");
$query = mysql_query("SELECT * FROM `w_shopitemlist` $Worm_Where ORDER BY $Worm_D1 DESC LIMIT $offset,$pageN");

//購買列表
?>
<style type="text/css">

</style>


</div>
<table height="410" cellpadding="1">
<tr><td height="400"  valign="top">
<table cellpadding="1">
<tr>
	<td><span class="content"><div align="center">商品預覽</div></span></td>
	<td><span class="content"><div align="center">商品名稱</div></span></td>
	<td><span class="content"><div align="center">商品ID</div></span></td>
	<td><span class="content"><div align="center">出售價格</div></span></td>
	<td><span class="content"><div align="center">VIP價格</div></span></td>
	<td><span class="content"><div align="center">物品類型</div></span></td>
	<td><span class="content"><div align="center">庫存數量</div></span></td>
	<td><span class="content"><div align="center">出數總數</div></span></td>
</tr>
<?php
//出數數據
	
while ($data = mysql_fetch_array($query)){
$job_query = mysql_query("SELECT * FROM `wormphp_items` WHERE `W_itemid` = '" . $data['itemid'] . "' ") or die("Error:查詢數據庫出錯!");
$job = mysql_fetch_array($job_query);
$itemid = $data['itemid']; 
?>
	<tr>
	    <td><span class="content"><div align="center"><?php echo "<img src='$ImagesPath$itemid.png'></img><br>"; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $job['W_itemname']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $data['itemid']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $data['BuyMn1']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $data['BuyMn2']; ?></div></span></td>
		<td><span class="content"><div align="center"><?php if($data['itemLB']==1){echo "裝備";}if($data['itemLB']==2){echo "消耗";}if($data['itemLB']==3){echo "設置";}if($data['itemLB']==4){echo "其他";}if($data['itemLB']==5){echo "現金";}?></div></span></td>
		<td><span class="content"><div align="center"><?php if($data['Kpcs']!=0){echo $data['Kpcs'];}else{echo "無限";} ?></div></span></td>
		<td><span class="content"><div align="center"><?php echo $data['OutPsc']; ?></div></span></td>
		<td><span class="content"><div align="center"><span class="content"><a href="javascript:;" onclick="itemtoCart(<?php echo $data['itemid']; ?>)">購買</a></span></div>
		</span></td>

	</tr>
<?php
}
//出數結束
// uptime 08.07.05
//下面輸出分頁按鈕
?>
</table></td></tr>
<tr><td valign="top">

<span class="content"><div align="center"><form action="" method="post" >
共:<?PHP echo $pages;?>個　頁數:[<?PHP echo ceil($pages/$pageN);?>/<?PHP echo ($offset/$pageN)+1;?>] 
<input name="<?PHP echo $BTcooke;?>" type="submit" value="首" />
<input name="thispage" type="hidden" value="<?PHP echo $offset;?>" />
<input name="<?PHP echo $BTcooke;?>" type="submit" value="&laquo;" />
<input name="<?PHP echo $BTcooke;?>" type="submit" value="&raquo;" />
<input name="<?PHP echo $BTcooke;?>" type="submit" value="末" />
</form>
</td></tr></table>

