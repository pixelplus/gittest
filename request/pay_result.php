<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><?$APPLICATION->IncludeComponent("bitrix:sale.order.payment.receive", "", array(
	"PAY_SYSTEM_ID" => "4",
	"PERSON_TYPE_ID" => "1"
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>