<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оплата");
?>
<h1>История заказов</h1>
<br>
<?$APPLICATION->IncludeComponent("bitrix:sale.personal.order.detail", ".default", array(
	"PROP_1" => array(
	),
	"PATH_TO_LIST" => "/personal/history/",
	"PATH_TO_CANCEL" => "",
	"PATH_TO_PAYMENT" => "payment.php",
	"SET_TITLE" => "Y",
	"ID" => $ORDER_ID
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>