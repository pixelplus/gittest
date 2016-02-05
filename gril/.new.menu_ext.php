<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksAdd=$APPLICATION->IncludeComponent("pixelplus:menu.sections", "", array(
	"IS_SEF" => "N",
	"ID" => $_REQUEST["ID"],
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "8",
	"SECTION_URL" => "#SITE_DIR#/gril/#SECTION_CODE#/",
	"DEPTH_LEVEL" => "3",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600"
	),
	false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksAdd);
?>