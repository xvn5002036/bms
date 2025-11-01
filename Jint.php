<?php

//By  痴仔王 製作 2008.6.29 即時通：cpps0402＠yahoo.com.tw  轉載及修改請保留版權信息

	if (!isset($_SESSION['access'])){
	header("Location: index.php?page=login&error=nli");
	die();}
	
	if (!isset($_GET['id'])){
	header("Location: index.php?page=Jint&error=kid");
	die();}
mysql_query("set names 'big5'");
$query = mysql_query("SELECT * FROM `characters` WHERE `id` = '". $_GET['id'] ."'");
$data = mysql_fetch_array($query)
?>

<?php


	if (!isset($_POST['submit'])){
		
?>

　<br>處理ID:<?php echo $_GET['id']; ?><br>
<?php
		
	if (isset($_GET['error'])){
		if (($_GET['error']) == "bxsz"){
		echo ("<font color=\"red\">錯誤:輸入必須是數字的.</font><br />");}
		if (($_GET['error']) == "yhzx"){
		echo ("<font color=\"red\">錯誤:您的帳號當前在線!</font><br />");}
		if (($_GET['error']) == "dsxy1"){
		echo ("<font color=\"red\">錯誤:您角色剩餘點數為 0.</font><br />");}
    if (($_GET['error']) == "dsbz"){
		echo ("<font color=\"red\">錯誤:您角色剩餘點不足本此加點.</font><br />");}
    if (($_GET['error']) == "999"){
		echo ("<font color=\"red\">錯誤:您的能力值不能超過最大值 32760.</font><br />");}
    if (($_GET['error']) == "allnull"){
		echo ("<font color=\"red\">錯誤:您至少填寫一個項目.</font><br />");}

	}		
		
?>


	<form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=Jint&JinP=Jinto&id=<?php echo $data['id']; ?>" method="post">

<b>
<font color=00CC99>角色名稱:</font>  <font color=blue><?php echo $data['name']; ?></font>　<br><font color=00CC99>當前等級:</font> <?php echo $data['level']; ?>　<br><font color=00CC99>剩餘點數:</font> <font color=red><?php echo $data['ap']; ?></font> <br>
<br>
<font color=00CC99>當前力量:</font> <font color=green><?php echo $data['str']; ?></font>　力量+<input type="text" name="Jstr" maxlength="4" size="3" >點<br>
<font color=00CC99>當前敏捷:</font> <font color=green><?php echo $data['dex']; ?></font>　敏捷+<input type="text" name="Jdex" maxlength="4" size="3" >點<br>
<font color=00CC99>當前智慧:</font> <font color=green><?php echo $data['int']; ?></font>　智慧+<input type="text" name="Jint" maxlength="4" size="3" >點<br>
<font color=00CC99>當前幸運:</font> <font color=green><?php echo $data['luk']; ?></font>　幸運+<input type="text" name="Jluk" maxlength="4" size="3" >點<br>
</b>
	<br /> <font color=red><b>安全提示:確認後在點加點!</b></font>
	<input type="submit" name="submit" value="加點">
	</form>
	
<?php
}else{
	


//檢測是否非法提交信息
if(!is_numeric($_GET['id']))
		die('<h1> 非法操作！ </h1>');	
if(($data['accountid']) != ($_SESSION['user_id']))
    die('<h1> 非法操作！ </h1>');
//添加默認值
if (($_POST['Jstr']) != "")
{
   if(!is_numeric($_POST['Jstr'])){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=bxsz");
   	die();}
   $query = mysql_query("SELECT * FROM `accounts` WHERE `ID` = ". $_SESSION['user_id'] ."");
   $data = mysql_fetch_array($query);
   if(($data['loggedin']) == "1"){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=yhzx");
   	die();}
   $query = mysql_query("SELECT * FROM `characters` WHERE `id` = ". $_GET['id'] ."");
   $data = mysql_fetch_array($query);
   if(($data['ap']) < "1"){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=dsxy1");
   	die();}
   if(($data['ap']) < ($_POST['Jstr'])){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=dsbz");
   	die();}
   if(($data['str'])+($_POST['Jstr']) > 32760 ){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=999");
   	die();}
   $tempjd=(($data['str'])+($_POST['Jstr']));
   $sql = ("UPDATE `characters` SET `str` ='". $tempjd ."'  WHERE `id` = '". $_GET['id'] ."'");
	 mysql_query ($sql) or die(mysql_error());
	 $tempjd=(($data['ap'])-($_POST['Jstr']));
	 $sql = ("UPDATE `characters` SET `ap` ='". $tempjd ."'  WHERE `id` = '". $_GET['id'] ."'");
	 mysql_query ($sql) or die(mysql_error());
  }
   
if (($_POST['Jdex']) != "")
{
   if(!is_numeric($_POST['Jdex'])){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=bxsz");
   	die();}
   $query = mysql_query("SELECT * FROM `accounts` WHERE `ID` = ". $_SESSION['user_id'] ."");
   $data = mysql_fetch_array($query);
   if(($data['loggedin']) == "1"){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=yhzx");
   	die();}
   $query = mysql_query("SELECT * FROM `characters` WHERE `id` = ". $_GET['id'] ."");
   $data = mysql_fetch_array($query);
   if(($data['ap']) < "1"){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=dsxy1");
   	die();}
   if(($data['ap']) < ($_POST['Jdex'])){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=dsbz");
   	die();}
   if(($data['dex'])+($_POST['Jdex']) > 32760 ){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=999");
   	die();}
   $tempjd=(($data['dex'])+($_POST['Jdex']));
   $sql = ("UPDATE `characters` SET `dex` ='". $tempjd ."'  WHERE `id` = '". $_GET['id'] ."'");
	 mysql_query ($sql) or die(mysql_error());
	 $tempjd=(($data['ap'])-($_POST['Jdex']));
	 $sql = ("UPDATE `characters` SET `ap` ='". $tempjd ."'  WHERE `id` = '". $_GET['id'] ."'");
	 mysql_query ($sql) or die(mysql_error());

 }
if (($_POST['Jint']) != "")
{
   if(!is_numeric($_POST['Jint'])){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=bxsz");
   	die();}
   $query = mysql_query("SELECT * FROM `accounts` WHERE `ID` = ". $_SESSION['user_id'] ."");
   $data = mysql_fetch_array($query);
   if(($data['loggedin']) == "1"){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=yhzx");
   	die();}
   $query = mysql_query("SELECT * FROM `characters` WHERE `id` = ". $_GET['id'] ."");
   $data = mysql_fetch_array($query);
   if(($data['ap']) < "1"){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=dsxy1");
   	die();}
   if(($data['ap']) < ($_POST['Jint'])){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=dsbz");
   	die();}
   if(($data['int'])+($_POST['Jint']) > 32760 ){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=999");
   	die();}
   $tempjd=(($data['int'])+($_POST['Jint']));
   $sql = ("UPDATE `characters` SET `int` ='". $tempjd ."'  WHERE `id` = '". $_GET['id'] ."'");
	 mysql_query ($sql) or die(mysql_error());
	 $tempjd=(($data['ap'])-($_POST['Jint']));
	 $sql = ("UPDATE `characters` SET `ap` ='". $tempjd ."'  WHERE `id` = '". $_GET['id'] ."'");
	 mysql_query ($sql) or die(mysql_error());

 }
if (($_POST['Jluk']) != "")
{
   if(!is_numeric($_POST['Jluk'])){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=bxsz");
   	die();}
   $query = mysql_query("SELECT * FROM `accounts` WHERE `ID` = ". $_SESSION['user_id'] ."");
   $data = mysql_fetch_array($query);
   if(($data['loggedin']) == "1"){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=yhzx");
   	die();}
   $query = mysql_query("SELECT * FROM `characters` WHERE `id` = ". $_GET['id'] ."");
   $data = mysql_fetch_array($query);
   if(($data['ap']) < "1"){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=dsxy1");
   	die();}
   if(($data['ap']) < ($_POST['Jluk'])){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=dsbz");
   	die();}
   if(($data['luk'])+($_POST['Jluk']) > 32760 ){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=999");
   	die();}
   $tempjd=(($data['luk'])+($_POST['Jluk']));
   $sql = ("UPDATE `characters` SET `luk` ='". $tempjd ."'  WHERE `id` = '". $_GET['id'] ."'");
	 mysql_query ($sql) or die(mysql_error());
	 $tempjd=(($data['ap'])-($_POST['Jluk']));
	 $sql = ("UPDATE `characters` SET `ap` ='". $tempjd ."'  WHERE `id` = '". $_GET['id'] ."'");
	 mysql_query ($sql) or die(mysql_error());

 }
 
 if (($_POST['Jluk']) == "" and ($_POST['Jint']) == "" and ($_POST['Jdex']) == "" and ($_POST['Jstr']) == ""){
   	header("Location:index.php?page=Jint&JinP=Jinto&id=". $_GET['id'] ."&error=allnull");
   	die();}  	



    
?>

 <br><br><b>恭喜,加點成功!<br><br> 
<font color=00CC99>角色名稱:</font>  <font color=blue><?php echo $data['name']; ?></font>　<br>
<?php
if (($_POST['Jstr']) != ""){
?>
<font color=00CC999>力量增加:</font>  <font color=blue><?php echo $_POST['Jstr']; ?></font>　<br>
<?php
}
if (($_POST['Jdex']) != ""){
?>
<font color=00CC999>敏捷增加:</font>  <font color=blue><?php echo $_POST['Jdex']; ?></font>　<br>
<?php
}
if (($_POST['Jint']) != ""){
?>
<font color=00CC999>智慧增加:</font>  <font color=blue><?php echo $_POST['Jint']; ?></font>　<br>
<?php
}
if (($_POST['Jluk']) != ""){
?>
<font color=00CC999>幸運增加:</font>  <font color=blue><?php echo $_POST['Jluk']; ?></font>　<br>
</b>

<?php
}
}
?>