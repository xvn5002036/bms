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

<?php 
// By Worm 08.06.07  以下各變量介紹信息:

// KG_100      定義一個輸入內容為 1~100 用來比較空位 .
// In_list     存儲現有物品所佔位 .
// NewKWList   用於存儲計算結果 .

function GetKG($In_list){

for($i=0;$i < 100;$i++){ $KG_100[$i] = $i + 1; }  //定義數組 KG_100 = 1~100
//	
$i=0; //歸零
$tmp; //聲明

foreach ($KG_100 as &$KG_100value) // 循環列出  KG_100數組
{
 foreach ($In_list as &$In_listvalue) // 循環列出  In_list數組
 {
  if ($KG_100value == $In_listvalue) //如果 KG_100數組值 等於 In_list數組值 
  break; //終止循環
  else
  {
   if (!array_search($KG_100value,$In_list)) //檢測 KG_100數組值 是否存在於 In_list數租中
   {
    $NewKWList[$i] = $KG_100value; //新建 Tmp 數租 用來存儲新數據
    $i++;
    break; //只循環一次
   }
  }
 }
}
return $NewKWList; //返回檢測結果
}
?>