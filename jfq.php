1<?php
}
//close table
?>
</table>
<?php
//get the top 5
mysql_query("set names 'big5'");
$query = mysql_query("SELECT * FROM `accounts` WHERE `banned` = 1 ORDER BY `id` DESC ");
//rank= 0 for ranking numbers
$rank = "0";
//start ing the table before the loop
?>
<b> &#8759;&#8759;誤鎖自解&#8759;&#8759;　<br>管理員ID:<?php echo $_SESSION['user_id']; ?></b>記錄...<br />
<table cellpadding="1" cellspacing="0" border="1" bordercolor="#000000">
<tr>

	<td><span class="content"><div align="center">狀態</div></span></td>
	<td><span class="content"><div align="center">鎖定理由</div></span></td>
	<td><span class="content"><div align="center">被鎖帳號</div></span></td>
	<td><span class="content"><div align="center">是否解鎖</div></span></td>
</tr>	
<?php
while 
($data = mysql_fetch_array($query)){
$job_query = mysql_query("SELECT * FROM `phpTitanMS_jobs` WHERE `id` = '" . $data['job'] . "' LIMIT 5") or die("Error:查詢數據庫出錯!");
$job = mysql_fetch_array($job_query);

?>
<tr>
<td><span class="content"><div align="center">&nbsp;&nbsp;鎖定&nbsp;&nbsp;</div></span></td>
<td><span class="content"><div align="center">
<?php if ((strlen($data['banreason']) > "60")){ echo ("系統誤封，可以自解");} else{ echo ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;外掛永久鎖定&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");}?></div></span></td>
<td><span class="content"><div align="center"><form action=index.php?page=jf method=post>&nbsp;&nbsp;<input type=text name=name value=<?php echo $data['name']; ?> maxlength="20">&nbsp;&nbsp;</div></span></td>
<td><span class="content"><div align="center">
<?php if ((strlen($data['banreason']) > "60")){ echo ("<br><input type=submit name=zj value=誤鎖自解></form>");} else{ echo ("<br><input type=submit name=zj disabled value=永久鎖定></form>");}?></div></span></td>	

</tr>
<?php
}
?>
