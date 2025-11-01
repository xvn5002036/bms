<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style>
<?php
mysql_query("set names 'big5'");
$query2 = mysql_query("SELECT COUNT(*) FROM `characters` WHERE `accountid` = '" .$_SESSION['user_id']. "'") or die (mysql_error());
$char_count = mysql_fetch_array($query2);?>
<b> &#8759;&#8759;創建角色&#8759;&#8759;　<br>用戶ID:<?php echo $_SESSION['user_id']; ?></b><br />
當前角色數:<?php echo $char_count['0']; ?><b>
<?php
    //error handling
    if (isset($_GET['error'])){
        if (($_GET['error']) == "nu"){
        echo ("<font color=red>出錯：您沒有輸入角色名稱.</font><br />");}
        if (($_GET['error']) == "lu"){
        echo ("<font color=red>出錯：您的角色太長了。 最多9個字！</font><br />");}
        if (($_GET['error']) == "su"){
        echo ("<font color=red>出錯：您的角色名太短了。 不能小於3個字!</font><br />");}
		if (($_GET['error']) == "xx"){
        echo ("<font color=red>角色已滿,無法創建角色!!!</font><br />");}
        if (($_GET['error']) == "ue"){
        echo ("<font color=red>對不起：您輸入的角色名稱已被其他人註冊。請更換其它角色名稱。</font><br />");}
    }
    if (!isset($_POST['crea'])){
?>
<script type="text/javascript" src="Day.js"></script>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=crea" method="post">
  <span class="STYLE1">在網站創建角色可用中文名字<br>
通過網頁創建的角色有100萬點數及200點能力點，點出生地圖第一個看到的NPC有10萬楓幣及裝備。 <br>
     初始地圖為楓之島</span><br>
    角色名:
    <input name="name" type="text" id="name" value="" size="18" maxlength="18"/>
   <p><span class="STYLE1"> 2-9個中文字or英文字<br />
    
    ★ID不可用特殊符號有的直接刪除角色☆</span><br />

髮型:<br />
    男:
    <input type="radio" name="hair" value="30000" />
    <img src="char/hair30000.png" width="38" height="22" />
    <input type="radio" name="hair" value="30020" />
    <img src="char/hair30020.png" width="44" height="38" />
    <input type="radio" name="hair" value="30030" />
    <img src="char/hair30030.png" width="35" height="22" /><br />
    女:
    <input type="radio" name="hair" value="31000" />
    <img src="char/hair31000.png" width="54" height="24" />
    <input type="radio" name="hair" value="31040" />
    <img src="char/hair31040.png" width="66" height="41" />
    <input type="radio" name="hair" value="31050" />
    <img src="char/hair31050.png" width="52" height="40" /><br />
    <br />
    臉型:<br />
    男:
    <input type="radio" name="face" value="20000" />
    <img src="char/face20000.png" width="26" height="16" />
    <input type="radio" name="face" value="20001" />
    <img src="char/face20001.png" width="26" height="16" />
    <input type="radio" name="face" value="20002" />
    <img src="char/face20002.png" width="24" height="13" /><br />
    女:
    <input type="radio" name="face" value="21000" />
    <img src="char/face21000.png" width="28" height="15" />
    <input type="radio" name="face" value="21001" />
    <img src="char/face21001.png" width="27" height="15" />
    <input type="radio" name="face" value="21002" />
    <img src="char/face21002.png" width="28" height="16" />
    <br />
    性別:
    <select name="xb"  type="text">
      <option value="0">男</option>
      <option value="1">女</option>
    </select>
    <br />
    <input type="submit" value="創立" name="crea">
  </p>
</form>
<?php
    }else{
	 if ($char_count['0'] == "3"){header("Location: index.php?page=crea&error=xx"); die();}
	
  	if (($_POST['name'] == "")){header("Location:index.php?page=crea&error=nu"); die();}
	
 
    //check lengths
    if (strlen($_POST['name']) > 18 or strlen($_POST['name']) < 4){header("Location: index.php?page=crea&error=su"); die();}
	
    //check for duplicate username
    $user_query = mysql_query("SELECT COUNT(*) FROM `characters` WHERE `name` = '". $_POST['name'] ."'") or die (mysql_error());
    $check_user = mysql_fetch_array($user_query);
    if ($check_user['0'] != "0"){header("Location: index.php?page=crea&error=ue"); die();}
    else{
    //prepare sql
    $add_user = ("INSERT INTO `characters`
        (`ID`, `accountid`,`name`, `level`,`str`,`dex`,`luk`,`int`,`hp`,`mp`,`maxhp`,`maxmp`,`hair`,`face`,`ap`,`gender`,`meso`,`map`)
        VALUES (NULL ,'".$_SESSION['user_id'] ."','".$_POST['name'] ."','1','4','4','4','4','50','50','50','50','".$_POST['hair'] ."','".$_POST['face'] ."','200','".$_POST['xb'] ."','0','0')");
    mysql_query ($add_user) or die (mysql_error());

	//escape php mode and output some kind of welcome message to the user
	?>
角色創立成功!!!, <?php echo $_POST['username']; ?>!<br />
恭喜:您的角色創立成功,並且可以進入遊戲...
<br />
<br />
<i>[請進入遊戲,開始你的冒險生活!]</i>
	<?php
    }
    }
?>
