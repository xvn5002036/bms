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


<b>Register</b><br />
<?php
    //顯示 Error 信息
    if (isset($_GET['error'])){
    	   if (($_GET['error']) == "xey"){
        echo ("<font color=red>Error:You do not agree with the registration agreement, to terminate the registration!</br>出錯：你不同意註冊協議，註冊終止！</font><br />");}
        if (($_GET['error']) == "nu"){
        echo ("<font color=red>Error:You did not enter a username.</br>出錯：您沒有輸入註冊用戶名.</font><br />");}
        if (($_GET['error']) == "np"){
        echo ("<font color=red>Error:You did not enter a password.</br>出錯：您沒有輸入用戶密碼.</font><br />");}
        if (($_GET['error']) == "pdm"){
        echo ("<font color=red>Error:Passwords don't match.</br>出錯：確認密碼不匹配.</font><br />");}
        if (($_GET['error']) == "emer"){
        echo ("<font color=red>Error:E-Mail Incorrect.</br>出錯：E-Mail 不正確.</font><br />");}
        if (($_GET['error']) == "qqer"){
        echo ("<font color=red>Error:yahoo Incorrect.</br>出錯：即時通 不正確.</font><br />");}
        if (($_GET['error']) == "nanu"){
        echo ("<font color=red>Error:You used non alphanumeric/numeric characters in your username.</br>出錯：請不要在您的用戶名裡使用特殊符號.</font><br />");}
        if (($_GET['error']) == "nanp"){
        echo ("<font color=red>Error:You used non alphanumeric/numeric characters in your password.</br>出錯：請不要在您的用戶密碼裡使用特殊符號.</font><br />");}
        if (($_GET['error']) == "nanc"){
        echo ("<font color=red>Error:You used non numeric characters in your pin.</font><br />");}
        if (($_GET['error']) == "lu"){
        echo ("<font color=red>Error:Your username is too long. 12 characters max!</br>出錯：您的用戶名是太長了。 最大12位！</font><br />");}
        if (($_GET['error']) == "lp"){
        echo ("<font color=red>Error:Your password is too long. 12 characters max!</br>出錯：您的用戶密碼是太長了。 最大12位！</font><br />");}
        if (($_GET['error']) == "su"){
        echo ("<font color=red>Error:Your username is too Short. 6 characters max!</br>出錯：您的用戶名是太短了。 小於6位!</font><br />");}
        if (($_GET['error']) == "sp"){
        echo ("<font color=red>Error:Your password is too Short. 6 characters max!</br>出錯：您的用戶密碼是太短了。 小於6個位！</font><br />");}
        if (($_GET['error']) == "lc"){
        echo ("<font color=red>Error:Your PIN is too long. 4 numeric digits!</font><br />");}
        if (($_GET['error']) == "ue"){
        echo ("<font color=red>Sorry:The username you chose exists. Choose another one.</br>對不起：您輸入的用戶名已被其他人註冊。請更換其它用戶名。</font><br />");}
        if (($_GET['error']) == "wter"){
        echo ("<font color=red>Error:Issue Incorrect.</br>出錯：密保問題 太長或太短：</br>中文請在４～１０位之間．</br>英文請在８～２０個位間．</font><br />");}
        if (($_GET['error']) == "daer"){
        echo ("<font color=red>Error:Issue Incorrect.</br>出錯：密保答案 太長或太短：</br>中文請在４～１０位之間．</br>英文請在８～２０個位間．</font><br />");}

    }
    if (!isset($_POST['submit'])){
//註冊表單 Start
?>
<script type="text/javascript" src="Day.js"></script>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=register" method="post">
用戶名:　　　　　　　　　　 出生日期:<br />
<input type="text" name="username" maxlength="12" value="">　 <input type="text" id="getday" name="birthday" onClick="javascript:ShowCalendar('getday')" maxlength="10" readonly><a href="#" onClick="javascript:ShowCalendar('getday')">選擇</a><br />
<small>6 ~ 12 英文OR數字    　　　　　　　　   XXXX-YY-ZZ</small><br />
<br />
密碼:　　　　　　　　　　　 密碼校驗:<br />
<input type="password" name="password" maxlength="12" value="">　 <input type="password" name="cpassword" maxlength="12" value=""><br />
<small>6 ~ 12 英文OR數字</small><br />
<br />
電子郵件:　　　　　　　　　 即時通:<br />
<input type="text" name="mail"  value="">　 <input type="text" name="yahoo"  ><br />        　　　　　　　
<br />
密保問題:　　　　　　　　　 密保答案:<br />
<input type="text" name="mbwt"  value="">　 <input type="text" name="mbda"  ><br />
<small>Password Key</small><br />
<br />
用戶協議:
<select name="gender">
    <option value="0">－－－－</option>
    <option value="1">拒絕註冊</option>
    <option value="2">同意註冊</option>
</select><br />
<br />
<input type="submit" value="註冊" name="submit">
</form>
<?php
//註冊表單 End

    }else{
    //檢測用戶協議
    if (($_POST['gender'] != "2")){header("Location:index.php?page=register&error=xey"); die();}	
    	
  	//檢測用戶名密碼是否為空
  	if (($_POST['username'] == "")){header("Location:index.php?page=register&error=nu"); die();}
  	if (($_POST['password'] == "")){header("Location:index.php?page=register&error=np"); die();}
	
    //檢測用戶名密碼規範
    $username = ereg_replace("[^A-Za-z0-9]", "", $_POST['username']);
    if ($username != $_POST['username']){header("Location: index.php?page=register&error=nanu"); die();}

    $password = ereg_replace("[^A-Za-z0-9]", "", $_POST['password']);
    if ($password != $_POST['password']){header("Location: index.php?page=register&error=nanp"); die();}
    //檢測密碼複查是否正確
    if (($_POST['password']) != ($_POST['cpassword'])){header("Location: index.php?page=register&error=pdm"); die();}

    
    //檢測用戶名和密碼長度
    if (strlen($_POST['username']) > 12 or strlen($_POST['username']) < 6){header("Location: index.php?page=register&error=su"); die();}

    if (strlen($_POST['password']) > 12 or strlen($_POST['password']) < 6){header("Location: index.php?page=register&error=sp"); die();}


    //檢測電子郵件是否合法
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$", $_POST['mail'])){header("Location: index.php?page=register&error=emer"); die();}  

    //檢測QQ是否合法 0~9 數字 5~11位
    if ((ereg_replace("[^0-9]", "", $_POST['QQ']))!=$_POST['QQ']){header("Location: index.php?page=register&error=qqer"); die();}
    
    if (strlen($_POST['QQ']) > 11 or strlen($_POST['QQ']) < 5){header("Location: index.php?page=register&error=qqer"); die();}
    //檢測密保答
    if (strlen($_POST['mbwt']) > 20 or strlen($_POST['mbwt']) < 8){header("Location: index.php?page=register&error=wter"); die();}
	  if (strlen($_POST['mbda']) > 20 or strlen($_POST['mbda']) < 8){header("Location: index.php?page=register&error=daer"); die();}
    //查詢數據庫和檢測是否存在此用戶
    $user_query = mysql_query("SELECT COUNT(*) FROM `accounts` WHERE `name` = '". $_POST['username'] ."'") or die (mysql_error());
    $check_user = mysql_fetch_array($user_query);
    if ($check_user['0'] != "0"){header("Location: index.php?page=register&error=ue"); die();}
    else{
    //全部檢測通過 <繼續> 
    //添加od表數據庫命令
    $add_user = ("INSERT INTO `accounts`
        (`ID`, `name`,`password`,`banreason`,`macs`,`birthday`,`email`)
        VALUES (NULL ,'". $_POST['username'] ."', '". sha1($_POST['password']) ."',0,'00-00-00-00-00-00','". $_POST['birthday'] ."','". $_POST['mail'] ."')");
    //添加Worm表數據庫命令
   $add_Wormuser = ("INSERT INTO `WormPHP_ClientDB`(`id`, `W_username`,`W_user512pass`, `W_ban`,`W_CreateTime`,`W_Vip`,`W_Money`,`W_Consumption`,`W_userEmail`,`W_userQQ`,`W_PassKeyWT`,`W_PassKeyDA`) VALUES (NULL,'". $_POST['username']."','Worm','0',NULL,'0','0','0','". $_POST['mail']."','". $_POST['QQ']."','". $_POST['mbwt']."','". $_POST['mbda']."')");
    //執行數據庫命令
    mysql_query ($add_user) or die (mysql_error());
    mysql_query ($add_Wormuser) or die (mysql_error());
	//以下為註冊成功提示信息
	?>
歡迎您的註冊, <?php echo $_POST['username']; ?>!<br />
恭喜:您的賬號已經創建完畢,並且可以進入遊戲...<br />
請記住您的 註冊時的生日[<?php echo $_POST['birthday']; ?>]以便刪除角色之用!
<br />
<br />
<i>[請下載 登陸器 進入遊戲,開始你的冒險世界!]</i>
	<?php
    }
    }
//Uptime 08.06.20
?>
