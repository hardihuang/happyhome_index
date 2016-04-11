<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$to = "huang_hao521@163.com";
	$subject = "快乐学习营在线留言";
	$msg = "$name 在快乐学习营进行了在线留言，".
			"留言内容为：\n".
			"$message\n".
			"联系方式为：\n".
			"$phone";
	echo "success!";


?>

