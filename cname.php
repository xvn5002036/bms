<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style>
<?php
mysql_query("set names 'big5'");
$query2 = mysql_query("SELECT COUNT(*) FROM `characters` WHERE `accountid` = '" .$_SESSION['user_id']. "'") or die (mysql_error());
$char_count = mysql_fetch_array($query2);?>
　<p><b><font face="華康娃娃體" size="5"><font color="#9933FF">你好，這裡是戶政事務所</font><font color="#FF0000">改名</font><font color="#9933FF">服務處<br>
</font></font>　<br><font face="華康布丁體" size="5" color="#00FFFF">您的ID:</font><font color="#00FFFF" size="5"><?php echo $_SESSION['user_id']; ?></font></b><font color="#00FFFF" size="5"><br />
<?php
mysql_query("set names 'big5'");
if (isset($_GET['error'])){
        if (($_GET['error']) == "nu"){
        echo ("<font color=blue>出錯：您沒有輸入角色名</font><br />");}
        if (($_GET['error']) == "lu"){
        echo ("<font color=blue>出錯：您的角色名太長了。最多8個英文或中文字!</font><br />");}
        if (($_GET['error']) == "su"){
        echo ("<font color=blue>出錯：您的角色名不能小於2個中文字,不能大於5個中文字<br />也不能小於3個英文或數字,或者大於10個英文或數字</font><br />");}
        if (($_GET['error']) == "xx"){
        echo ("<font color=blue>角色已達限制,無法創建建角色!!!</font><br />");}
        if (($_GET['error']) == "ue"){
        echo ("<font color=blue>對不起：您輸入的角色名已存在。請更換其它角色名。</font><br />");}
    }
    if (!isset($_POST['name'])){
        ?>
    </font>
    </p>
    <form action="index.php?page=cname" method="post">
    <b>
    <font color="#FFFFFF" face="華康娃娃體" size="5">你的名子:</font></b><font face="華康娃娃體"><font color="#00FFFF">
<?php 
$query = mysql_query("SELECT * FROM `characters` WHERE `accountid` = '" .$_SESSION['user_id']. "' ORDER BY `level` DESC ");
while ($data = mysql_fetch_array($query)){
?></font> </font><font face="華康娃娃體" color="#FFFFFF">
	<font size="4" color="#FFFFFF">
<input type="radio" name="name" value="<?php echo $data['name']; ?>" style="font-weight: 700" /></font><b><font size="4"><?php echo $data['name']; ?></select>
<?php } ?>
    </font></b></font>
    <br/>
    <b>
    <font size="5" face="華康娃娃體" color="#FFFFFF"><br>
	新的名字:</font></b>
    <label>
    <input name="nname" type="text" size="18" maxlength="18" />
    </label>
    <br /><font color="#FF0000" face="華康娃娃體" size="4"><br>
	≡盡量不要使用一些奇特的特殊符號，以免卡角解不開≡</font><br />
    <br>
    <input type="submit" name="cname" value="確定修改" style="font-family: 華康布丁體; font-size: 12pt; color: #FFFF00; border: 3px double #FFFF00; background-image: url('imagess/back-121.gif')">
    </form>
<?php
    }else{
    if (($_POST['nname'] == "")){header("Location:index.php?page=cname&error=nu"); die();}
    //check lengths
    if (strlen($_POST['nname']) > 18 or strlen($_POST['nname']) < 4){header("Location: index.php?page=cname&error=su"); die();}
    //fetch current information
    //check for duplicate username
    $user_query = mysql_query("SELECT COUNT(*) FROM `characters` WHERE `name` = '". $_POST['nname'] ."'") or die (mysql_error());
    $check_user = mysql_fetch_array($user_query);
    if ($check_user['0'] != "0"){header("Location: index.php?page=cname&error=ue"); die();}
     else{
    $sql = ("UPDATE `characters` SET `name` ='".$_POST['nname'] ."'  WHERE `name` = '".$_POST['name'] ."'");
    mysql_query ($sql) or die(mysql_error());
    //escape php and print success message
?>
<font face="華康布丁體" size="5" color="#FFFF00"><br>
修改成功!!</font>
<?php
    }
    }
?></div>