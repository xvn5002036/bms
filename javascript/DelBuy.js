function GoMyitem()
{
location.href = "index.php?page=Shop&Cary=Myitem";
return; 
}

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

function DelInfo(itemid)
{
if( confirm("是否真的要取消這個物品的購買？") ) 
{
No3 = itemid;
showXX()
setTimeout("itemtoCart3(No3)",1);
}
}

function itemtoCart3(itemid)
{

delitemid=itemid; 
if (delitemid==null||delitemid=='')
{ 
alert("參數錯誤"); 
return false;
} 
myurl= "shop/DeltoCart.php?s=" + delitemid + "&Worm=" + Date();
retCode=openurl(myurl); 
switch(retCode){ 
case "-2": 
alert("很抱歉,本次刪除失敗!\n\n可能原因:\n服務器繁忙請稍後在試.");a=showCC();break; 
case "1": 
alert("刪除成功！\n\n\請等待頁面刷新！");location.href( location.href );break; 
case "0": 
alert("非常抱歉:\n\n您沒有本物品,您不能刪除此商品!\n\n可能由於頁面同步出錯，請等待頁面刷新！");location.href( location.href );
} 
return; 
} 
