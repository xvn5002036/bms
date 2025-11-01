<style type="text/css">
<!--
.STYLE1 {
	color: #0000FF;
	font-weight: bold;
}
.STYLE2 {color: #FF0000}
-->
</style>
<table style="text-align: left; width: 600px; height: 67px;" border="1"
cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td colspan="2" style="vertical-align: top;"><embed src="http://blog.roodo.com/prb999/821d3286.swf" width="600" height="23" FlashVars="txt=停留此網頁每３０分鐘可抽一次樂豆點，請隨時留意官網訊息"><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><?php include("includes/ranking.php"); ?><br>
</td>
<td style="vertical-align: top;"><?php include("includes/dps.php"); ?><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><?php include("includes/fame.php"); ?><br>
</td>
<td style="vertical-align: top;"><?php include("includes/meso.php"); ?><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><?php include("includes/PVP.php"); ?><br>
</td>
<td style="vertical-align: top;"><?php include("includes/guild.php"); ?><br>
</td>
</tr>
</tbody>
</table>


<body onload="javascript:pageonload()">
<style>.spanstyle {
FONT-WEIGHT: normal; FONT-SIZE: 10pt; VISIBILITY: visible; COLOR: #0066ff; FONT-FAMILY: Tahoma; POSITION: absolute; TOP: -50px
}
</style>
<script language="javascript">
var message="〝★ Love War ☆〞";
var x,y;
var step=12;
var flag=0;
message=message.split("");
var xpos=new Array();
for (i=0;i<=message.length-1;i++) {
xpos[i]=-50;
}
var ypos=new Array();
for (i=0;i<=message.length-1;i++) {
ypos[i]=-50;
}
function handlerMM(e) {
x = (document.layers) ? e.pageX : document.body.scrollLeft+event.clientX+20;
y = (document.layers) ? e.pageY : document.body.scrollTop+event.clientY;
flag=1;
}
function makesnake() {
if (flag==1 && document.all) {
for (i=message.length-1; i>=1; i--) {
xpos[i]=xpos[i-1]+step;
ypos[i]=ypos[i-1];
}
xpos[0]=x+step;
ypos[0]=y;
for (i=0; i<=message.length-1; i++) {
var thisspan = eval("span"+(i)+".style");
thisspan.posLeft=xpos[i];
thisspan.posTop=ypos[i];
thisspan.color=Math.random() * 255 * 255 * 255 + Math.random() * 255 * 255 + Math.random() * 255;
}
}
else if (flag==1 && document.layers) {
for (i=message.length-1; i>=1; i--) {
xpos[i]=xpos[i-1]+step;
ypos[i]=ypos[i-1];
}
xpos[0]=x+step;
ypos[0]=y;
for (i=0; i<message.length-1; i++) {
var thisspan = eval("document.span"+i);
thisspan.left=xpos[i];
thisspan.top=ypos[i];
thisspan.color=Math.random() * 255 * 255 * 255 + Math.random() * 255 * 255 + Math.random() * 255;
}
}
}
</script>
<script language="javascript">
for (i=0;i<=message.length-1;i++) {
document.write("<span id='span"+i+"' class='spanstyle'>");
document.write(message[i]);
document.write("</span>");
}
if (document.layers) {
document.captureEvents(Event.MOUSEMOVE);
}
document.onmousemove = handlerMM;
</script>
<script language="javascript">
function pageonload() {
makesnake();
window.setTimeout("pageonload();", 2);
}
</script>
</body>

<style>
BODY {
SCROLLBAR-ARROW-COLOR: #000000;
 SCROLLBAR-FACE-COLOR: #fcfc00;
 SCROLLBAR-DARKSHADOW-COLOR: #000000;
 SCROLLBAR-BASE-COLOR: #fcfc00;
 SCROLLBAR-HIGHLIGHT-COLOR: #000000;
 SCROLLBAR-SHADOW-COLOR: #000000;
 SCROLLBAR-TRACK-COLOR: #000000;
 SCROLLBAR-3DLIGHT-COLOR: #fcfc48
}
</style>


<body oncontextmenu="window.event.returnValue=false">
<body ONDRAGSTART="window.event.returnValue=false">
<body onSelectStart="event.returnValue=false">

<!--轉址式防止複製_開始-->
<script language=JavaScript>
<!--
if (navigator.appName.indexOf("Internet Explorer") != -1) 
document.onmousedown = noSourceExplorer;
function noSourceExplorer()
{
if (event.button == 2 | event.button == 3)
{
alert("您已經按了右鍵，疑似想偷看本站原始碼");
location.replace("xxx");
}
}
-->
</script>

<!--轉址式防止複製_結束-->
