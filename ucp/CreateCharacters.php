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
	//判定是否登陸
//	if (!isset($_SESSION['access'])){
//	header("Location: index.php?page=login&error=nli");
//	die();}

//下列測試之用
$iwu1= "http://imagedb.mapletip.com/images/Character/_Hair_000"; 
$iwu2= "/default.hairOverHead.png";
$hBoy = array(30000,30020,30010);
$hGril = array(31000,31040,31050);
?>
 <style>
  .cskinh1{position: absolute;margin-left:74px !important;margin-left:20px;margin-top:1px !important;margin-top:10px}
  .cskinh2{position: absolute;margin-left:74px !important;margin-left:62px;margin-top:1px !important;margin-top:10px}
  .cskinh3{position: absolute;margin-left:74px !important;margin-left:104px;margin-top:1px !important;margin-top:10px}
  .cskinh4{position: absolute;margin-left:74px !important;margin-left:143px;margin-top:1px !important;margin-top:10px}
  .C:link,.C:visited{padding:1px;padding-left:0px;padding-right:0px;border:1px solid #164283;background:#c9dbf5;border-bottom-width:3px;}
  .C:hover{padding:1px;padding-left:0px;padding-right:0px;border:1px solid #164283;background:#9bbbec;border-bottom-width:3px}
  .L:link,.L:visited{padding:1px;}
  .L:hover{padding-left:0px;padding-right:0px;border:1px solid #164283;background:#c9dbf5}
  </style>


<form name="yanshi">
<div style="z-index:-2; position:absolute; top:67px; left:395px; width: 43px; height: 13px;"><span >
  <p>預覽：</p>
</span></div>
<div style="z-index:-2;position:absolute;top:15;left:415;"><span ><p></p></span></div>
<div style="z-index:-1;position:absolute;top:15;left:330;">
<p><img name="background" src="http://mxd.youwo.com/zhiwawa/f_qdobp/1125/skin/bodycolor_00.gif" width="220" height="180"></p></div>
 
<div style="z-index:1;position:absolute;top:15;left:330;">
<p><img name="skin" src="http://mxd.youwo.com/zhiwawa/f_qdobp/1125/skin/bodycolor_00.gif" width="220" height="180"></p></div>
<div style="z-index:2;position:absolute;top:15;left:330;">
<p><img name="yseye" src="http://mxd.youwo.com/zhiwawa/f_qdobp/1125/face/female_01.gif" width="220" height="180">
</p></div>
<div style="z-index:3;position:absolute;top:15;left:330;">
<p><img name="yshair" src="http://mxd.youwo.com/zhiwawa/f_qdobp/1125/hair/hair_001_00.gif"  lowsrc="clear.gif">
</p></div>
<div style="z-index:4;position:absolute;top:15;left:330;" id="shoes">
<p><img name="ysboots" src="http://mxd.youwo.com/zhiwawa/f_qdobp/1125/equip/clear.gif" width="220" height="180">
</p></div>
<div style="z-index:5;position:absolute;top:15;left:330;" id="bottoms">
<p><img name="yssita_01" src="http://mxd.youwo.com/zhiwawa/f_qdobp/1125/bottoms/female000.gif" width="220" height="180">
</p></div>
<div style="z-index:6;position:absolute;top:15;left:330;">
<p><img name="ysue_01" src="http://mxd.youwo.com/zhiwawa/f_qdobp/1125/tops/female000.gif" width="220" height="180">
</p></div>
<div style="z-index:7;position:absolute;top:15;left:330;">
<p><img name="ysweapon" src="http://mxd.youwo.com/zhiwawa/f_qdobp/1125/weapon/weapon_002.gif" width="220" height="180" /></p>
</div>
</form>




創建角色:
<form name="frm" action="" method="post">
  角色名稱:
  <label>
  <input type="text" name="CharactersName" />
  <br />
  </label>

    <label>    角色性別:
    男<input id="sexboy" name="sex" type="radio" onclick="Showimg()" value="boy" checked="checked" />
    女<input id="sexgril" type="radio" onclick="Showimg()" name="sex" value="girl" />
</label>
    <p>臉型選擇:
      <input id = "yj0" name="yj" type="radio" onclick="Showimg()" value="0" checked="checked" />
      <input id = "yj1" type="radio" onclick="Showimg()" name="yj" value="1" />
      <input id = "yj2" type="radio" onclick="Showimg()" name="yj" value="2" />
      <input id = "yj3" type="radio" onclick="Showimg()" name="yj" value="3" />
    
    <p>髮型顏色:
      <input id = "ys0" name="ys" type="radio" onclick="Showimg()" value="0" checked="checked" />
      <input id = "ys1" type="radio" onclick="Showimg()" name="ys" value="1" />
      <input id = "ys2" type="radio" onclick="Showimg()" name="ys" value="2" />
      <input id = "ys3" type="radio" onclick="Showimg()" name="ys" value="3" />
    <p>髮型樣式:
      <input id = "fx0" name="fx" type="radio" onclick="Showimg()" value="0" checked="checked" />
      <input id = "fx1" type="radio" onclick="Showimg()" name="fx" value="1" />
      <input id = "fx2" type="radio" onclick="Showimg()" name="fx" value="2" />
      <input id = "fx3" type="radio" onclick="Showimg()" name="fx" value="3" />
</p>
    <p>上衣樣式:
      <input id = "sy1" name="sy" type="radio" onclick="Showimg()" value="1" checked="checked" />
      <input id = "sy2" type="radio" onclick="Showimg()" name="sy" value="2" />
      <input id = "sy3" type="radio" onclick="Showimg()" name="sy" value="3" />
</p>
    <p>褲裙樣式:
      <input id = "kq1" name="kq" type="radio" onclick="Showimg()" value="1" checked="checked" />
      <input id = "kq2" type="radio" onclick="Showimg()" name="kq" value="2" />
</p>
    <p>鞋子樣式:
      <input id = "xz1" name="xz" type="radio" onclick="Showimg()" value="1" checked="checked" />
      <input id = "xz2" type="radio" onclick="Showimg()" name="xz" value="2" />
      <input id = "xz3" type="radio" onclick="Showimg()" name="xz" value="3" />
      <input id = "xz4" type="radio" onclick="Showimg()" name="xz" value="4" />
      <br>
    </p>  
    <p>選擇武器:
	  <input id = "wq1" name="xq" type="radio" onclick="Showimg()" value="1" checked="checked" />
      <input id = "wq2" type="radio" onclick="Showimg()" name="xq" value="2" />
      <input id = "wq3" type="radio" onclick="Showimg()" name="xq" value="3" />
	</p> <br>製作中...!
	 
      <script type="text/javascript">
			 function ReYanSe()
			 {
			 if (document.forms["frm"].ys0.checked == "1"){return "0";}
			 if (document.forms["frm"].ys1.checked == "1"){return "1";}
			 if (document.forms["frm"].ys2.checked == "1"){return "2";}
			 if (document.forms["frm"].ys3.checked == "1"){return "3";}
			 
			 }
			 function Reid(Temp)
			 {
			 if (Temp == "hari")
			 {
			 if (document.forms["frm"].fx0.checked == "1"){return "0000";}
			 if (document.forms["frm"].fx1.checked == "1"){return "0010";}
			 if (document.forms["frm"].fx2.checked == "1"){return "0020";}
			 if (document.forms["frm"].fx3.checked == "1"){return "0030";}
			 }
			 if (Temp == "sy")
			 {
			 if (document.forms["frm"].sy1.checked == "1"){return "01";}
			 if (document.forms["frm"].sy2.checked == "1"){return "02";}
			 if (document.forms["frm"].sy3.checked == "1"){return "03";}
			 }
			 if (Temp == "kq")
			 {
			 if (document.forms["frm"].kq1.checked == "1"){return "01";}
			 if (document.forms["frm"].kq2.checked == "1"){return "02";}
			 }
			 if (Temp == "xz")
			 {
			 if (document.forms["frm"].xz1.checked == "1"){return "01";}
			 if (document.forms["frm"].xz2.checked == "1"){return "02";}
			 if (document.forms["frm"].xz3.checked == "1"){return "03";}
			 if (document.forms["frm"].xz4.checked == "1"){return "04";}
			 }
			 if (Temp == "yj")
			 {
			 if (document.forms["frm"].yj0.checked == "1"){return "00";}
			 if (document.forms["frm"].yj1.checked == "1"){return "01";}
			 if (document.forms["frm"].yj2.checked == "1"){return "02";}
			 if (document.forms["frm"].yj3.checked == "1"){return "03";}
			 }
			 if (Temp == "wq")
			 {
			 if (document.forms["frm"].wq1.checked == "1"){return "1";}
			 if (document.forms["frm"].wq2.checked == "1"){return "2";}
			 if (document.forms["frm"].wq3.checked == "1"){return "3";}
			 }

			 
			 }
			 function ImgUrlA(Temp)
			 {//判斷性別
			 if (Temp == "hari")
			 {
			 if (document.forms["frm"].sexboy.checked == "1"){return "imges/hairBoy/";}
			 if (document.forms["frm"].sexgril.checked == "1"){return "imges/hairGril/";}
			 }
			 if (Temp == "sy")
			 {
			 if (document.forms["frm"].sexboy.checked == "1"){return "imges/YYBoy/";}
			 if (document.forms["frm"].sexgril.checked == "1"){return "imges/YYGril/";}
			 }
			 if (Temp == "kq")
			 {
			 if (document.forms["frm"].sexboy.checked == "1"){return "imges/KQBoy/";}
			 if (document.forms["frm"].sexgril.checked == "1"){return "imges/KQGril/";}
			 }
			 if (Temp == "yj")
			 {
			 if (document.forms["frm"].sexboy.checked == "1"){return "imges/eyeBoy/";}
			 if (document.forms["frm"].sexgril.checked == "1"){return "imges/eyeGril/";}
			 }
			 if (Temp == "xz"){return "imges/XX/";}
			 if (Temp == "wq"){return "imges/WQ/";}
			 }
			 	 	 
		     function Showimg()
		     {
		     document.yshair.src = ImgUrlA("hari") + Reid("hari") + ReYanSe() + ".gif"
			 document.ysue_01.src = ImgUrlA("sy") + Reid("sy") + ".gif"
			 document.yssita_01.src = ImgUrlA("kq") + Reid("kq") + ".gif"
			 document.ysboots.src = ImgUrlA("xz") + Reid("xz") + ".gif"
			 document.yseye.src = ImgUrlA("yj") + Reid("yj") + ".gif"
			 document.ysweapon.src = ImgUrlA("wq") + Reid("wq") + ".gif"
			 //document.getElementById("himg1").src= HairImgUrlA() + nowfx + nowys + ".gif"
		     }
          	     var LastA=document.getElementById("h1")
          	     function S(Face){
          	      LastA.className="L"
          	      document.getElementById(Face).className="C"
		      //document.getElementById("simg").className="cskinh"+ Face.substr(1,1)
          	      LastA=document.getElementById(Face)
          	      document.getElementById(Face).blur()
          	      document.forms["frm"].hard.value=Face
          	     }
          	    </script>				



</form>


    




</table>

