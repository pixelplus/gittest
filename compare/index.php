<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Сравниение грили барбекю");
$APPLICATION->SetPageProperty("description", "Раздел для сравления грилей и барбекю интернет-магазина WHOGRILL между собой.");
$APPLICATION->SetTitle("Сравнение грилей нашего интернет-магазина");
?>
<?$APPLICATION->IncludeComponent("pixelplus:catalog.compare.list", "favorites_top", Array(
	"IBLOCK_TYPE" => "content",	// Тип инфоблока
	"IBLOCK_ID" => "8",	// Инфоблок
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
	"COMPARE_URL" => "/compare.php",	// URL страницы с таблицей сравнения
	"NAME" => "CATALOG_COMPARE_LIST",	// Уникальное имя для списка сравнения
	"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	),
	false
);?>
<div class="catalog_relative">
<div class="catalog-compare-list-top">
<a href="/gril/">Вернуться в каталог</a>
</div>
</div>
</div>
<h1>Список сравнения</h1>
<?$APPLICATION->IncludeComponent("bitrix:catalog.compare.result", "whogrill_compare", array(
	"NAME" => "CATALOG_COMPARE_LIST",
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "8",
	"FIELD_CODE" => array(
		0 => "NAME",
		1 => "PREVIEW_PICTURE",
		2 => "PREVIEW_TEXT",
	),
	"PROPERTY_CODE" => array(
		0 => "BRAND",
		1 => "ART",
		2 => "VES",
		3 => "DLINA",
		4 => "VISOTA",
		5 => "SHIRINA",
		6 => "GLUBINA",
		7 => "ALUMINIUM_TRAYS",
		8 => "SIDE_BURNER",
		9 => "SIDE_TABLES",
		10 => "TERMOMETER",
		11 => "GAS",
		12 => "GARANTY",
		13 => "HOLDER",
		14 => "DIAMETER",
		15 => "LENGTH_CABLE",
		16 => "DOPNAME",
		17 => "HOT_SAFETY",
		18 => "INFRARED_BURNER",
		19 => "FRAME",
		20 => "COUNT_BURNERS",
		21 => "BASKET",
		22 => "CARCASS",
		23 => "POT",
		24 => "COVER",
		25 => "POWER_SEAR_STATION",
		26 => "POWER_SIDE_BURNERS",
		27 => "POWER_BURNERS",
		28 => "POWER_ELECTRICHEATER",
		29 => "WHEELS",
		30 => "IN_SALE",
		31 => "WORK_LIGHT",
		32 => "HIGHLIGHTING_PENS",
		33 => "WORKING_GRILLE",
		34 => "TABLE",
		35 => "SIZE_WORKING_GRILLE",
		36 => "PACKAGE_SIZE",
		37 => "GRILLE",
		38 => "HANDLERS",
		39 => "TANK",
		40 => "GRID_HEATING",
		41 => "SYSTEM_GBS",
		42 => "SEAR_STATION",
		43 => "CLEANING",
		44 => "IGNITION_SYSTEM",
		45 => "COUNTRY",
		46 => "TIMER",
		47 => "LIST",
		48 => "COLOR",
		49 => "ELECTRIC_SPIT",
		50 => "",
	),
	"ELEMENT_SORT_FIELD" => "name",
	"ELEMENT_SORT_ORDER" => "asc",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "Y",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"DETAIL_URL" => "",
	"BASKET_URL" => "/personal/basket.php",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_PRICE_COUNT" => "Y",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"CONVERT_CURRENCY" => "Y",
	"CURRENCY_ID" => "RUB",
	"DISPLAY_ELEMENT_SELECT_BOX" => "Y",
	"ELEMENT_SORT_FIELD_BOX" => "name",
	"ELEMENT_SORT_ORDER_BOX" => "asc",
	"ELEMENT_SORT_FIELD_BOX2" => "id",
	"ELEMENT_SORT_ORDER_BOX2" => "desc",
	"HIDE_NOT_AVAILABLE" => "N",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>