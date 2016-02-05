<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.element", "item", array(
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "8",
	"ELEMENT_ID" => "",
	"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
	"SECTION_ID" => "",
	"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
	"HIDE_NOT_AVAILABLE" => "N",
	"PROPERTY_CODE" => array(
		0 => "BRAND",
		1 => "ART",
		2 => "VES",
		3 => "DLINA",
		4 => "VISOTA",
		5 => "SHIRINA",
		6 => "GLUBINA",
		7 => "GARANTY",
		8 => "DOPNAME",
		9 => "COLOR",
		10 => "",
	),
	"OFFERS_LIMIT" => "0",
	"SECTION_URL" => "",
	"DETAIL_URL" => "",
	"BASKET_URL" => "/personal/basket/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",
	"PRODUCT_PROPS_VARIABLE" => "prop",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"META_KEYWORDS" => "-",
	"META_DESCRIPTION" => "SEO_DESC",
	"BROWSER_TITLE" => "-",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "Y",
	"ADD_SECTIONS_CHAIN" => "Y",
	"USE_ELEMENT_COUNTER" => "Y",
	"PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"PRODUCT_PROPERTIES" => array(
	),
	"USE_PRODUCT_QUANTITY" => "N",
	"CONVERT_CURRENCY" => "N",
	"LINK_IBLOCK_TYPE" => "",
	"LINK_IBLOCK_ID" => "",
	"LINK_PROPERTY_SID" => "",
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>