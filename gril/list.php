<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");

if(CModule::IncludeModule("iblock")):
$arFilter = Array('CODE'=>htmlentities(htmlspecialcharsEx($_REQUEST["SECTION_CODE"])));
$db_list = CIBlockSection::GetList(Array(), $arFilter, true);
if($ar_result = $db_list->GetNext()){
	$_REQUEST["SECTION_ID"]=$ar_result["ID"];
}
$nav = CIBlockSection::GetNavChain(false, $_REQUEST["SECTION_ID"]);
$_REQUEST["SECTION_CHAIN"]=$nav->arResult;

$APPLICATION->IncludeComponent("bitrix:catalog.smart.filter", "whogrill_invisible", array(
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "8",
	"SECTION_ID"=>$_REQUEST["SECTION_ID"],
	"FILTER_NAME" => "arrFilter",
	"HIDE_NOT_AVAILABLE" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"SAVE_IN_SESSION" => "Y",
	"INSTANT_RELOAD" => "Y",
	"PRICE_CODE" => array(
		0 => "BASE",
	),
	"XML_EXPORT" => "N",
	"SECTION_TITLE" => "NAME",
	"SECTION_DESCRIPTION" => "DESCRIPTION",
	"TEMPLATE_THEME" => "blue"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);
endif;
?>

<div class="catalog_relative">
<?$APPLICATION->IncludeComponent("pixelplus:catalog.compare.list", "favorites_count", array(
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "8",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"DETAIL_URL" => "",
	"COMPARE_URL" => "/compare.php",
	"NAME" => "CATALOG_COMPARE_LIST",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
</div>
<?
if ($USER->IsAdmin()) { 
//echo "<pre>Значение: "; print_r($id_main_sect); echo "</pre>";
}
$res = CIBlockSection::GetByID($_REQUEST["SECTION_ID"]);
if($ar_res = $res->GetNext())
$id_main_sect = $ar_res['IBLOCK_SECTION_ID'];
$first_sort = "price";
if ($id_main_sect == 69 || $_REQUEST["SECTION_ID"] == 69) {
	if (!$_COOKIE["SORT_P1"]) $first_sort = "sort";
}
//echo "<pre>Значение: "; print_r($first_sort); echo "</pre>";
?> 
<?$APPLICATION->IncludeComponent("pixelplus:seo.parent", ".default", array(
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "7",
	"SECTION_ID" => "",
	"SECTION_CODE" => "",
	"PX_MODE" => "ELEMENT",
	"ELEMENT_ID" => "",
	"ELEMENT_CODE" => $_REQUEST["SECTION_CODE"],
	"ADDITIONAL_PROP_FN" => "",
	"ADDITIONAL_PROP_FV" => "",
	"FILTER_NAME" => "",
	"FILTER_FIND_PROP" => "",
	"CACHE_SORT" => $_COOKIE["SORT"],
	"CACHE_SORT_P1" => $first_sort,//$_COOKIE["SORT_P1"],
	"CACHE_PARAM" => $_REQUEST["id"],
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N",
	"SET_STATUS_404" => "N",
	"BROWSER_TITLE" => "SEO_TITLE",
	"META_KEYWORDS" => "SEO_KEYWORDS",
	"META_DESCRIPTION" => "SEO_DESCRIPTION",
	"SEO_H1" => "SEO_H1",
	"SEO_TEXT" => "DETAIL_TEXT",
	"SET_TITLE" => "N"
	),
	false
);?> 
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>