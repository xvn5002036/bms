<b> &#8759;&#8759;地圖傳送&#8759;&#8759;　<br>用戶ID:<?php echo $_SESSION['user_id']; ?></b><br />
<?php
mysql_query("set names 'big5'");
    if (!isset($_POST['map'])){
	?>
	<form action="index.php?page=map" method="post">
	角色名:
<?php 
$query = mysql_query("SELECT * FROM `characters` WHERE `accountid` = '" .$_SESSION['user_id']. "' ORDER BY `level` DESC ");
while ($data = mysql_fetch_array($query)){
 ?>
<input type="radio" name="name" value="<?php echo $data['name']; ?>" /><?php echo $data['name']; ?></select>
<?php } ?>
	<br/>
    地圖代碼:
	 <select name="map" type="text">
    <option>選擇傳送地圖</option>
    <option value="104000000">楓之港</option>
    <option value="102000000">勇士之村</option>
    <option value="103000000">墮落城市</option>
    <option value="100000000">弓箭手村</option>
    <option value="101000000">魔法森林</option>
    <option value="105040401">桑拿屋</option>
    <option value="110000000">黃金海岸</option>
    <option value="200000000">天空之城</option>
    <option value="211000000">冰原雪域</option>
    <option value="220000000">玩具城</option>
    <option value="222000000">童話村</option>
    <option value="230000000">水世界</option>
    <option value="240000000">神木村</option>
    <option value="250000000">武陵村</option>
    <option value="600000000">新葉城</option>
    <option value="680000000">結婚地圖</option>
    <option value="800000000">日本神社</option>
    <option value="801000000">日本昭和村</option> 
    <option value="925100100">百草堂</option>
    <option value="926000010">王妃的寶物倉庫</option>  
    <option value="926000000">阿里安特後街</option>
    <option value="200000150">碼頭阿里安特</option>
    <option value="211041300">死亡之林Ⅲ</option> 
    <option value="211041700"> 廢礦坑Ⅲ</option>
    <option value="211042300">炎魔入口</option>  
    <option value="211042400">炎魔的祭台入口</option>
    <option value="221000001">地球防禦總部</option>
    <option value="230040420">魚王洞穴</option> 
    <option value="240000006">潘姆之家</option>
    <option value="240000004">依托之家</option>  
    <option value="240000003">亞可之家</option>
    <option value="500010000">泰國</option>
    <option value="109010201">冒險島活動 </option> 
    <option value="109060000">雪球賽</option>
    <option value="109060005">活動地圖入口</option>  
    <option value="682000100">鬧鬼宅邸</option>
    <option value="809050016">商品交換所</option>
    <option value="800040300">楓城 百間廊下</option> 
    <option value="801000110">神秘溫泉(男)</option>
    <option value="801000210">秘密溫泉(女)</option>  
    <option value="801000200">更衣室(女)</option>
    <option value="809000101">澡堂(男)</option>
    <option value="801000100">更衣室(男)</option> 
  </select>
<br />
	<input type="submit" name="zmap" value="傳送">
	</form>
<?php
	}else{
	//fetch current information
	$sql = ("UPDATE `characters` SET `map` ='".$_POST['map'] ."'  WHERE `name` = '".$_POST['name'] ."'");
	mysql_query ($sql) or die(mysql_error());
	//escape php and print success message
?>
傳送成功!!
<?php
	}
?>