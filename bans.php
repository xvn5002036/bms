<b> &#8759;&#8759;帳密解鎖&#8759;&#8759;　<br>用戶ID:<?php echo $_SESSION['user_id']; ?></b><br />
<?php
    if (!isset($_POST['jf'])){
    //fetch current information
    $query = mysql_query("SELECT * FROM `accounts` WHERE `ID` = ". $_SESSION['user_id'] ."");
    $data = mysql_fetch_array($query);
    //form
    ?>
    <form action="index.php?page=bans" method="post">
    <input type="text" name="username" value="<?php echo $data['name']; ?>" readonly><br/>
    <br />
    <input type="submit" name="jf" value="解鎖">
    </form>
<?php
    }else{
    //fetch current information
    $sql = ("UPDATE `accounts` SET `banned` = '0',`banreason` = '0' WHERE `ID` = '". $_SESSION['user_id'] ."'");
    mysql_query ($sql) or die(mysql_error());
    $sql2 = ("TRUNCATE TABLE `macbans`");
    mysql_query ($sql2) or die(mysql_error());
    $sql3 = ("TRUNCATE TABLE `ipbans`");
    mysql_query ($sql3) or die(mysql_error());
    //escape php and print success message
?>
解鎖成功!!
<?php
    }
?>
