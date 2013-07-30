<?php

/* config start */

$emailAddress = 'hello@bitbytemedia.com';

/* config end */


require "phpmailer/class.phpmailer.php";

session_name("fancyform");
session_start();


foreach($_POST as $k=>$v)
{
	if(ini_get('magic_quotes_gpc'))
	$_POST[$k]=stripslashes($_POST[$k]);
	
	$_POST[$k]=htmlspecialchars(strip_tags($_POST[$k]));
}


$err = array();

if(!checkLen('name'))
	$err[]='<strong>Oops!</strong> The name field is too short or empty.';

if(!checkLen('email'))
	$err[]='<strong>Uh-oh.</strong> The email field is too short or empty.';
else if(!checkEmail($_POST['email']))
	$err[]='<strong>Whoops!</strong> Your email is not in a valid format.';

if(!checkLen('subject'))
	$err[]='<strong>Oh no.</strong> You forgot to select a subject!';

if(!checkLen('message'))
	$err[]='<strong>Sorry!</strong> The message field is too short or empty.';

if((int)$_POST['captcha'] != $_SESSION['expect'])
	$err[]='<strong>Darn!</strong> The captcha code is wrong.';


if(count($err))
{
	if($_POST['ajax'])
	{
		echo '-1';
	}

	else if($_SERVER['HTTP_REFERER'])
	{
		$_SESSION['errStr'] = implode('<br />',$err);
		$_SESSION['post']=$_POST;
		
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}

	exit;
}


$msg=
'Name:	'.$_POST['name'].'<br />
Email:	'.$_POST['email'].'<br />
IP:	'.$_SERVER['REMOTE_ADDR'].'<br /><br />
Subject: '.$_POST['subject'].'<br />
Message:<br /><br />

'.nl2br($_POST['message']).'

';


$mail = new PHPMailer();
$mail->IsMail();

$mail->AddReplyTo($_POST['email'], $_POST['name']);
$mail->AddAddress($emailAddress);
$mail->SetFrom($_POST['email'], $_POST['name']);
$mail->Subject = "A new ".mb_strtolower($_POST['subject'])." from ".$_POST['name']." | Contact Form";

$mail->MsgHTML($msg);

$mail->Send();


unset($_SESSION['post']);

if($_POST['ajax'])
{
	echo '1';
}
else
{
	$_SESSION['sent']=1;
	
	if($_SERVER['HTTP_REFERER'])
		header('Location: '.$_SERVER['HTTP_REFERER']);
	
	exit;
}

function checkLen($str,$len=2)
{
	return isset($_POST[$str]) && mb_strlen(strip_tags($_POST[$str]),"utf-8") > $len;
}

function checkEmail($str)
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}

?>
