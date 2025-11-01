<?php
    if (!isset($_POST['zj'])){
    //fetch current information
    $query = mysql_query("SELECT * FROM `characters` WHERE `name` = ". $_POST['name'] ."");

    //form
    ?>
<?php
    }else{
    //fetch current information
    $sql = ("UPDATE `characters` SET `level` =1,`exp` =0,`meso` =meso-1500000000,`job`=0 WHERE `name` = '". $_POST['name'] ."'");
    mysql_query ($sql) or die(mysql_error());
    //escape php and print success message
?>
<br><br><br>
轉身成功!! <a href="index.php?page=wyzs"><b>返回</b></a></br>
<?php
    }
?>