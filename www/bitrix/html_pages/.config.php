<?
$arHTMLPagesOptions = array(
	"INCLUDE_MASK" => "*.php;*/",
	"EXCLUDE_MASK" => "/bitrix/*;/404.php",
	"FILE_QUOTA" => "100",
	"COMPOSITE" => "Y",
	"BANNER_BGCOLOR" => "#FFFFFF",
	"BANNER_STYLE" => "grey",
	"STORAGE" => "files",
	"ONLY_PARAMETERS" => "referrer1;r1;referrer2;r2;referrer3;r3;utm_source;utm_medium;utm_campaign;utm_content;fb_action_ids",
	"WRITE_STATISTIC" => "Y",
	"ALLOW_HTTPS" => "Y",
	"~INCLUDE_MASK" => array(
		0 => "'^.*?\\.php\$'",
		1 => "'^.*?/\$'",
	),
	"~EXCLUDE_MASK" => array(
		0 => "'^/bitrix/.*?\$'",
		1 => "'^/404\\.php\$'",
	),
	"~FILE_QUOTA" => "104857600",
	"INDEX_ONLY" => "",
	"~GET" => array(
		0 => "referrer1",
		1 => "r1",
		2 => "referrer2",
		3 => "r2",
		4 => "referrer3",
		5 => "r3",
		6 => "utm_source",
		7 => "utm_medium",
		8 => "utm_campaign",
		9 => "utm_content",
		10 => "fb_action_ids",
	),
	"COMPRESS" => "1",
	"STORE_PASSWORD" => "Y",
	"COOKIE_LOGIN" => "BITRIX_SM_LOGIN",
	"COOKIE_PASS" => "BITRIX_SM_UIDH",
	"COOKIE_NCC" => "BITRIX_SM_NCC",
	"COOKIE_CC" => "BITRIX_SM_CC",
	"COOKIE_PK" => "BITRIX_SM_PK",
	"NO_PARAMETERS" => "N",
	"GROUPS" => array(
	),
	"DOMAINS" => array(
		"itprom.ru" => "itprom.ru",
	),
);
?>