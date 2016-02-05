<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Гриль барбекю электрический угольный газовый Ростов-на-Дону купить");
$APPLICATION->SetPageProperty("description", "Компания «WHOGRILL» предлагает купить гриль для дома в Ростове-на-Дону с доставкой. Доступные цены на электрические, газовые и угольные грили Weber в Ростове-на-Дону.");
$APPLICATION->SetTitle("Купить гриль барбекю в Ростове-на-Дону, заказать газовый, электрический и угольный гриль Weber (Вебер) в Ростове-на-Дону");
?><h1>Грили в Ростове-на-Дону</h1>
<div class="section_description">
<p>Наверное, нет такого человека, который не любил бы отдых на природе, приготовленные на мангале ароматные блюда и общение в приятной компании. Для воплощения такой мечты в реальность нужно совсем немного &ndash; качественная и удобная в применении барбекюшница, заботливые хозяйские руки и близкие люди, собравшиеся вместе.</p>
<p>В компании &laquo;WHOGRILL&raquo; вы можете купить гриль в Ростове-на-Дону. Мы являемся авторизованным дилером одного из крупнейших производителей подобного оборудования &mdash; американской компании Weber. Модели этого бренда составляют важную часть ассортимента нашего интернет-магазина. Также мы готовы предложить оборудование, выпускаемое другими, не менее известными на рынке компаниями: PRIMO GRILL, NAPOLEON, CHARBROIL, TUNDRA GRILL, VALUGRILLI, BIG GREEN EGG и т. д.</p>
</div>
<div class="section_description">
<h2>Угольные грили</h2>
<p>Именно твердотопливные установки впервые стали использоваться для приготовления блюд на открытом огне. Опуская исторический экскурс, можно сказать, что угольные барбекюшницы идеально подходят для загородных участков, позволяющих устанавливать оборудование на улице. Ваш загородный участок не может порадовать большой площадью? Купите барбекю на угле компактных размеров. Небольшие модели не потребуют много места.</p>
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
<p>Хорошей альтернативой угольной конструкции может стать газовая барбекюшница Weber. Работает такое оборудование от природного или баллонного газа, может отличаться по своим габаритам, производительности, конструктивным особенностям. Основное преимущество, отличающее газовый гриль Weber от угольных аналогов &mdash; отсутствие сильного дымления. Покупая газовый гриль в Ростове-на-Дону в нашем интернет-магазине, вы можете также приобрести все необходимые аксессуары, газовые баллоны, расходные материалы.</p>
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
<p>Электробытовые приборы широко применяются для приготовления пищи, теперь появилась возможность приобрести электрические барбекюшницы, позволяющие готовить блюда, не уступающие по своим вкусовым качествам продуктам, поджаренным на открытом огне. В нашем каталоге вы можете подобрать небольшой домашний электрический гриль Вебер или выбрать производительную промышленную модель.</p>
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
<h2>Закажите гриль с доставкой</h2>
<p>Интернет-магазин &laquo;WHOGRILL&raquo; предлагает широкий выбор бытового и промышленного оборудования для приготовления мяса и рыбы. Для удобства наших клиентов мы реализовали простой и понятный каталог, в котором можно выбрать устройство по нужным вам параметрам. Подобрать оборудование вы также можете по особенностям его применения. У нас вы можете приобрести небольшую модель для кухни или подобрать классические варианты для загородного участка. Мы предлагаем также промышленное оборудование, отличающееся высокой производительностью и предназначенное для использования на предприятиях общественного питания.</p>
<p>Купить грили Вебер в Ростове-на-Дону вы можете с доставкой. Товар доставляется покупателю силами транспортной компании, поэтому при оформлении заявки необходимо уточнять у менеджера конечную стоимость заказа. Вы сделали комплексный заказ, сумма которого превысила 40 тыс. рублей? Мы доставим его бесплатно. Получить дополнительную информацию или сделать заказ прямо сейчас вы можете по телефону +7 (800) 775-45-26.</p>
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