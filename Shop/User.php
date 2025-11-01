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


<p align="left"><b>用戶種類:<?PHP if($_SESSION['UserVIP'] == 0){echo "普通玩家";}else{echo "Vip玩家";} ?><br />
  用戶賬號:<?php echo $_SESSION['username']; ?><br />
  剩餘點券:<?php echo $_SESSION['UserMoney']; ?> 點.<br />
消費積分:<?php echo $_SESSION['UserConsumption']; ?> 點.<br /></b>
</p>
<form name="infofrm" action="index.php?page=Shop&Cary=ok"  method="post">
<input name="MyCary" type="submit"  value="購物車" />
<br/><br/>
<input name="" type="submit" value="???" disabled />
</form>