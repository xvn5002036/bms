<?php
//get the top 5
mysql_query("set names 'BIG5'");
$query = mysql_query("SELECT * FROM `characters` ORDER BY `reborns` DESC ");

//rank= 0 for ranking numbers
$rank = "0";

//start ing the table before the loop
?>
<b><font style="filter: glow(color=#ff33cc,strength=3); height:10px; color:white; padding:1px">
<div align="center">≡Top <?php echo $Top5; ?> 玩家財富排行榜≡</b></br></br>
<table cellpadding="1">
<tr>
	<td height="20" width="80"><span class="content"><div align="center"><font style="filter: glow(color=#0066ff,strength=3); height:10px; color:white; padding:1px">排名</font></div></span></td>
	<td height="20" width="80"><span class="content"><div align="center"><font style="filter: glow(color=#0066ff,strength=3); height:10px; color:white; padding:1px">玩家暱稱</font></div></span></td>
	<td height="20" width="80"><span class="content"><div align="center"><font style="filter: glow(color=#0066ff,strength=3); height:10px; color:white; padding:1px">等級</font></div></span></td>
	<td height="3" width="80"><span class="content"><div align="center"><font style="filter: glow(color=#0066ff,strength=3); height:10px; color:white; padding:1px">職業</font></div></span></td>
    <td width="80" height="20"><span class="content"><div align="center"><font style="filter: glow(color=#0066ff,strength=3); height:10px; color:white; padding:1px">財富</font></div></span></td>
</tr>

<?php
//output data
	
while ($data = mysql_fetch_array($query)){
$job_query = mysql_query("SELECT * FROM `phpTitanMS_jobs` WHERE `id` = '" . $data['job'] . "' LIMIT 5") or die("Error:查詢數據庫出錯!");
$job = mysql_fetch_array($job_query);

	$rank++;
	if ($rank >= ($Top5 + 1))break;
?>
	<tr>
		<td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#ff0000,strength=3); height:10px; color:white; padding:1px)"><?php echo $rank; ?></div></span></td>
		<td><span class="content"><div align="center"><font style="color:white;Filter:Glow(Color=#9933ff,Strength=3); height:10px; color:white; padding:1px)"><?php echo $data['name']; ?></div></span></td>
		<td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#ff33cc,strength=3); height:10px; color:white; padding:1px)"><?php echo $data['level']; ?></div></span></td>
		<td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#ff9900,strength=3); height:10px; color:white; padding:1px)"><?php echo $job[1]; ?></div></span></td>
	    <td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#006600,strength=3); height:10px; color:white; padding:1px)"><?php echo round($data['meso']/1,0); ?></div></span></td>
	</tr>
<?php
}
//close table
?>
</table>
<p>&nbsp;</p>
