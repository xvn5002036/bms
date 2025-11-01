<b>登陸</b><br />
<?php
// ********************************* 
// * 程序製作 By Worm QQ:523266656 *
// *                               *
// * 轉載或修改發佈請保留此版權！  *
// *                               *
// *  Http://Www.WormShow.com      *
// *                               *
// * WormSuperAdmin V1.3 08.07.15  *
// *********************************   

	if (!isset($_POST['submit'])){
	//let's prep an error messages
	if (isset($_GET['error'])){
		if (($_GET['error']) == "invalid"){
		echo ("<font color=\"red\">Error:Invalid username/password combination.</br>錯誤:您輸入的用戶名或密碼無效.</font><br />");}
		if (($_GET['error']) == "nli"){
		echo ("<font color=\"red\">Error:You must be logged in to access the User CP.</br>錯誤:您還沒有登陸無權操作.</font><br />");}
	}

	//present the login form
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=login" method="post">
	<input type="text" name="username" maxlength="12"><br />
	<small>用戶名</small><br />
	<br />
	<input type="password" name="password" maxlength="12"><br />
	<small>密碼</small><br />
	<br />
	<input type="submit" name="submit" value="登陸">
	</form>
	<?php
 }else{
	//preventative steps
	$username = stripslashes($_POST['username']);
	$password = stripslashes($_POST['password']);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	if (($username == $SuperAdminUser) and ($password == $SuperAdminPass)){

	
    //disconnect from the database
    mysql_close();
    
    //sassign session variables
	$_SESSION['gmaccess'] = "granted";
	$_SESSION['gmusername'] = $username;
	
    //redirect back to user control pannel with welcome
	header("Location: index.php?page=ServerCfg&welcome=yes");
 	}else{
    //redirect back to login page with error
	header("Location: index.php?page=login&error=invalid");}
 }
?>
