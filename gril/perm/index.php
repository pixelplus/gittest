<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Гриль барбекю электрический угольный газовый Пермь купить");
$APPLICATION->SetPageProperty("description", "Компания «WHOGRILL» предлагает купить гриль для дома в Перми с доставкой. Доступные цены на электрические, газовые и угольные грили Weber в Перми.");
$APPLICATION->SetTitle("Купить гриль барбекю в Перми, заказать газовый, электрический и угольный гриль Weber (Вебер) в Перми");
?><h1>Грили в Перми</h1>
<div class="section_description">
<p>В компании &laquo;WHOGRILL&raquo; вы можете купить гриль в Перми по привлекательной цене. Основу нашего ассортимента составляет продукция американской компании Weber, но мы готовы предложить нашим покупателям оборудование и других известных брендов: PRIMO GRILL, NAPOLEON, CHARBROIL, TUNDRA GRILL, VALUGRILLI, BIG GREEN EGG и т. д. Любые модели, огромный выбор аксессуаров и полезных принадлежностей &ndash; мы поможем сделать ваш отдых приятным, а приготовление блюд простым.</p>
<p>В нашем интернет-магазине вы можете купить барбекю различных видов. У нас вы сможете подобрать модель, которая будет полностью отвечать вашим требованиям. Вам требуется небольшой мангал для дачи или производительное промышленное оборудование? Мы найдем для вас подходящее решение. В нашем магазине представлены:</p>
</div>
<div class="section_description">
<h2>Угольные грили</h2>
<p>Гриль барбекю Вебер на углях &mdash; отличное решение для загородного дома. Мы подберем для вас модель, подходящую по размеру, производительности и другим характеристикам, предложим уголь, расходные материалы и полезные мелочи. Купите барбекюшницу Weber, чтобы порадовать своих близких вкусными и полезными блюдами, приготовленными на открытом огне.</p>
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
<p>Газовый гриль Weber может работать от природного или баллонного газа. С их помощью легко готовить традиционные блюда, но по сравнению с угольными аналогами они значительно удобнее в эксплуатации, не дымят и не коптят. В нашем интернет-магазине вы можете подобрать газовый гриль в Перми известных производителей.</p>
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
<p>Покупать электрический гриль в Перми целесообразно для использования в закрытых помещениях. Небольшая модель подойдет для кухни в обычной городской квартире, производительный мощный аппарат станет отличным помощником на кухне ресторана или кафе. Бытовая электрическая барбекюшница поможет приготовить, не выходя из дома блюда, обладающие всеми вкусовыми качествами продуктов, поджаренных на открытом огне.</p>
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
<p>Являясь авторизованным дилером компании Weber, мы готовы предложить нашим покупателям надежное оборудование, хорошо известное на рынках всего мира. Покупка очень проста и удобна.</p>
<h2>Покупка с доставкой</h2>
<p>Компания &laquo;WHOGRILL&raquo; осуществляет продажу грилей с доставкой по России. Купить гриль Вебер в нашем магазине можно за несколько простых шагов:</p>
<ul>
<li>Подберите подходящую модель в каталоге самостоятельно или получите консультацию наших специалистов по телефону +7 (800) 775-45-26.</li>
<li>Оформите заявку на выбранные товары с помощью онлайн-формы или по телефону.</li>
<li>Оплатите товар. </li>
<li>Ожидайте доставку. </li>
</ul>
<p>Доставка осуществляется силами транспортных компаний. Тарифы грузоперевозчика не включены в каталожную стоимость изделий, поэтому конечную стоимость покупки уточняйте у менеджера. Вы планируете сделать большой заказ, сумма которого будет более 40 тыс. рублей? В этом случае доставка осуществляется нами бесплатно.&nbsp; Мы постарались сделать сотрудничество с нами максимально выгодным для наших клиентов. В нашем магазине вы можете выбрать не только грили, но и все необходимые для их использования аксессуары.</p>
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