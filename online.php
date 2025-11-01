<?php
mysql_query("set names 'big5'");
# Change these values
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'odinms');


# Don't change anything below this line unless you know what you are doing!
# ---
mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('Cannot connect: '.mysql_error());
mysql_select_db(DB_DATABASE) or die('Cannot select: '.mysql_error());

$jobs = array(
  500 =>'管理員',
  510 =>'超級管理員',
  0    =>'<center><img src="images/rank_job0.gif"><br>(初心者)</center>',
  100 =>'<center><img src="images/rank_job1.gif"><br>(劍士)</center>',
  110 =>'<center><img src="images/rank_job1.gif"><br>(狂戰士)</center>',
  120 =>'<center><img src="images/rank_job1.gif"><br>(見習騎士)</center>',
  130 =>'<center><img src="images/rank_job1.gif"><br>(槍騎兵)</center>',
  111 =>'<center><img src="images/rank_job1.gif"><br>(十字軍)</center>',
  121 =>'<center><img src="images/rank_job1.gif"><br>(騎士)</center>',
  131 =>'<center><img src="images/rank_job1.gif"><br>(龍騎士)</center>',
  112 =>'<center><img src="images/rank_job1.gif"><br>(英雄)</center>',
  122 =>'<center><img src="images/rank_job1.gif"><br>(聖騎士)</center>',
  132 =>'<center><img src="images/rank_job1.gif"><br>(黑騎士)</center>',
  200 =>'<center><img src="images/rank_job2.gif"><br>(法師)</center>',
  210 =>'<center><img src="images/rank_job2.gif"><br>(火／毒 巫師)</center>',
  220 =>'<center><img src="images/rank_job2.gif"><br>(冰／雷 巫師)</center>',
  230 =>'<center><img src="images/rank_job2.gif"><br>(僧侶)</center>',
  211 =>'<center><img src="images/rank_job2.gif"><br>(火／毒 魔導士)</center>',
  221 =>'<center><img src="images/rank_job2.gif"><br>(冰／雷 魔導士)</center>',
  231 =>'<center><img src="images/rank_job2.gif"><br>(祭司)</center>',
  212 =>'<center><img src="images/rank_job2.gif"><br>(火／毒　大魔導士)</center>',
  222 =>'<center><img src="images/rank_job2.gif"><br>(冰／雷　大魔導士)</center>',
  232 =>'<center><img src="images/rank_job2.gif"><br>(主教)</center>',
  300 =>'<center><img src="images/rank_job3.gif"><br>(弓箭手)</center>',
  310 =>'<center><img src="images/rank_job3.gif"><br>(獵人)</center>',
  320 =>'<center><img src="images/rank_job3.gif"><br>(弩弓手)</center>',
  311 =>'<center><img src="images/rank_job3.gif"><br>(遊俠)</center>',
  321 =>'<center><img src="images/rank_job3.gif"><br>(狙擊手)</center>',
  312 =>'<center><img src="images/rank_job3.gif"><br>(箭神)</center>',
  322 =>'<center><img src="images/rank_job3.gif"><br>(神射手)</center>',
  400 =>'<center><img src="images/rank_job4.gif"><br>(盜賊)</center>',
  410 =>'<center><img src="images/rank_job4.gif"><br>(刺客)</center>',
  420 =>'<center><img src="images/rank_job4.gif"><br>(俠盜)</center>',
  411 =>'<center><img src="images/rank_job4.gif"><br>(暗殺者)</center>',
  421 =>'<center><img src="images/rank_job4.gif"><br>(神偷)</center>',
  412 =>'<center><img src="images/rank_job4.gif"><br>(夜使者)</center>',
  422 =>'<center><img src="images/rank_job4.gif"><br>(暗影神偷)</center>'
);

$online = array(
  0 =>'<b><font color="#EE0000">不在遊戲</font></b>',
  1 =>'<b><font color="#FF7F00">正在線上</font></b>',
  2 => '<b><font color="#006600">正在遊戲</font></b>',
);
?>

<html>
<head>
<title>Users online</title>
<link rel=stylesheet href="style.css" type="text/css">
  
    td { 
      text-align: center;
    }

*{ FONT-SIZE: 9pt; FONT-FAMILY: arial;} b { FONT-WEIGHT: bold; } .listtitle { BACKGROUND: transparent; COLOR: #000000; white-space: nowrap; } td.list { BACKGROUND: #transparent; white-space: nowrap; } 
  </style>


<body><h2>在線玩家</h2>
共有: <b><?php echo mysql_result(mysql_query('SELECT COUNT(*) FROM accounts WHERE loggedin=2'), 0);?></b> 位勇士在冒險
<br>
共有: <b><?php echo mysql_result(mysql_query('SELECT COUNT(*) FROM characters WHERE gm=1'), 0);?></b> 位ＧＭ



<table border="0">
<thead>
<tr>
<th bgcolor="#afff30">名字</th>
<th bgcolor="#cbff79">職業</th>
<th bgcolor="#afff30">等級</th>
<th bgcolor="#cbff79">狀態</th>
</tr>
</thead>
<tbody>
<?php

$q = mysql_query('
SELECT  characters.name , characters.job , characters.level, accounts.loggedin FROM characters, accounts WHERE characters.accountid=accounts.id and characters.gm = 0 ORDER BY accounts.loggedin DESC');
while ($r = mysql_fetch_array($q)) {
?><tr>
  <td bgcolor='#cbff79'><b><?php echo $r['name'];?></b></td>
  <td bgcolor='#afff30'><b><?php echo $jobs[$r['job']];?></b></td>
  <td bgcolor='#cbff79'><b><?php echo $r['level'];?></b><br>
  <td bgcolor='#afff30'><b><?php echo $online[$r['loggedin']];?></b></td> 
</td>
</tr>

<script language="JavaScript">
function SelectIt(){
        if (document.Links.Select.options[document.Links.Select.selectedIndex].value != "none"){
        location = document.Links.Select.options[document.Links.Select.selectedIndex].value}       
}
</script>
<?php } ?>
</table>
</body>
</html> 