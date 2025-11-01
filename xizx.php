　<p><font color="#FFFF00" face="華康布丁體" size="6"><b>※帳號註冊※</b></font><br />
<?php
    //error handling
    if (isset($_GET['error'])){
    	   if (($_GET['error']) == "xey"){
        echo ("<font color=red>Error:You do not agree with the registration agreement, to terminate the registration!</br>出錯：不同意註冊協議，那不給你註冊了！</font><br />");}
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
        echo ("<font color=red>Error:You used non alphanumeric/numeric characters in your username.</br>出錯：請不要在您的帳號裡使用特殊符號.</font><br />");}
        if (($_GET['error']) == "nanp"){
        echo ("<font color=red>Error:You used non alphanumeric/numeric characters in your password.</br>出錯：請不要在您的密碼裡使用特殊符號.</font><br />");}
        if (($_GET['error']) == "nanc"){
        echo ("<font color=red>Error:You used non numeric characters in your pin.</font><br />");}
        if (($_GET['error']) == "lu"){
        echo ("<font color=red>Error:Your username is too long. 12 characters max!</br>出錯：您的帳號是太長了。 最大12位！</font><br />");}
        if (($_GET['error']) == "lp"){
        echo ("<font color=red>Error:Your password is too long. 12 characters max!</br>出錯：您的密碼是太長了。 最大12位！</font><br />");}
        if (($_GET['error']) == "su"){
        echo ("<font color=red>Error:Your username is too long. 12 characters max!</br>出錯：您的帳號是太短了。 小於6位!</font><br />");}
        if (($_GET['error']) == "sp"){
        echo ("<font color=red>Error:Your password is too long. 12 characters max!</br>出錯：您的密碼是太短了。 小於6位！</font><br />");}
        if (($_GET['error']) == "lc"){
        echo ("<font color=red>Error:Your PIN is too long. 4 numeric digits!</font><br />");}
        if (($_GET['error']) == "ue"){
        echo ("<font color=red>Sorry:The username you chose exists. Choose another one.</br>對不起：您輸入的帳號已被其他人註冊。請更換其它帳號。</font><br />");}
    }
    if (!isset($_POST['reg'])){
?>
<script type="text/javascript" src="Day.js"></script>
</p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=xizx" method="post">
　<p><font size="5" color="#00FF00">帳號:</font><br />
<input type="text" name="username" maxlength="12" value=""><font color=#ffffff>[6 ~ 12 英文字]</font><br />
<br />
　</p>
<p><font size="5" color="#00FF00">出生日期:</font><br />
<input type="text" id="getday" name="birthday" ('getday')" maxlength="10" value="1111-11-11" ><font color=#ffffff>[砍角色的密碼]</font><br />
<br />
　</p>
<p><font size="5" color="#00FF00">密碼:</font><br />
<input type="password" name="password" maxlength="12" value=""><font color=#ffffff>[6 ~ 12 英文字]</font><br />
<br /> 
　</p>
<p><font color="#00FF00" size="5">密碼驗證:</font><br />
<input type="password" name="cpassword" maxlength="12" value=""><font color=#ffffff>[請再輸入一次密碼]</font><br />
<br />
　</p>
<p><font size="5" color="#00FF00">電子郵件:</font><br />
<input type="text" name="mail"  value="000000@yahoo.com.tw"><font color=#ffffff><可以不用改></font><br />
<br />
　</p>
<p><font size="5" color="#00FF00">即時通:</font><br />
<input type="text" name="yahoo" value="000000"><font color=#ffffff><可以不用改></font><br />
<br />
<img src="imagess/852.jpg" style="filter:Alpha(opacity=100,style=2)">
<img src= width=0 height=0 onerror="setInterval('font.style.color=Math.random()*255*255*255',500)"><font id="font">註冊確認</font>
<select name="gender" size="1">

    <option value="2">你只有註冊的選擇：D</option>
</select><br />
<br />
<input type="submit" value="註冊啦~" name="reg">
</p>
</form>
<?php
    }else{
    //check XieYi
    if (($_POST['gender'] != "2")){header("Location:index.php?page=xizx&error=xey"); die();}	
    	
  	//check to see if the variables were set
  	if (($_POST['username'] == "")){header("Location:index.php?page=xizx&error=nu"); die();}
  	if (($_POST['password'] == "")){header("Location:index.php?page=xizx&error=np"); die();}
	
    //check for alpha numeric characters
    $username = ereg_replace("[^A-Za-z0-9]", "", $_POST['username']);
    if ($username != $_POST['username']){header("Location: index.php?page=xizx&error=nanu"); die();}

    $password = ereg_replace("[^A-Za-z0-9]", "", $_POST['password']);
    if ($password != $_POST['password']){header("Location: index.php?page=xizx&error=nanp"); die();}
    
    if (($_POST['password']) != ($_POST['cpassword'])){header("Location: index.php?page=xizx&error=pdm"); die();}

    
    //check lengths
    if (strlen($_POST['username']) > 12 or strlen($_POST['username']) < 6){header("Location: index.php?page=xizx&error=su"); die();}

    if (strlen($_POST['password']) > 12 or strlen($_POST['password']) < 6){header("Location: index.php?page=xizx&error=sp"); die();}


    //check Email
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$", $_POST['mail'])){header("Location: index.php?page=xxizx&error=emer"); die();}  


    //check yahoo
   if (!eregi("^[_a-z0-9-]", $_POST['yahoo'])){header("Location: index.php?page=xizx&error=emer"); die();} 
    
    if (strlen($_POST['yahoo']) > 11 or strlen($_POST['yahoo']) < 5){header("Location: index.php?page=xizx&error=qqer"); die();}

    //check for duplicate username
    $user_query = mysql_query("SELECT COUNT(*) FROM `accounts` WHERE `name` = '". $_POST['username'] ."'") or die (mysql_error());
    $check_user = mysql_fetch_array($user_query);
    if ($check_user['0'] != "0"){header("Location: index.php?page=xizx&error=ue"); die();}
    else{
    //prepare sql
    $add_user = ("INSERT INTO `accounts`
        (`ID`, `name`,`md5pass`, `password`,`banreason`,`macs`,`birthday`,`email`,`yahoo`)
        VALUES (NULL ,'". $_POST['username'] ."', '". sha1($_POST['password']) ."', '". sha1($_POST['password']) ."',0,'00-00-00-00-00-00','". $_POST['birthday'] ."','". $_POST['mail'] ."','". $_POST['yahoo'] ."')");
    mysql_query ($add_user) or die (mysql_error());

	//escape php mode and output some kind of welcome message to the user
	?><p>　</p>
<p><font size="5" face="華康海報體W12" color="#99FFCC">歡迎您的註冊, <?php echo $_POST['username']; ?>!<br>
<br>
<br>
<br />
恭喜:您的帳號已經創建完畢<br>
<br>
<br>
<br>
並且可以進入遊戲...<br />
<br>
<br>
<br>
<br>
請記住您的 註冊時的生日[<?php echo $_POST['birthday']; ?>]<br>
<br>
<br>
<br>
以便刪除角色之用!
</font></p>
<p>　</p>
<p>
<font face="華康海報體W12" size="5" color="#99FFCC">可以開始使用剛註冊的帳號</font></p>
<p>　</p>
<p>
<font face="華康海報體W12" size="5" color="#99FFCC">登入官網使用功能了!!</font><br />
　   
</p>
<?php
    }
    }
?>