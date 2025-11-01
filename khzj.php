<b> &#8759;&#8759;帳號自救&#8759;&#8759;　<br>用戶ID:<?php echo $_SESSION['user_id']; ?></b><br />
<?php
	if (!isset($_POST['zj'])){
	//fetch current information
	$query = mysql_query("SELECT * FROM `accounts` WHERE `ID` = ". $_SESSION['user_id'] ."");
	$data = mysql_fetch_array($query);
	//form
	?>
	<form action="index.php?page=khzj" method="post">
	<input type="text" name="username" value="<?php echo $data['name']; ?>" readonly><br/>
	<br />
	<input type="submit" name="zj" value="自救">
	</form>
<?php
	}else{
	//fetch current information
	$sql = ("UPDATE `accounts` SET `loggedin` =0  WHERE `ID` = '". $_SESSION['user_id'] ."'");
	mysql_query ($sql) or die(mysql_error());
	//escape php and print success message
?>
自救成功!!
<?php
	}
?>