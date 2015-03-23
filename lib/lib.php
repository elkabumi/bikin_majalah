<?php

$title 			= ".: SAPAR :.";
$icon 			= "img/images/icon.png";
$path 			= "index/view/";
$style_body 	= $path.'style_body.php';
$background     = $path.'background.php';
$banner 		= $path.'banner.php';
$tengah 		= $path.'tengah.php';
$visitor 		= $path.'visitor.php';
$sidebar_login  = $path.'sidebar_login.php';
$footer			= $path.'footer.php';
$bawah			= $path.'bawah.php';

function count_data($table, $where){
		$query = mysql_query("select count(*) as jumlah from $table where $where");
		$row = mysql_fetch_object($query);
		return $row->jumlah;
	}

function format_date($date){
	if($date){
		$d = explode("-", $date);
		$new_date = $d[2]."/".$d[1]."/".$d[0];
	}else{
		$new_date = "";
	}
	return $new_date;
}




function default_image(){
	$image = "img/images/default.jpg";
	return $image;
}

function default_image_form(){
	$image = "img/images/default_form.png";
	return $image;
}

?>