<style type="text/css">
<!--
body,td,th {
	font-family: 娃娃體;
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
        echo ("<font color=red>Incorrect name.</font><br />");}
        if (($_GET['error']) == "pdm"){
        echo ("<font color=red>names don't match.</font><br />");}
        if (($_GET['error']) == "nanp"){
        echo ("<font color=red>You used non alphanumeric/numeric characters in your name.</font><br />");}
        if (($_GET['error']) == "lp"){
        echo ("<font color=red>Your name is too long. 12 characters max!</font><br />");}
	}
	//fetch current information
	$query = mysql_query("SELECT * FROM `characters` WHERE `ID` = ". $_SESSION['user_id'] ."");
	$data = mysql_fetch_array($query);
	
	//form
	?>
	<form action="index.php?page=profile" method="post">
	<input type="text" name="username" value="<?php echo $data['name']; ?>" readonly><br/>
	帳號名 [不能修改]<br />
	<input type="name" name="name" maxlength="12"><br />
	原始密碼<br />
	<input type="name" name="new_name" maxlength="12"><br />
	新的密碼 最長１２位<br />
	
	<br />
	<input type="submit" name="submit" value="修改"> <input type="reset" name="reset" value="重置">
	</form>
<?php
	}else{
	//fetch current information
	$query = mysql_query("SELECT * FROM `characters` WHERE `ID` = ". $_SESSION['user_id'] ."");
	$data = mysql_fetch_array($query);
	
	//let's check for errors
	if (strlen($_POST['new_name']) < 6 ){header("Location: index.php?page=ucp&section=profile&error=mmcdmin"); die();}
	if (strlen($_POST['new_name']) > 12 ){header("Location: index.php?page=ucp&section=profile&error=mmcdmax"); die();}
	if (sha1($_POST['name']) != $data['md5pass']){header("Location: index.php?page=ucp&section=profile&error=wp"); die();}
	if (($_POST['new_name']) != ($_POST['cnew_name'])){header("Location: index.php?page=ucp&section=profile&error=pdm"); die();}
	
	//check alphanumerical stuff and length
    $name = ereg_replace("[^A-Za-z0-9]", "", $_POST['name']);
    if ($name != $_POST['name']){header("Location: index.php?page=register&error=nanp"); die();}
	if (strlen($_POST['new_name']) > 12){header("Location: index.php?page=register&error=lp"); die();}
	
	//prepare sql
	$sql = ("UPDATE `characters` SET `name` ='". sha1($_POST['new_name']) ."'  WHERE `ID` = '". $_SESSION['user_id'] ."'");
	mysql_query ($sql) or die(mysql_error());
	$sql = ("UPDATE `characters` SET `md5pass` ='". sha1($_POST['new_name']) ."'  WHERE `ID` = '". $_SESSION['user_id'] ."'");
	mysql_query ($sql) or die(mysql_error());
	$sql = ("UPDATE `characters` SET `salt` =NULL  WHERE `ID` = '". $_SESSION['user_id'] ."'");
	mysql_query ($sql) or die(mysql_error());
	//escape php and print success message
?>
修改成功! 您的密碼已經更新!
<?php
	}
?>