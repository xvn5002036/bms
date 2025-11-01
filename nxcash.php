<link rel="stylesheet" href="style2.css">
<?php
mysql_query("set names 'big5'");
// process the script only if the form has been submitted
if (array_key_exists('reset', $_POST)) {
  // start the session
  include('config2.php');
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  $username = mysql_real_escape_string($username);
  $char = trim($_POST['char']);
  $mesocheck = mysql_query('SELECT * FROM meso FROM characters');
  $result = mysql_query("SELECT meso, accountid FROM characters WHERE name = '$char' LIMIT 1");
  list($meso, $accountid) = mysql_fetch_row($result);

  $result = mysql_query("SELECT id, password, salt FROM accounts WHERE name = '$username' LIMIT 1");
  list($id, $realpass, $salt) = mysql_fetch_row($result);

  $sql = "SELECT * FROM accounts WHERE name = '$username'";
  $result = mysql_query($sql);
  $row = mysql_fetch_assoc($result);
    
if($realpass == hash('sha512',$password.$salt) && $accountid == $id && $meso >= 10000000) {
     mysql_query("UPDATE accounts SET nxcash = nxcash + 10000 WHERE name = '$username' LIMIT 1");
     mysql_query("UPDATE characters SET meso = meso - 10000000 WHERE name = '$char' LIMIT 1");
     echo "1萬點成功的儲值到$username !";
} else
     echo "您角色裡的遊戲幣不足(請確認該角色存在於帳號之中)";    }
  // if no match, destroy the session and prepare error message
  else {
    $message[] = '請填寫正確的資料.';
    }
?>
<!-- start content -->
       <div align="center"> <div class='welcome'><br>歡迎來到點數交易中心!</br>
<br>1000萬遊戲幣可換取1萬點數!</br> 
<br>請務必確認您已經退出遊戲</br> 
<br>請做好準備若出現錯誤管理員一律不負責!</br></div> </div>
          <div align="center">
          <div class="display">
<?php
if (isset($message)) {
  echo '<ul>';
  foreach ($message as $item) {
    echo "<li>$item</li>";
    }
  echo '</ul>';
  }
?>
           </div>
              <form id="form1" name="form1" method="post" action="">
                    <table cellspacing="0" cellpadding="5" width="100%">
                  <tr>
                            <td width="50%" align="right" class="list">帳號:</td>
                          <td class="list"><input id="username" type="text" name="username" maxlength="12"></td>
                        </tr>
                        <tr>
                          <td width="50%" align="right" class="list">密碼 :</td>
                          <td class="list"><input id="password" type="password" name="password" maxlength="20" /></td>
                        </tr>
                        <tr>
                            <td width="50%" align="right" class="list">支付1000萬的角色:</td>
                          <td class="list"><input id="char" type="text" name="char" maxlength="12"></td>
                        </tr>
                        <tr>
                          <td align="right" colspan="2"><input id="reset" name="reset" type="submit" value="兌換1萬點" /></td>
                        </tr>
                    </table>
            </form>
            </div>
<!-- end content -->
</div>