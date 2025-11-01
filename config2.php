<?php
$host['naam'] = 'localhost';                // my host
$host['gebruikersnaam'] = 'root';       // my database username
$host['wachtwoord'] = '';   // my database password
$host['databasenaam'] = 'odinms';       // my database name

$db = mysql_connect($host['naam'], $host['gebruikersnaam'], $host['wachtwoord']) OR die ('Cant connect to the database');
mysql_select_db($host['databasenaam'], $db);

$serverip = "abcd123.no-ip.biz";     //你服務器IP
$loginport = "8484";	     //你登陸服務器端口 默認:8484
$sql_db = "MilkTeaDock";       //你數據名
$sql_host = "localhost";     //你數據庫地址
$sql_user = "root";	     	//你數據庫用戶名
$sql_pass = "";		     	//你數據庫密碼
$logserv_name = "<b>服務器狀態</b>: ";		 //Status Server Name
$offline = "<s>關機</s>";  //Displays Offline Status
$online = "<u>開機</u>";	//Displays Online Status
?>
<?php
if ($row['job']=="910")
echo "超級管理員";
if ($row['job']=="900")
echo "管理員";
if ($row['job']=="0")
echo "新手";
if ($row['job']=="100")
echo "劍士";
if ($row['job']=="110")
echo "狂戰士";
if ($row['job']=="120")
echo "見習騎士";
if ($row['job']=="130")
echo "槍騎兵";
if ($row['job']=="111")
echo "十字軍";
if ($row['job']=="121")
echo "騎士";
if ($row['job']=="131")
echo "龍騎士";
if ($row['job']=="112")
echo "英雄";
if ($row['job']=="122")
echo "聖騎士";
if ($row['job']=="132")
echo "黑騎士";
if ($row['job']=="200")
echo "魔法師";
if ($row['job']=="210")
echo "火毒法師";
if ($row['job']=="220")
echo "冰雷法師";
if ($row['job']=="230")
echo "僧侶";
if ($row['job']=="211")
echo "火毒魔導士";
if ($row['job']=="221")
echo "冰雷魔導士";
if ($row['job']=="231")
echo "祭司";
if ($row['job']=="212")
echo "火毒大魔導士";
if ($row['job']=="222")
echo "冰雷大魔導士";
if ($row['job']=="231")
echo "主教";
if ($row['job']=="300")
echo "弓箭手";
if ($row['job']=="310")
echo "獵人";
if ($row['job']=="320")
echo "弩弓手";
if ($row['job']=="311")
echo "遊俠";
if ($row['job']=="321")
echo "狙擊手";
if ($row['job']=="312")
echo "箭神";
if ($row['job']=="322")
echo "神射手";
if ($row['job']=="400")
echo "盜賊";
if ($row['job']=="410")
echo "刺客";
if ($row['job']=="420")
echo "俠盜";
if ($row['job']=="411")
echo "暗殺者";
if ($row['job']=="421")
echo "神偷";
if ($row['job']=="412")
echo "夜使者";
if ($row['job']=="422")
echo "暗影神偷";
if ($row['job']=="500")
echo "海盜";
if ($row['job']=="510")
echo "打手";
if ($row['job']=="511")
echo "格鬥家";
if ($row['job']=="512")
echo "拳霸";
if ($row['job']=="520")
echo "槍手";
if ($row['job']=="521")
echo "神槍手";
if ($row['job']=="522")
echo "槍神";
?>