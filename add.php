<?php 
header('Content-Type:text/html;charset=utf-8');
	sleep(1);
	require 'config.php';
	$_pwd=sha1($_POST['password']);
	$query = "INSERT INTO user (userName, passWord, eMail, birthDay, seX, regdate) 
		VALUE ('{$_POST['username']}','{$_pwd}','{$_POST['email']}','{$_POST['birthday']}','{$_POST['sex']}',NOW())";
	mysql_query($query) or die ('新增失败:'.mysql_error());
	echo mysql_affected_rows();
	mysql_close();
 ?>