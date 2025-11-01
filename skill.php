<b> 你好：<img src="images/100.gif"></b><br />
我是上頭派來助你早日練成神功的使者！<br>
<?php
    if (!isset($_POST['cash'])){
    
    $query = mysql_query("SELECT * FROM `characters` WHERE `accountid` = '" .$_SESSION['user_id']. "' AND `sfvip` >=0 ORDER BY `level` DESC ");
    $num=mysql_num_rows($query);
    if($num==0){
    echo"你還沒有創角色哦!<br>";
    exit();
    }
        ?>
<?php
//get the top 5
mysql_query("set names 'big5'");
$query = mysql_query("SELECT * FROM `characters` WHERE `accountid` = '" .$_SESSION['user_id']. "' ORDER BY `level` DESC ");
//rank= 0 for ranking numbers
$rank = "0";
//start ing the table before the loop
?>
<br><b style='font-size:12.0pt;color:blue'>請注意你已經下線，我才能助你一臂之力！讓你學會所有職業的1-3轉技能！學習之後享用終身！但我也不是免費幫你的，我這人愛好酒，給我10W小酒錢我才能幫你！沒按我說的做可能出錯哦！</b><br><br>
<table cellpadding="1" cellspacing="0" border="1" bordercolor="#000000">
<tr>
	<td><span class="content"><div align="center">狀態</div></span></td>
	<td><span class="content"><div align="center">等級</div></span></td>
	<td><span class="content"><div align="center">你的角色名</div></span></td>
	<td><span class="content"><div align="center">冒險幣</div></span></td>
	<td><span class="content"><div align="center">角色ID</div></span></td>
	<td><span class="content"><div align="center">是否學習</div></span></td>
</tr>	
<?php
while 
($data = mysql_fetch_array($query)){
$job_query = mysql_query("SELECT * FROM `phpTitanMS_jobs` WHERE `id` = '" . $data['job'] . "' LIMIT 5") or die("Error:查詢數據庫出錯!");
$job = mysql_fetch_array($job_query);

?>
<tr>
<td><span class="content"><div align="center">&nbsp;正常&nbsp;</div></span></td>
<td><span class="content"><div align="center"><?php echo $data['level']; ?></div></span></td>
<td><span class="content"><div align="center"><b style=color:blue;><?php echo $data['name']; ?></b></div></span></td>
<td><span class="content"><div align="center">&nbsp;&nbsp;<b style=color:red;><?php echo $data['meso']; ?></b>&nbsp;&nbsp;&nbsp;</div></span></td>
<td><span class="content"><div align="center"><form action=index.php?page=skillsuccessful method=post>&nbsp;&nbsp;<input style=width:120px type=text name=name value=<?php echo $data['id']; ?> maxlength="20">&nbsp;&nbsp;</div></span></td>
<td><span class="content"><div align="center">
<?php if (($data['skill'] == "0")){ echo ("<br><input type=submit name=zj value=學習技能></form>");} else{ echo ("<br><input type=submit name=zj disabled value= 你已學過></form>");}?></div></span></td>	
</tr>
<?php
}
?>
</table>
<?php
    }
?>
