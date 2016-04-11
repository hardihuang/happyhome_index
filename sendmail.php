<?php
header("Content-Type: text/html; charset=utf-8");
	require_once "email.class.php";
	//********************  ********************************
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];

	if($name && $phone && $message){

		$f_Message = "<h4>姓名：</h4><span>".$name."</span>".
					"<h4>电话：</h4><span>".$phone."</span>".
					"<h4>留言内容：</h4><span>".$message."</span>";

		$smtpserver = "smtp.mxhichina.com";
		$smtpserverport =25;
		$smtpusermail = "notify@happyhome.me";
		$smtpemailto = "hardihuang@outlook.com";
		$smtpuser = "notify@happyhome.me";
		$smtppass = "HAPPYHOME.me";
		$mailtitle = $name."在快乐学习营网进行了在线留言";
		$mailcontent = $f_Message;
		$mailtype = "HTML";


		//************************ ****************************
		$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
		$smtp->debug = false;
		$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

		echo "OK";
	}else if(!$name){
		echo "您好，请先填写您的姓名  ^_^";
		
	}else if(!$phone){
		echo "请填写您的电话号码，方便我们联系您  ^_^";
	}else if(!$message){
		echo "您好象还没填写想对我们说的话哦  ^_^";
	}
?>