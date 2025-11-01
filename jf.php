<?php
    if (!isset($_POST['zj'])){
    //fetch current information
    $query = mysql_query("SELECT * FROM `accounts` WHERE `name` = ". $_POST['name'] ."");

    //form
    ?>
<?php
    }else{
    //fetch current information
    $sql = ("UPDATE `accounts` SET `loggedin` =0,`macs` =0,`banned` =0,`banreason`=0  WHERE `name` = '". $_POST['name'] ."'");
    mysql_query ($sql) or die(mysql_error());
    //escape php and print success message
?>
<br><br><br>
解鎖成功!! <a href="index.php?page=jfq"><b>返回</b></a></br><script>location.href='index.php?page=jfq';</script>
<?php
    }
?>