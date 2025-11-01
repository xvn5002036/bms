<?php
// ********************************* 
// * 程序製作 By Worm QQ:523266656 *
// *                               *
// * 轉載或修改發佈請保留此版權！  *
// *                               *
// *  Http://Www.WormShow.com      *
// *                               *
// * WodinmsWeb Ver 1.2  08.06.20  *
// *********************************   
?>

<?php
	//判定是否登陸
	if (!isset($_SESSION['access'])){
	header("Location: index.php?page=login&error=nli");
	die();}
    //錯誤信息顯示
    if (isset($_GET['error'])){
        if (($_GET['error']) == "emer"){
        echo ("<font color=red>Error:E-Mail Incorrect.</br>出錯：E-Mail 不正確.</font><br />");}
        if (($_GET['error']) == "qqer"){
        echo ("<font color=red>Error:QQ Incorrect.</br>出錯：QQ號碼 不正確.</font><br />");}
		if (($_GET['error']) == "wter"){
        echo ("<font color=red>Error:Issue Incorrect.</br>出錯：密保問題 太長或太短：</br>中文請在４～１０位之間．</br>英文請在８～２０個位間．</font><br />");}
		if (($_GET['error']) == "daer"){
        echo ("<font color=red>Error:Issue Incorrect.</br>出錯：密保答案 太長或太短：</br>中文請在４～１０位之間．</br>英文請在８～２０個位間．</font><br />");}
    }
	else
	{
	if(!isset($_POST['addinfoOK'])){ 
?>  
	<p><font color=red>對不起,您是第一次登錄賬號管理.<br>請您填寫資料補充您的註冊信息！</font></p>
<?php
}
}

	//判定是否提交
if (!isset($_POST['addinfoOK'])){
?>

<form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?page=ucp&section=AddedInfo">
  <p> 用戶名 ：　　　　　　　　 您的生日:<br />
    <input name="Temp1" type="text" value="<?php echo $_SESSION['username']; ?>" size="20" disabled/>
    <input name="Temp2" type="text" value="<?php echo $_SESSION['birthday']; ?>" size="20" disabled="disabled"/>
    <br />
    保密郵箱 E-Mail ：　　　　　QQ 號碼：<br />
    <input name="mail" type="text" size="20" />
    <input name="QQ" type="text" size="20" />
  <br />
  密保問題:(如: 你多大?)　　　密保答案:<br />
  <input name="mbwt" type="text" size="20" />
  <input name="mbda" type="text" size="20" />
  <br />
  <br />
  請牢記密碼保護以免賬號遺失給您造成不便！
  <p>

    <input type="submit" name="addinfoOK" value="提交" />
    <input type="reset" name="Submit2" value="重置" />
    <br />
</form>
<?php
}
else
{
    //check Email
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$", $_POST['mail']))
	{header("Location: index.php?page=ucp&section=AddedInfo&error=emer"); die();}  

    //check QQ
   if ((ereg_replace("[^0-9]", "", $_POST['QQ']))!=$_POST['QQ'])
	{header("Location: index.php?page=ucp&section=AddedInfo&error=qqer"); die();}
    
   if (strlen($_POST['QQ']) > 11 or strlen($_POST['QQ']) < 5)
	{header("Location: index.php?page=ucp&section=AddedInfo&error=qqer"); die();}
	
	if (strlen($_POST['mbwt']) > 20 or strlen($_POST['mbwt']) < 8)
	{header("Location: index.php?page=ucp&section=AddedInfo&error=wter"); die();}
	
	if (strlen($_POST['mbda']) > 20 or strlen($_POST['mbda']) < 8)
	{header("Location: index.php?page=ucp&section=AddedInfo&error=daer"); die();}
	
	// 添加數據
$query = mysql_query("SELECT * FROM `WormPHP_ClientDB` WHERE `W_username` = '". $_SESSION['username'] ."'");
$num = mysql_num_rows($query);
if ($num !=1)
{
mysql_query("set names 'gbk'");
$add_Wormuser = ("INSERT INTO `WormPHP_ClientDB`(`id`, `W_username`,`W_user512pass`, `W_ban`,`W_CreateTime`,`W_Vip`,`W_Money`,`W_Consumption`,`W_userEmail`,`W_userQQ`,`W_PassKeyWT`,`W_PassKeyDA`) VALUES (NULL,'". $_SESSION['username']."','Worm','0',NULL,'0','0','0','". $_POST['mail']."','". $_POST['QQ']."','". $_POST['mbwt']."','". $_POST['mbda']."')");
$update_Wormuser = ("UPDATE `accounts` SET `email` ='".$_POST['mail']."'  WHERE `name` = '".$_SESSION['username']."'");$_SESSION['email']=$_POST['mail'];
mysql_query ($add_Wormuser) or die (mysql_error());	
mysql_query ($update_Wormuser) or die (mysql_error());
session_destroy();
echo "<meta http-equiv=Refresh content=3;url=index.php?page=login>";	
?>
補充成功！<br> 請重新登陸,三秒後轉向登陸頁面,請稍後.....
<?php
}else{
?>
已經補充過了！
<?php
}}
?>