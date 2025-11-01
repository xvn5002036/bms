<?php
	//check if session exists
	if (!isset($_SESSION['access'])){
	header("Location: index.php?page=welcome&error=nli");
	die();}
	if (($_SESSION['loggedin']) == "0" ){$_SESSION['loggedin'] = "<font color=red>離線!</font>";}
        if (($_SESSION['loggedin']) == "1" ){$_SESSION['loggedin'] = "<font color=red>離線!</font>";}
	if (($_SESSION['loggedin']) == "2" ){$_SESSION['loggedin'] = "<font color=green>在線!</font>";}
	if (($_SESSION['banned']) == "1" ){$_SESSION['banned'] = "<font color=red>鎖定!</font>";}
	if (($_SESSION['banned']) == "0" ){$_SESSION['banned'] = "<font color=green>正常!</font>";}
	if (($_SESSION['lastlogin']) == NULL ){$_SESSION['lastlogin'] = "<font color=red>抱歉,您一次都沒上過!</font>";}
	
	    
?>
　　<b> 歡迎光臨! </b><br /><br />
　　　　<b>用 戶 名:<?php echo $_SESSION['username']; ?></b><br />
　　　　<b>遊戲狀態:<?php echo $_SESSION['loggedin']; ?></b><br />
　　　　<b>帳號狀態:<?php echo $_SESSION['banned']; ?></b><br />
<?php
    if (($_SESSION['banned']) == "<font color=red>鎖定!</font>"){
?>
　　　　<b>鎖定原因:<?php echo $_SESSION['banreason']; ?></b><br />
<?php
    }
?>
<br />　　　　<b>E-Mail:<?php echo $_SESSION['email']; ?></b><br />
　　　　<b>即時通:<?php echo $_SESSION['qq']; ?></b> <br /><br /><br />

　　　　<b>上次登入遊戲時間:<br />　　　　<font color=green><?php echo $_SESSION['lastlogin']; ?></font></b> <br />




