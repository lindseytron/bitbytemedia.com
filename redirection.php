<?php
include("/home/bitbyte/public_html/build/config/config.php");
$dbUtil=new dbUtil;
$dbUtil->dbConnect();

$vpath=($site."/".$_SERVER['REQUEST_URI']);

$ary_vpath=explode("/",$vpath);
$qstring=strstr($vpath,"?");
$qstring=str_replace("?","&",$qstring);
if($ary_vpath>5){
	$strFile=$_SERVER['REQUEST_URI'];
	if(substr($strFile,0,1)=="/"){
		$strFile=substr($strFile,1);
	}
}
else{
	$strFile = $ary_vpath[count($ary_vpath)-1];
}
$strFile=strtolower($strFile);
$info = pathinfo($strFile);
$fileName =  basename($strFile,'.'.$info['extension']);
switch($fileName){
	case "contact":
	$page="contact.php";
	break;
	case "about":
	$page="about.php";
	break;
	case "portfolio":
	$page="portfolio.php";
	break;
	case "index":
	$page="index.php";
	break;
	case "services":
	$page="services.php";
	break;
	case "mobile":
	$page="mobile.php";
	break;
	case "social":
	$page="socialmedia.php";
	break;
	case "clientportal":
	$page="clientPortal.php";
	break;
	case "seo":
	$page="seo.php";
	break;
	case "consulting":
	$page="consulting.php";
	break;
	case "web":
	$page="web.php";
	break;
	default:
	$page="404.php";
}
$url = $site."/".$page;
$handle = fopen($url, "r");


if ($handle) {

	$str_content = '';

	while (!feof($handle)) {

	  //$str_content .= fread($handle, 8192);

	  echo fread($handle, 8192);

	}

	fclose($handle);

}
?>