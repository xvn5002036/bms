<?php
//get the top 5
mysql_query("set names 'big5'");
$query = mysql_query("SELECT * FROM `characters` WHERE `accountid` = '" .$_SESSION['user_id']. "' ORDER BY `level` DESC ");

//rank= 0 for ranking numbers
$rank = "0";
//start ing the table before the loop
?>
<b> &#8759;&#8759;查詢角色&#8759;&#8759;　<br>用戶ID:<?php echo $_SESSION['user_id']; ?></b><br />
<table cellpadding="0" cellspacing="0" border="1" bordercolor="#000000">
<tr>
	<td width="50"><span class="content"><div align="center">角色ID</div></span></td>
	<td><span class="content"><div align="center">職業</div></span></td>
	<td><span class="content"><div align="center">性別</div></span></td>
	<td><span class="content"><div align="center">名聲</div></span></td>
	<td><span class="content"><div align="center">等級</div></span></td>
	<td><span class="content"><div align="center">力量</div></span></td>
	<td><span class="content"><div align="center">敏捷</div></span></td>
	<td><span class="content"><div align="center">幸運</div></span></td>
	<td><span class="content"><div align="center">智力</div></span></td>
	<td width="70"><span class="content"><div align="center">經驗</div></span></td>
	<td width="70"><span class="content"><div align="center">金幣</div></span></td>
	<td width="50"><span class="content"><div align="center">點數</div></span></td>
</tr>	
<?php
while 
($data = mysql_fetch_array($query)){
$job_query = mysql_query("SELECT * FROM `phpTitanMS_jobs` WHERE `id` = '" . $data['job'] . "' LIMIT 5") or die("Error:查詢數據庫出錯!");
$job = mysql_fetch_array($job_query);
?>
<tr>
<td><span class="content"><div align="center"><?php echo $data['name']; ?></div></span></td>
<td><span class="content"><div align="center"><?php echo $job['1']; ?></div></span></td>
<td><span class="content"><div align="center">
<?php if (($data['gender'] == "0")){ echo ("男");} else{ echo ("女");}?></div></span></td>
<td><span class="content"><div align="center"><?php echo $data['fame']; ?></div></span></td>
<td><span class="content"><div align="center"><?php echo $data['level']; ?></div></span></td>
<td><span class="content"><div align="center"><?php echo $data['str']; ?></div></span></td>
<td><span class="content"><div align="center"><?php echo $data['dex']; ?></div></span></td>
<td><span class="content"><div align="center"><?php echo $data['luk']; ?></div></span></td>
<td><span class="content"><div align="center"><?php echo $data['int']; ?></div></span></td>
<td><span class="content"><div align="center"><?php echo $data['exp']; ?></div></span></td>
<td><span class="content"><div align="center"><?php echo $data['meso']; ?></div></span></td>
<td><span class="content"><div align="center"><a href="index.php?page=Jint&JinP=Jinto&id=<?php echo $data['id']; ?>"> 增加點數 </a></div></span></td>
	</tr>
<?php
}
//close table
?>
</table>
