<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?>
<h1>Корзина</h1>
<div style="clear: both;"></div>
<?$APPLICATION->IncludeComponent("pixelplus:catalog.compare.list", "favorites_top", array(
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "8",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"DETAIL_URL" => "",
	"COMPARE_URL" => "/compare/",
	"NAME" => "CATALOG_COMPARE_LIST",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket", "basket", array(
	"COLUMNS_LIST" => array(
		0 => "NAME",
		1 => "QUANTITY",
		2 => "PROPS",
		3 => "DELETE",
		4 => "PRICE",
	),
	"PATH_TO_ORDER" => "/personal/basket/order/",
	"HIDE_COUPON" => "N",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
	"USE_PREPAYMENT" => "N",
	"QUANTITY_FLOAT" => "N",
	"SET_TITLE" => "N"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>