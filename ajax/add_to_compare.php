<? require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$APPLICATION->IncludeComponent("pixelplus:catalog.compare.list", "ajax", Array(
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
	false,
	Array("HIDE_ICONS"=>"Y")
);
//print_r($_REQUEST);
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/epilog_after.php');?>