function NowBuy(xf,sy)
{
if(xf < 1) 
{
alert("很抱歉!\n\n您購物車內沒有任何東西!\n\n Error: AX00 ");
return false;
}

if(sy < 0) 
{
alert("很抱歉,您的餘額不足!\n\n Error: AX01 ");
return false;
}
if( confirm("您確定要結賬嗎？\n\n 總扣除點卷："+xf+"點 \n 消費後剩餘："+sy+"點") )
{
showXX()
sy2 = sy;
setTimeout("itemtoCart2(sy2)",1);
}
}

function itemtoCart2()
{

myurl= "shop/BuytoNow.php?&Worm=" + Date();
retCode=openurl(myurl); 
switch(retCode){ 
case "-2": 
alert("很抱歉,本次購買失敗!\n\n可能原因:\n服務器繁忙請稍後在試.");a=showCC();break; 
case "1": 
alert("恭喜:結賬成功!　　　　　　　　　\n\n稍候轉向 我的物品 請稍等..\n\n[提示]您當前賬戶餘額："+sy2);location.href="index.php?page=Shop&Cary=Myitem";break; 
case "0": 
alert("非常抱歉:\n\n由於系統限制,您不能夠買此商品!\n\n可能是您權限不夠.");a=showCC();
} 
return; 
} 

function openurl(url){ 
var objxml=new ActiveXObject("Microsoft.XMLHttp") 
objxml.open("GET",url,false); 
objxml.send(); 
retInfo=objxml.responseText; 
if (objxml.status=="200"){ 
return retInfo; 
} 
else{ 
return "-2"; 
} 
}