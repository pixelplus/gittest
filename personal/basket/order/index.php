<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ќформление заказа");
?> 
<h1>ќформление заказа</h1>
 <?$APPLICATION->IncludeComponent(
	"bitrix:sale.order.ajax",
	"visual_weber",
	Array(
		"PAY_FROM_ACCOUNT" => "Y",
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
		"COUNT_DELIVERY_TAX" => "N",
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
		"ALLOW_AUTO_REGISTER" => "Y",
		"SEND_NEW_USER_NOTIFY" => "N",
		"DELIVERY_NO_AJAX" => "Y",
		"DELIVERY_NO_SESSION" => "N",
		"TEMPLATE_LOCATION" => "popup",
		"DELIVERY_TO_PAYSYSTEM" => "d2p",
		"USE_PREPAYMENT" => "N",
		"PROP_1" => array(),
		"ALLOW_NEW_PROFILE" => "N",
		"PATH_TO_BASKET" => "/personal/basket/",
		"PATH_TO_PERSONAL" => "/personal/history/",
		"PATH_TO_PAYMENT" => "/personal/payment/",
		"PATH_TO_AUTH" => "/personal/",
		"SET_TITLE" => "Y",
		"PRODUCT_COLUMNS" => array(),
		"DISABLE_BASKET_REDIRECT" => "N",
		"DISPLAY_IMG_WIDTH" => "90",
		"DISPLAY_IMG_HEIGHT" => "90"
	)
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>