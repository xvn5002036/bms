function showCC()
{
document.all.Layer1.style.visibility='hidden';
return "OK";
}

function showXX()
{
document.all.Layer1.style.visibility='inherit';
return "OK";
}

function itemtoCart(itemid)
{
if( confirm("確定將本物品加入購物車嗎？") ) 
{
No2 = itemid;
showXX()
setTimeout("itemtoCart0(No2)",1);
}
}

function itemtoCart0(itemid)
{

additemid=itemid; 
if (additemid==null||additemid=='')
{ 
alert("參數錯誤"); 
return false;
} 
myurl= "shop/AddtoCart.php?s=" + additemid + "&Worm=" + Date();
retCode=openurl(myurl); 
switch(retCode){ 
case "-2": 
alert("很抱歉,本次購買失敗!\n\n可能原因:\n服務器繁忙請稍後在試.");a=showCC();break; 
case "1": 
alert("恭喜:\n\n物品放入購物車成功!\n\n結賬請點購物車.");a=showCC();break; 
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