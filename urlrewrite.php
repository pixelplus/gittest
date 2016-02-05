<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/gril/(.*)/([^/]+)\\.html(\$|\\?.*)#",
		"RULE" => "SECTION_CODE=\$1&ELEMENT_CODE=\$2",
		"ID" => "",
		"PATH" => "/gril/detail.php",
	),
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/gril/(.*)/(\$|\\?.*)#",
		"RULE" => "SECTION_CODE=\$1",
		"ID" => "",
		"PATH" => "/gril/list.php",
	),
	array(
		"CONDITION"	=>	"#^/info/recipes/([^/]+)\\.html($|\\?.*)#",
		"RULE"	=>	"CODE=$1",
		"ID"	=>	"",
		"PATH"	=>	"/info/recipes/detail.php",
	),
);

?>