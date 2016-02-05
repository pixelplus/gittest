<?
define("STOP_STATISTICS", true);
define("PUBLIC_AJAX_MODE", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<div id="fancybox-content">
<?$APPLICATION->IncludeComponent(
	"pixelplus:sale.fast.order",
	".default",
	Array(
		"PERSON_TYPE_CODE" => "1",
		"PRICE_CODE" => "BASE",
		"PRICE_VAT_INCLUDE" => "Y",
		"PHONE_QUESTION" => "Y",
		"EMAIL_QUESTION" => "Y",
		"ID" => $_REQUEST["ID"]
	),
false,
Array(
	'HIDE_ICONS' => 'Y'
)
);?>
</div>
<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>