<?php
    if (!isset($_POST['cash'])){
    
    $query = mysql_query("SELECT * FROM `characters` WHERE `id` = ". $_POST['name'] ." AND `skill` >=0 AND `sfvip` >=0 ORDER BY `level` DESC ");
    $num=mysql_num_rows($query);
    if($num==0){
    echo"你不是贊助會員我不能助你一臂之力，抱歉！-- 使者<br>或者你已經學會了所有技能！<br>要成為贊助會員請聯繫我上頭QQ:<br>";
    exit();
    }
        ?>
<?php
    if (!isset($_POST['zj'])){
    //fetch current information
    $query = mysql_query("SELECT * FROM `skills` WHERE `characterid` = ". $_POST['name'] ."");

    //form
    ?>
<?php
    }else{
    //fetch current information
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4001003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4001002, 5)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4001344, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4001334, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4000001, 8)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4000000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4101003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4100000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4100001, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4101005, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4100002, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4101004, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4201002, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4200000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4200001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4201003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4201005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4201004, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4110000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4111005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4111006, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4111001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4111004, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4111002, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4111003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4211002, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4211004, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4211001, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4211006, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4211005, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4211003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',4210000, 20)");
    mysql_query ($add) or die (mysql_error());
    //fei xia 

    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2001004, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2000001, 10)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2000000, 16)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2001003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2001005, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2001002, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2101004, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2101001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2100000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2101005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2101003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2101002, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2201004, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2201001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2200000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2201003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2201002, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2201005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2301004, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2301002, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2301005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2301003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2300000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2301001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2110001, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2111006, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2111002, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2110000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2111003, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2111004, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2111005, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2210001, 30)");
    mysql_query ($add) or die (mysql_error());
      $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2211006, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2211002, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2210000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2211004, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2211005, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2211003, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2311001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2311005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2310000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2311003, 30)");
    mysql_query ($add) or die (mysql_error()); 
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2311002, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2311004, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',2311006, 30)");
    mysql_query ($add) or die (mysql_error()); 
 //fa shi


    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1000002, 8)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1000000, 16)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1000001, 10)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1001003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1001004, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1001005, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1101005, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1100001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1100002, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1100003, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1101007, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1101006, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1101004, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1100000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1201005, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1200001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1200003, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1200002, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1201007, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1201004, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1200000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1201006, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1300003, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1300002, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1301007, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1301006, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1301005, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1300001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1301004, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1300000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1111007, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1111006, 30)");
    mysql_query ($add) or die (mysql_error());
      $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1111005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1111002, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1110000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1111004, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1111003, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1110001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1111008, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1211006, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1211002, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1211004, 30)");
    mysql_query ($add) or die (mysql_error()); 
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1211003, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1211005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1210000, 20)");
    mysql_query ($add) or die (mysql_error()); 
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1211008, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1211009, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1210001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1211007, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1311008, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1311004, 30)");
    mysql_query ($add) or die (mysql_error()); 
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1311003, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1311006, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1310000, 20)");
    mysql_query ($add) or die (mysql_error()); 
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1311002, 30)");
    mysql_query ($add) or die (mysql_error()); 
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1311007, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1311005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',1311001, 30)");
    mysql_query ($add) or die (mysql_error()); 
 //zhan shi


    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3001004, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3000001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3001005, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3001003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3000000, 16)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3000002, 8)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3101005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3101002, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3100000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3100001, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3101003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3101004, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3201002, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3200000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3200001, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3201005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3201003, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3201004, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3111004, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3111003, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3110001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3111002, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3111005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3111006, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3110000, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3211004, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3211003, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3211005, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3210001, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3211002, 20)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3211006, 30)");
    mysql_query ($add) or die (mysql_error());
    $add = ("INSERT INTO `skills`
        (`characterid`,`skillid`, `skilllevel`)
        VALUES ( '". $_POST['name'] ."',3210000 , 20)");
    mysql_query ($add) or die (mysql_error());
 //gong shou
    $sql = ("UPDATE `characters` SET `skill` =skill-1, `meso` =meso-100000 WHERE `id` = ". $_POST['name'] .""); 
    mysql_query ($sql) or die(mysql_error());
?>
<br><br><br>
<b> 呵呵：<img src="images/100.gif"></b><br />
知道我的厲害了吧！你已經學會了所有的技能哦<br>謝謝你的100000塊冒險幣，夠我喝一陣子小酒了，哈哈；<br>
學習成功!! <a href="index.php?page=skill"><b style='font-size:15.0pt;color:red'>返回</b></a></br>
<?php
    }
?>
<?php
    }
?>
