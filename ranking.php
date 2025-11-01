<?php
//get the top 5
mysql_query("set names 'BIG5'");
$query = mysql_query("SELECT * FROM `characters` ORDER BY `reborns` DESC ");

//rank= 0 for ranking numbers
$rank = "0";

//start ing the table before the loop
?>
<b><font style="color:white;filter: glow(color=#000000,strength=3); height:10px; color:white; padding:1px)"><div align="center">TOP <?php echo $Top5; ?> 玩家轉升次數排名</b></br></br>
<table cellpadding="1">
<tr>
	<td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#000000,strength=3); height:10px; color:white; padding:1px)">排名</div></span></td>
		<td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#000000,strength=3); height:10px; color:white; padding:1px)">玩家暱稱</div></span></td>
	<td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#000000,strength=3); height:10px; color:white; padding:1px)">等級</div></span></td>
	<td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#000000,strength=3); height:10px; color:white; padding:1px)">職業</div></span></td>
    <td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#000000,strength=3); height:10px; color:white; padding:1px)">轉生</div></span></td>
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
		<td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#EE2C2C,strength=3); height:10px; color:white; padding:1px)"><?php echo $rank; ?></div></span></td>
		<td><span class="content"><div align="center"><font style="color:white;Filter:Glow(Color=#3366ff,Strength=3); height:10px; color:white; padding:1px)"><?php echo $data['name']; ?></div></span></td>
		<td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#FF6600,strength=3); height:10px; color:white; padding:1px)"><?php echo $data['level']; ?></div></span></td>
		<td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#00ff00,strength=3); height:10px; color:white; padding:1px)"><?php echo $job[1]; ?></div></span></td>
	    <td><span class="content"><div align="center"><font style="color:white;filter: glow(color=#9400D3,strength=3); height:10px; color:white; padding:1px)"><?php echo round($data['reborns']/1,0); ?></div></span></td>
	</tr>
<?php
}
//close table
?>
</table>
<p>&nbsp;</p>
