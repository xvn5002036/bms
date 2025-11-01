<!--By 皮皮(羽翼) 製作 2010.01.31 即時通：gxce3849＠yahoo.com.tw  轉載及修改請保留版權信息-->
<?php
mysql_query("set names 'big5'");
$query = mysql_query("SELECT * FROM `characters` WHERE `accountid` = '" .$_SESSION['user_id']. "' ORDER BY `level` DESC ");
$rank = "0";
$zscs=$data['zscs']
?>
 <b>▲▲中文名稱▲▲　<br>此功能可將角色名稱改為中文名稱!<br>如果出現--Error 404: File not found.--請先打英文更名再打中文
 <br>用戶ID:<?php echo $_SESSION['user_id']; ?></b>
 <br />
 <BR><font color="#FF0000">※注意:請先關閉遊戲在使用!!※</font>
 <BR><font color="#FF0000">※中文字最多只能使用6個(含6個)，如果用7中文字無法登入遊戲不要來問GM※</font>
 <BR><font color="#FF0000">※中文最多6個字+英文 其他沒有限制※</font>
 <BR><font color="#FF0000">※特殊符號請勿使用過多，否則卡角就不要怪GM了※</font>
 <BR><font color="#FF0000">※特殊符號請勿使用過多，否則卡角就不要怪GM了※</font>
 <BR><font color="#FF0000">※特殊符號請勿使用過多，否則卡角就不要怪GM了※</font>
 <BR><font color="#FF0000">※特殊符號請勿使用過多，否則卡角就不要怪GM了※</font>
 <BR><font color="#FF0000">※特殊符號請勿使用過多，否則卡角就不要怪GM了※</font><BR>
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
<td><div align="center"><form action=index.php?page=crea1-2 method=post><span class="content"><input type=text name=name value="<?php echo $data['name']; ?>" readonly size="16"></span>
<td><div align="center"><span class="content"><input type="text" name="map" value="" maxlength="9" size="16"></span></div></span></td>
<td><div align="center"><BR><input type=submit name=zj value=確定更名></form></span></div></span></td>	

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

