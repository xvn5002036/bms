<?PHP 
// ********************************* 
// * 程序製作 By Worm QQ:523266656 *
// *                               *
// * 轉載或修改發佈請保留此版權！  *
// *                               *
// *  Http://Www.WormShow.com      *
// *                               *
// * WormSuperAdmin V1.3 08.07.15  *
// *********************************
?>
<a href="index.php">關於</a> |

<?php

    if (isset($_SESSION['gmaccess'])){
?>
<a href="index.php?page=ServerCfg">服務器管理</a> | <a href="index.php?page=GameUserCfg">玩家管理</a> | <a href="#">商城管理</a> | 
<?php
    }else{}
?>

<?php
    if (isset($_SESSION['gmaccess'])){
?>
<a href="index.php?page=logout">退出管理 [<?php echo $_SESSION['gmusername']; ?>]</a>
<?php
    }else{
?>
<a href="index.php?page=login">管理員登陸</a>
<?php
}
?>
<hr>
