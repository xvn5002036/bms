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

//返回Odinms加密方式的密碼
function odsha512($pass,$salt)
{ 
 $inputpass = "$pass"."$salt";
 $sha512 = hash('SHA512', $inputpass); 
 return $sha512; 
}

//檢測生成唯一 Code 代碼
function CNXC()
{
	$C = 100; //最多重試次數
	for($TempNC = createNXCode(),$i=0;mysql_num_rows(mysql_query("SELECT * FROM `nxcode` WHERE `code` = '" .$TempNC. "'"));$TempNC = createNXCode()){$i++;if($i > $C){return "ERROR:01";break;}}
  return $TempNC;
}

// 以下代碼來自 Odinms.de 論壇
// BY BAVILO FROM ODINMS.DE FORUMS 
function createNXCode()
{ 
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 13) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 
    return $pass; 
}
?>