<br><b> ▲▲經驗歸零▲▲　<br>此功能是將意外變負的經驗調整為零的，連同ID上的人物經驗一起歸零。
<br>用戶ID:<?php echo $_SESSION['user_id']; ?></b><br />
<?php
    if (!isset($_POST['zj'])){
    //fetch current information
    $query = mysql_query("SELECT * FROM `characters` WHERE `accountid` = ". $_SESSION['user_id'] ."");
    $data = mysql_fetch_array($query);
    //form
    ?>
    <form action="index.php?page=expno" method="post">
    <input type="text" name="username" value="<?php echo $data['accountid']; ?>" readonly><br/>
    <br />
    <input type="submit" name="zj" value="經驗歸零">
    </form>
<?php
    }else{
    //fetch current information
    $sql = ("UPDATE `characters` SET `exp` =1  WHERE `accountid` = '". $_SESSION['user_id'] ."'");
    mysql_query ($sql) or die(mysql_error());
    //escape php and print success message
?>
經驗歸零成功!!
<?php
    }
?>