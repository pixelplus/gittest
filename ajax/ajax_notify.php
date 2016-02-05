<?
define("STOP_STATISTICS", true);
define("PUBLIC_AJAX_MODE", true);
//header("Content-Type: text/html; charset='Windows-1251'");
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<div style="max-width:450px;">
<?$APPLICATION->IncludeComponent(
		"sebekon:reminder.form", 
		"pixelplus", 
		array(
			"SUCCESS_MESSAGE" => "",
			"PRODUCT_ID" => $_REQUEST["TOVAR_ID"],
			"PRODUCT_CODE" => "",
			"SEND_BY_PHONE" => "Y",
			"USE_CAPTCHA" => "N",
			"ANONYMOUS" => "Y"
		),
		false
	);?>
</div>
<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>