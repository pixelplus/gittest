<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Гриль барбекю электрический угольный газовый Тюмень купить");
$APPLICATION->SetPageProperty("description", "Компания «WHOGRILL» предлагает купить гриль для дома в Тюмени с доставкой. Доступные цены на электрические, газовые и угольные грили Weber в Тюмени.");
$APPLICATION->SetTitle("Купить гриль барбекю в Тюмени, заказать газовый, электрический и угольный гриль Weber (Вебер) в Тюмени");
?><h1>Грили в Тюмени</h1>
<div class="section_description">
<p>Купить гриль в Тюмени не сложно, но если вам требуется оборудование, чье качество проверено десятилетиями, не стоит экономить на покупке. Купите барбекю Вебер в интернет-магазине &laquo;WHOGRILL&raquo;. В нашем ассортименте вы сможете подобрать оборудование, выпускаемое и другими известными американскими компаниями. У нас есть недорогие модели Char Broil, уникальные изделия BIG GREEN EGG, оборудование премиум-класса PRIMO GRILL. Приобрести подходящий гриль Weber в Тюмени в нашем интернет-магазине очень просто и удобно. Вы выбираете нужную модель, мы осуществляем доставку заказанного товара по вашему адресу.</p>
<p>Выбор барбекюшницы всегда зависит от особенностей ее эксплуатации, требований к техническим характеристикам, виду используемого топлива. В нашем магазине вы можете подобрать модель любого вида. Мы предлагаем:</p>
</div>
<div class="section_description">
<h2>Угольные грили</h2>
<p>В эту категорию входит твердотопливное оборудование разной производительности. Вам нужен небольшой переносной мангал для веселых пикников на природе? Подбираете красивое барбекю для загородного участка? Вам требуется производительное оборудование для летнего кафе или ресторана? Все это и многое другое вы без труда сможете подобрать в нашем каталоге. </p>
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
<p>Газовые гриль и барбекю используют в качестве топлива природный или баллонный газ. Их безопасно и удобно использовать. Они соответствуют требованиям пожарной безопасности. Модель легко установить и подключить. Но самое главное преимущество, которое отличает газовый гриль Weber &mdash; приготовленная на нем безупречно вкусная еда.</p>
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
<p>Электрические барбекюшницы можно считать разновидностью бытового и промышленного электрооборудования. Они работают от обычной электросети. Так как в приготовлении пищи не используется открытый огонь, они полностью пожаробезопасны. Если вам нужно оборудование для использования в закрытых помещениях, без сомнения выбирайте электрический гриль в Тюмени. Несмотря на сходство, это не простая электросковородка, на которой можно поджарить стейк, а вполне полноценная барбекюшница, обеспечивающая характерный вкус блюд. Такого эффекта производители добиваются за счет использования современных технологий и особой конструкции установки.</p>
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
<p>Одной из разновидностей электрогрилей являются инфракрасные модели. Такие устройства можно найти в ассортименте компании Char Broil, известной, как производитель недорогого современного оборудования высокого качества.</p>
<h2>Закажите барбекюшницу с доставкой</h2>
<p>Вам нужны качественные приборы и аксессуары к ним? Купите барбекю Вебер в нашем интернет-магазине в несколько простых шагов:</p>
<ul class="list">
<li>Определитесь с типом оборудования, требованиями к нему.</li>
<li>Выберите подходящее устройство в каталоге или обратитесь за помощью к нашим менеджерам.</li>
<li>Оформите заявку и оплатите товар удобным для вас способом.</li>
<li>Ожидайте доставку по указанному адресу.</li>
</ul>
<p>Доставка осуществляется нами во все регионы России силами транспортных компаний. Тарифы грузоперевозчика не входят в каталожную цену товаров, поэтому конечную стоимость вашего заказа необходимо уточнять у менеджеров при оформлении покупки. Доставка товаров на сумму более 40 тыс. рублей будет выполнена нами бесплатно.</p>
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