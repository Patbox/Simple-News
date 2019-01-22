<?php 
require('data/config.php');
$adres = $path; 
require('core/header.php');
if ($_GET['addnews']===''){
	require('core/text.php');
}
else if ($_GET['post']===''){
	require('core/newpost.php');
}
else {
	require('core/display.php');
}
?>
