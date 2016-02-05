<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Грили газовые угольные электрически барбекю Москва");
$APPLICATION->SetPageProperty("description", "Газовые, угольные и электрические грили интернет-магазина WHOGRILL в Москве.");
$APPLICATION->SetTitle("Каталог продукции — угольные, газовые, электрические грили для барбекю и аксессуары Weber");
?>
<h1>Каталог грилей Weber</h1>
<?$APPLICATION->IncludeComponent("bitrix:catalog.top", "catalog_top_2", Array(
	"IBLOCK_TYPE" => "content",	// Тип инфоблока
	"IBLOCK_ID" => "8",	// Инфоблок
	"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
	"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
	"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
	"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
	"HIDE_NOT_AVAILABLE" => "N",	// Не отображать товары, которых нет на складах
	"ELEMENT_COUNT" => "9",	// Количество выводимых элементов
	"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
	"PROPERTY_CODE" => array(	// Свойства
		0 => "ART",
		1 => "GARANTY",
		2 => "DOPNAME",
		3 => "DLINA",
		4 => "COLOR",
		5 => "",
	),
	"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
	"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
	"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
	"BASKET_URL" => "/personal/basket/",	// URL, ведущий на страницу с корзиной покупателя
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
	"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
	"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
	"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"DISPLAY_COMPARE" => "N",	// Выводить кнопку сравнения
	"PRICE_CODE" => array(	// Тип цены
		0 => "BASE",
	),
	"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
	"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
	"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
	"PRODUCT_PROPERTIES" => "",	// Характеристики товара
	"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
	"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
	),
	false
);?> 
<? /*$APPLICATION->IncludeComponent("bitrix:catalog.section", "catalog-list-new", array(
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "8",
	"SECTION_ID" => "",
	"SECTION_CODE" => "",
	"SECTION_USER_FIELDS" => array(
		0 => "UF_SEO_TITLE",
		1 => "",
	),
	"ELEMENT_SORT_FIELD" => "catalog_PRICE_1",
	"ELEMENT_SORT_ORDER" => ($arParams["CACHE_SORT"]=="desc"?"desc":"asc"),
	"ELEMENT_SORT_FIELD2" => "id",
	"ELEMENT_SORT_ORDER2" => "desc",
	"FILTER_NAME" => "arrFilter",
	"INCLUDE_SUBSECTIONS" => "Y",
	"SHOW_ALL_WO_SECTION" => "Y",
	"HIDE_NOT_AVAILABLE" => "N",
	"PAGE_ELEMENT_COUNT" => "9",
	"LINE_ELEMENT_COUNT" => "3",
	"PROPERTY_CODE" => array(
		0 => "ART",
		1 => "DLINA",
		2 => "GARANTY",
		3 => "DOPNAME",
		4 => "COLOR",
		5 => "",
	),
	"OFFERS_LIMIT" => "5",
	"CACHE_PARAM" => implode($_SESSION["CATALOG_COMPARE_LIST"][1]),
	"SECTION_URL" => "",
	"DETAIL_URL" => "",
	"BASKET_URL" => "/personal/basket/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",
	"PRODUCT_PROPS_VARIABLE" => "prop",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"SET_META_KEYWORDS" => "Y",
	"META_KEYWORDS" => "-",
	"SET_META_DESCRIPTION" => "Y",
	"META_DESCRIPTION" => "UF_SEO_DESC",
	"BROWSER_TITLE" => "-",
	"ADD_SECTIONS_CHAIN" => "Y",
	"DISPLAY_COMPARE" => "Y",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "N",
	"CACHE_FILTER" => "N",
	"PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRODUCT_PROPERTIES" => array(
	),
	"USE_PRODUCT_QUANTITY" => "N",
	"CONVERT_CURRENCY" => "N",
	"PAGER_TEMPLATE" => "faq",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);*/?>
<p>Приобрести оригинальный американский гриль WEBER по доступной цене в Москве предлагает своим клиентам интернет-магазин &laquo;WHOGRILL&raquo;. Мы сотрудничаем с производителем грилей напрямую, что дает нам возможность контролировать качество товаров и поддерживать их стоимость на сравнительно низком уровне. На выбор клиентов &mdash; грили самых разнообразных модификаций.</p>
 
<h2>Ассортимент американских грилей WEBER</h2>
 
<p>В интернет-магазине &laquo;WHOGRILL&raquo; вы можете купить:</p>
 
<ul class="list">
  <li>компактные и экономичные <a href="/gril/elektricheskij/" >электрические грили</a>;</li>
 	
  <li>профессиональные <a href="/gril/gazovyj/" >газовые грили</a>;</li>
 	
  <li>практичные и безопасные <a href="/gril/ugolnyj/" >угольные грили</a>;</li>
 	
  <li>различные <a href="/gril/aksessuary/" >аксессуары для грилей</a>.</li>
 </ul>
 
<p>Обращаясь в &laquo;WHOGRILL&raquo;, вы получаете бесплатную доставку при заказе на сумму от 10000 рублей, а также бесплатную сборку всех моделей электрических, газовых грилей и некоторых моделей угольных грилей. Для заказа оформите заявку через корзину или свяжитесь с нами по телефону или Skype. Мы обработаем и доставим ваш заказ в сжатые сроки.</p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>