<?php
	//check if session exists
	if (!isset($_SESSION['access'])){
	header("Location: index.php?page=login&error=nli");
	die();}
?>
<table cellspacing="6">
	<tr valign="top">
	    <td width="25%"><span class="content">
		<b>User Control Panel</b><br />
	    <a href="index.php?page=ucp&section=profile">Update Profile</a>
	    </span>
		</td>
		<td width="75%">
        <span class="content">
<?php
//if no value was passed to page then show the main page
if(!isset($_GET['section'])){
include ("ucp/welcome.php");
}else{
//otherwise, include the page from the pages directory
$file = ("ucp/".$_GET['section'].".php");
//let's check to see if the file exists
if (file_exists($file)){
	include ($file);
}else{
	echo ("Error 404: File not found.");
}}
?>
		</span>
		</td>
	</tr>
</table>
