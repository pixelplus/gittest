<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Гриль барбекю электрический угольный газовый Сочи купить");
$APPLICATION->SetPageProperty("description", "Компания «WHOGRILL» предлагает купить гриль для дома в Сочи с доставкой. Доступные цены на электрические, газовые и угольные грили Weber в Сочи.");
$APPLICATION->SetTitle("Купить гриль барбекю в Сочи, заказать газовый, электрический и угольный гриль Weber (Вебер) в г. Сочи");
?><h1>Грили в Сочи</h1>
<div class="section_description">
<p>В интернет-магазине &laquo;WHOGRILL&raquo; представлен большой выбор грилей, мангалов, барбекюшниц, коптилен американского производства. Являясь авторизованным дилером компании Weber, мы предлагаем полный ассортимент моделей, выпускаемых под этим брендом. Также в нашем каталоге вы сможете найти изделия других, не менее известных на рынке компаний PRIMO GRILL, NAPOLEON, CHARBROIL, TUNDRA GRILL, VALUGRILLI, BIG GREEN EGG и т. д. У нас вы можете купить гриль в Сочи в несколько шагов. Просто выбирайте подходящую модель в каталоге и оформляйте заказ с помощью онлайн-формы или позвонив нам по телефону +7 (800) 775-45-26.</p>
<p>Наша компания реализует оборудование разных видов. В каталоге вы легко найдете угольные, газовые, электрические грили-барбекю. Не знаете, что выбрать? Вы всегда можете воспользоваться поиском по определенным параметрам или особенностям использования предлагаемого нами оборудования. Мы продаем следующие виды оборудования:</p>
</div>
<div class="section_description">
<h2>Угольные грили</h2>
<p>Их название говорит само за себя. В качестве топлива таких моделей применяется уголь. В этой категории можно купить барбекюшницу или небольшой переносной мангал, заказать стационарное оборудование. Они будут отличаться своим дизайном, производительностью, возможностями, но все модели объединяет безупречное качество, которым прославилось на рынке оборудование американских производителей.</p>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"catalog-list-city", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "8",
		"SECTION_ID" => "39",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_H1",
			1 => "UF_SEO_TITLE",
			2 => "",
		),
		"ELEMENT_SORT_FIELD" => "rand",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "sort",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"PAGE_ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "ART",
			1 => "DLINA",
			2 => "GARANTY",
			3 => "DOPNAME",
			4 => "COLOR",
			5 => "",
		),
		"OFFERS_LIMIT" => "3",
		"CACHE_PARAM" => "",
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
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_META_KEYWORDS" => "N",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "N",
		"META_DESCRIPTION" => "UF_SEO_DESC",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_BROWSER_TITLE" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"COMPARE_PATH" => ""
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
<div class="section_description">
<h2>Газовые грили</h2>
<p>Газовый гриль Вебер может работать от природного или баллонного газа. Блюда, приготовленные на таком оборудовании, имеют традиционный вкус, но по удобству и безопасности эксплуатации установки на газу превосходят твердотопливные аналоги. Вам хочется обустроить ваш загородный участок? Обратите внимание на газовые грили Weber в Сочи.</p>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"catalog-list-city", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "8",
		"SECTION_ID" => "57",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_H1",
			1 => "UF_SEO_TITLE",
			2 => "",
		),
		"ELEMENT_SORT_FIELD" => "rand",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "sort",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"PAGE_ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "ART",
			1 => "DLINA",
			2 => "GARANTY",
			3 => "DOPNAME",
			4 => "COLOR",
			5 => "",
		),
		"OFFERS_LIMIT" => "3",
		"CACHE_PARAM" => "",
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
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_META_KEYWORDS" => "N",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "N",
		"META_DESCRIPTION" => "UF_SEO_DESC",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_BROWSER_TITLE" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"COMPARE_PATH" => ""
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
<div class="section_description">
<h2>Электрические грили</h2>
Современный вид электрооборудования. На первый взгляд может показаться, что электрическая барбекющница &mdash; это не больше, чем просто сковородка. На самом деле &ndash; это функциональное и удобное оборудование, позволяющее готовить вкусные и ароматные блюда, вкусовые качества которых не уступают пище, поджаренной на открытом огне или решетке. У нас вы можете подобрать как бытовую модель с небольшой производительностью, так и профессиональный электрический гриль в Сочи.</p>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"catalog-list-city", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "8",
		"SECTION_ID" => "66",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_H1",
			1 => "UF_SEO_TITLE",
			2 => "",
		),
		"ELEMENT_SORT_FIELD" => "rand",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "sort",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"PAGE_ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "ART",
			1 => "DLINA",
			2 => "GARANTY",
			3 => "DOPNAME",
			4 => "COLOR",
			5 => "",
		),
		"OFFERS_LIMIT" => "3",
		"CACHE_PARAM" => "",
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
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_META_KEYWORDS" => "N",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "N",
		"META_DESCRIPTION" => "UF_SEO_DESC",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_BROWSER_TITLE" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"COMPARE_PATH" => ""
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
<div class="section_description">
<h2>Закажите барбекю с доставкой</h2>
<p>В нашем интернет-магазине любой покупатель может купить гриль Вебер, соответствующий его требованиям. Не нашли подходящее оборудование в каталоге? У вас специфические требования? Наши специалисты помогут решить любую задачу, подобрав нужную модель или предложив альтернативные возможности. Купите барбекю Weber в нашем интернет-магазине.</p>
<p>Весь заказанный товар доставляется нами покупателю силами транспортной компании. Тарифы грузоперевозчика не входят в каталожную цену изделий, поэтому конечную стоимость с учетом доставки лучше уточнить у менеджера при подтверждении заказа. Вы выбрали премиальное оборудование? Сумма вашего заказа превышает 40 тыс. рублей? Доставка в любой регион будет выполнена нами бесплатно.</p>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:photo.random",
	"tags_rand",
	Array(
		"IBLOCK_TYPE" => "content",
		"IBLOCKS" => array("7"),
		"PARENT_SECTION" => "",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "180",
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y"
	),
false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>