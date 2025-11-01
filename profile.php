<style type="text/css">
<!--
body,td,th {
	font-family: 細明體;
	font-size: 12px;
}
-->
</style><b> &#8759;&#8759;修改密碼&#8759;&#8759;　<br>用戶ID:<?php echo $_SESSION['user_id']; ?></b><br />
<?php
	if (!isset($_POST['submit'])){
	//error handling
    if (isset($_GET['error'])){
    	  if (($_GET['error']) == "mmcdmin"){
        echo ("<font color=red>出錯：您的密碼太短了。 小於6位！</font><br />");}
        if (($_GET['error']) == "mmcdmax"){
        echo ("<font color=red>出錯：您的密碼太短了。 小於6位！</font><br />");}
        if (($_GET['error']) == "wp"){
        echo ("<font color=red>Incorrect password.</font><br />");}
        if (($_GET['error']) == "pdm"){
        echo ("<font color=red>Passwords don't match.</font><br />");}
        if (($_GET['error']) == "nanp"){
        echo ("<font color=red>You used non alphanumeric/numeric characters in your password.</font><br />");}
        if (($_GET['error']) == "lp"){
        echo ("<font color=red>Your password is too long. 12 characters max!</font><br />");}
	}
	//fetch current information
	$query = mysql_query("SELECT * FROM `accounts` WHERE `ID` = ". $_SESSION['user_id'] ."");
	$data = mysql_fetch_array($query);
	
	//form
	?>
	<form action="index.php?page=profile" method="post">
	<input type="text" name="username" value="<?php echo $data['name']; ?>" readonly><br/>
	帳號名 [不能修改]<br />
	<input type="password" name="password" maxlength="12"><br />
	原始密碼<br />
	<input type="password" name="new_password" maxlength="12"><br />
	新的密碼 最長１２位<br />
	<input type="password" name="cnew_password" maxlength="12"><br />
	確認密碼.<br />
	<br />
	<input type="submit" name="submit" value="修改"> <input type="reset" name="reset" value="重置">
	</form>
<?php
	}else{
	//fetch current information
	$query = mysql_query("SELECT * FROM `accounts` WHERE `ID` = ". $_SESSION['user_id'] ."");
	$data = mysql_fetch_array($query);
	
	//let's check for errors
	if (strlen($_POST['new_password']) < 6 ){header("Location: index.php?page=ucp&section=profile&error=mmcdmin"); die();}
	if (strlen($_POST['new_password']) > 12 ){header("Location: index.php?page=ucp&section=profile&error=mmcdmax"); die();}
	if (sha1($_POST['password']) != $data['md5pass']){header("Location: index.php?page=ucp&section=profile&error=wp"); die();}
	if (($_POST['new_password']) != ($_POST['cnew_password'])){header("Location: index.php?page=ucp&section=profile&error=pdm"); die();}
	
	//check alphanumerical stuff and length
    $password = ereg_replace("[^A-Za-z0-9]", "", $_POST['password']);
    if ($password != $_POST['password']){header("Location: index.php?page=register&error=nanp"); die();}
	if (strlen($_POST['new_password']) > 12){header("Location: index.php?page=register&error=lp"); die();}
	
	//prepare sql
	$sql = ("UPDATE `accounts` SET `password` ='". sha1($_POST['new_password']) ."'  WHERE `ID` = '". $_SESSION['user_id'] ."'");
	mysql_query ($sql) or die(mysql_error());
	$sql = ("UPDATE `accounts` SET `md5pass` ='". sha1($_POST['new_password']) ."'  WHERE `ID` = '". $_SESSION['user_id'] ."'");
	mysql_query ($sql) or die(mysql_error());
	$sql = ("UPDATE `accounts` SET `salt` =NULL  WHERE `ID` = '". $_SESSION['user_id'] ."'");
	mysql_query ($sql) or die(mysql_error());
	//escape php and print success message
?>
修改成功! 您的密碼已經更新!
<?php
	}
?>