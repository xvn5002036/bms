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
//變量解釋
//Worm_D1 指定排序段 Worm_D2 指定查詢段 Worm_D3 指定查詢類別

//檢測所按按鈕並賦予查詢值

if (isset($_POST['SList_TJ']))
{$BTcooke="SList_TJ";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="-1";}
if (isset($_POST['SList_ZX']))
{$BTcooke="SList_ZX";$Worm_D1="id";$Worm_D2="";$Worm_D3="";$Wrom_CloseWhere = "1";}
if (isset($_POST['SList_wuqi']))
{$BTcooke="SList_wuqi";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="1";}
if (isset($_POST['SList_maozi']))
{$BTcooke="SList_maozi";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="2";}
if (isset($_POST['SList_lianshi']))
{$BTcooke="SList_lianshi";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="3";}
if (isset($_POST['SList_yanshi']))
{$BTcooke="SList_yanshi";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="4";}
if (isset($_POST['SList_shangyi']))
{$BTcooke="SList_shangyi";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="5";}
if (isset($_POST['SList_kuzi']))
{$BTcooke="SList_kuzi";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="6";}
if (isset($_POST['SList_quanshen']))
{$BTcooke="SList_quanshen";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="7";}
if (isset($_POST['SList_shoutao']))
{$BTcooke="SList_shoutao";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="8";}
if (isset($_POST['SList_jiezhi']))
{$BTcooke="SList_jiezhi";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="9";}
if (isset($_POST['SList_xiezi']))
{$BTcooke="SList_xiezi";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="10";}
if (isset($_POST['SList_erhuan']))
{$BTcooke="SList_erhuan";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="11";}
if (isset($_POST['SList_pifeng']))
{$BTcooke="SList_pifeng";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="12";}
if (isset($_POST['SList_xiaoguo']))
{$BTcooke="SList_xiaoguo";$Worm_D1="";$Worm_D2="";$Worm_D3="";}
if (isset($_POST['SList_kapian']))
{$BTcooke="SList_kapian";$Worm_D1="";$Worm_D2="";$Worm_D3="";}
if (isset($_POST['SList_biaoqing']))
{$BTcooke="SList_biaoqing";$Worm_D1="itemLNo";$Worm_D2="shopLB";$Worm_D3="15";}
if (isset($_POST['SList_chongzhuang']))
{$BTcooke="SList_chongzhuang";$Worm_D1="";$Worm_D2="";$Worm_D3="";}
if (isset($_POST['SList_chongwu']))
{$BTcooke="SList_chongwu";$Worm_D1="";$Worm_D2="";$Worm_D3="";}
if (isset($_POST['SList_taozhuang']))
{$BTcooke="SList_taozhuang";$Worm_D1="";$Worm_D2="";$Worm_D3="";}
//首頁數據調用
if($Worm_D1=="" and $Worm_D2=="" and $Worm_D3=="")
{
$Worm_D1 = "itemLNo";
$Worm_D2 = "shopLB";
$Worm_D3 = "-1";
$BTcooke = "SList_TJ";
};
?>