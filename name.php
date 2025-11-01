<!--By 皮皮(羽翼) 製作 2010.01.31 即時通：gxce3849＠yahoo.com.tw  轉載及修改請保留版權信息-->
<?php
mysql_query("set names 'big5'");
$query = mysql_query("SELECT * FROM `characters` WHERE `accountid` = '" .$_SESSION['user_id']. "' ORDER BY `level` DESC ");
$rank = "0";
$zscs=$data['zscs']
?>
 <b>▲▲中文名稱▲▲　<br>此功能可將腳色名稱改為中文名稱!
 <br>用戶ID:<?php echo $_SESSION['user_id']; ?></b>
 <br />
 <BR><font color="#FF0000">※注意:請先關閉遊戲在使用!!※</font>
 <BR><font color="#FF0000">※每次使用收費一萬元楓幣!!!※</font>
 <BR><font color="#FF0000">※請勿使用特殊符號※</font><BR><BR>
<table cellpadding="1" cellspacing="0" border="1" bordercolor="#000000">
<tr>
	<td><div align="center"><span class="content">狀態</span></div></span></td>
	<td><div align="center"><span class="content">等級</span></div></span></td>
	<td><div align="center"><span class="content">楓幣</span></div></span></td>
	<td><div align="center"><span class="content">角色名稱</span></div></span></td>
	<td><div align="center"><span class="content">修改的名稱</span></div></span></td>
	<td><div align="center"><span class="content">是否修改</span></div></span></td>
</tr>	
<?php
while 
($data = mysql_fetch_array($query)){
$job_query = mysql_query("SELECT * FROM `phpTitanMS_jobs` WHERE `id` = '" . $data['job'] . "' LIMIT 5") or die("Error:查詢數據庫出錯!");
$job = mysql_fetch_array($job_query);
?>
<tr>
<td><div align="center"><span class="content"><?php if (($data['ban'] >= "1")){ echo ("&nbsp;黑名單&nbsp;");} else{ echo ("&nbsp;正常&nbsp;");}?></span></div></span></td>
<td><div align="center"><span class="content"><?php echo $data['level']; ?></span></div></span></td>
<td><div align="center"><span class="content"><img src="images/0.gif" align="left"><b style=color:#FFFF00;><?php echo $data['meso']; ?></b></span></div></span></td>
<td><div align="center"><form action=aacop.php?page=creab method=post><span class="content"><input type=text name=name value="<?php echo $data['name']; ?>" readonly size="16"></span>
<td><div align="center"><span class="content"><input type="text" name="map" value="" maxlength="9" size="16"></span></div></span></td>
<td><div align="center"><?php if (($data['meso'] >= "10000")){ echo ("<BR><input type=submit name=zj value=確定修改></form>");} else{ echo ("<BR><input type=submit name=zj disabled value=楓幣不足></form>");}?></span></div></span></td>	

</tr>
<?php
}
?>
</table><br> 
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p>

