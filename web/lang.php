<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$langs = array(
	'ru' => 'Русский',
	'en' => 'English',
	'de' => 'Deutsch'
);
if(isset($_GET['lang']) && isset($langs[$_GET['lang']])){
	$lang = $_GET['lang'];
	setcookie('coex_lang', $lang);
} else if (isset($_COOKIE['coex_lang'])){
	$tmp = $_COOKIE['coex_lang'];
	if(isset($langs[$tmp])){
		$lang = $tmp;
	}
};

if(isset($langs[$lang])){
	include("langs/".$lang.".php");
}else{
	include("langs/en.php");
}

function TR($DEFINE){
	echo $DEFINE;
};
