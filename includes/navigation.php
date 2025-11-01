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

<a href="index.php">首頁</a> |

<?php
    if (isset($_SESSION['access'])){
?>
<a href="index.php?page=ucp">賬號管理</a>
<?php
    }else{
?>
<a href="index.php?page=register">用戶註冊</a>
<?php
}
?>|

<?php
    if (isset($_SESSION['access'])){
?>
<a href="index.php?page=logout">用戶註銷 [<?php echo $_SESSION['username']; ?>]</a>
<?php
    }else{
?>
<a href="index.php?page=login">用戶登陸</a>
<?php
}
?>| 
<a href="index.php?page=Server">運行狀態</a> | <a href="index.php?page=Shop">冒險商城</a> |
<hr />
