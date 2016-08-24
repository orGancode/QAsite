<?php 
	header('Content-Type:text/html;charset=utf-8');
	require 'config.php';
	if(isset($_POST['agree'])){
		mysql_query("UPDATE question SET agree_c='{$_POST['agree']}' WHERE id='{$_POST['title']}'");
	}
 ?>