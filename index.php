<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Купить гриль барбекю для дачи Weber (Вебер), профессиональные американские грили и уличные мангалы (барбекюшницы) для дачи фирмы Weber в Москве");
$APPLICATION->SetPageProperty("description", "Интернет-магазин WhoGrill.ru («КТОГРИЛЬ») предлагает купить профессиональный американский гриль-барбекю для дачи фирмы Weber (Вебер) с БЕСПЛАТНОЙ доставкой по Москве и РФ. Продажа уличных грилей, мангалов и барбекюшниц, аксессуаров по доступным ценам в Москве.")
?> 
<div class="teasers"> <a href="/gril/ugolnyj/" class="teaser" > <img src="/img/ugol.jpg" width="220" height="270" alt="Угольные" title="Угольные грили"  /> </a> <a href="/gril/gazovyj/" class="teaser" > <img src="/img/gaz.jpg" width="220" height="270" alt="Газовые" title="Газовые грили"  /> </a> <a href="/gril/elektricheskij/" class="teaser" > <img src="/img/elektr.jpg" width="220" height="270" alt="Электрические" title="Электрические грили"  /> </a> <a href="/gril/aksessuary/" class="teaser" > <img src="/img/aksess.jpg" width="220" height="270" alt="Аксессуары" title="Аксессуары"  /> </a> </div>
 
<div style="clear: both;"></div>
 
<div style="height: 40px;"></div>
 
<div class="hits"> 
  <div class="header_main_list"> Хиты продаж <a href="/gril/hits/" class="all_hits" >Все хиты продаж</a> </div>
 <?$APPLICATION->IncludeComponent(
	"pixelplus:catalog.compare.list",
	"favorites_top",
	Array(
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
	)
);?> <?
$GLOBALS["arrHits"]=Array("!PROPERTY_HIT"=>false);
$APPLICATION->IncludeComponent("bitrix:catalog.section", "hits_main", array(
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "8",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
	"SECTION_USER_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc",
	"ELEMENT_SORT_FIELD2" => "id",
	"ELEMENT_SORT_ORDER2" => "desc",
	"FILTER_NAME" => "arrHits",
	"INCLUDE_SUBSECTIONS" => "Y",
	"SHOW_ALL_WO_SECTION" => "Y",
	"HIDE_NOT_AVAILABLE" => "N",
	"PAGE_ELEMENT_COUNT" => "6",
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
	"META_DESCRIPTION" => "-",
	"BROWSER_TITLE" => "-",
	"ADD_SECTIONS_CHAIN" => "N",
	"DISPLAY_COMPARE" => "N",
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
	"PAGER_TEMPLATE" => "",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?> </div>
 
<div class="banners_right"> <a href="/info/vibor-grila/" ><img src="/img/choose_grill.png" alt="Как выбрать" width="225" height="255" title="Выбор гриля"  /></a> 
  <div style="height: 9px;"></div>
 <a href="/info/recipes/" ><img src="/img/recipes.png" alt="Рецепты" width="225" height="130" title="Рецепты"  /></a> 
  <div style="height: 8px;"></div>
 <a href="/info/consultation/" ><img src="/img/prav.jpg" width="225" height="400"  /></a> </div>
 
<div style="clear: both;"></div>
 
<br />
 
<br />
 
<table width="966"> 
  <tbody> 
    <tr> <td width="182"><a href="/about/" ><img src="/img/whogrill.jpg"  /></a></td> <td width="14"></td> <td width="182"><a href="/gril/action/" ><img src="/img/action.jpg"  /></a></td> <td width="14"></td> <td width="182"><a href="/gril/new/" ><img src="/img/novinki.jpg"  /></a></td> <td width="14"></td> <td width="182"><img src="/img/sale.jpg"  /></td> <td width="14"></td> <td width="182"><a href="/info/news/" ><img src="/img/news.jpg"  /></a></td> </tr>
   </tbody>
 </table>
 
<div style="height: 26px;"></div>
 
<table width="100%"> 
  <tbody> 
    <tr> <td width="48%" valign="top"> 
 <h1>Американские грили-барбекю Weber</h1>
 <p>Традиции уличного барбекю — это не просто приготовление мяса на открытом огне, это еще и душевная компания, семья, деловые встречи, общение, друзья. На пикниках в Москве встречаются близкие люди, решаются деловые вопросы, обсуждаются политические новости, принимаются решения и просто расслабляются.</p>
<p>Что для вас главное для организации душевного праздника?</p>
<p>Хорошая компания? Да!</p>
<p>Что главное для хорошей компании?</p>
<p>Отличный гриль Вебер или любимая барбекюшница для дачи!</p>
<p>Интернет-магазин «WHOGRILL» («КТОГРИЛЬ») в Москве предлагает вам купить мангалы производства американской компании «Weber Stephen Products Co», а также заказать аксессуары, необходимые для приготовления сочных и аппетитных блюд из мяса. Продажа профессиональных барбекюшниц Weber в Москве осуществляется организацией, представляющей всемирно-популярного производителя. Это означает, что у нас вы сможете купить мангалы, грили и барбекю для дачи по хорошим ценам.</p>
       
<h2>Почему грили Weber?</h2>
<p>Неожиданная идея, продиктованная желанием вкусно поесть, воплотилась в жизнь. И вот уже газовый, угольный и электрический гриль Вебер стали незаменимыми спутниками в деле демонстрации поварского искусства. Практичность, износостойкость, удобство в использовании, а главное осуществимость желаний в любую погоду и при любых обстоятельствах получить изысканный продукт, который восхитит всех присутствующих — вот что получат покупатели, если пожелают купить гриль для улицы.</p>
       
<h2>Как выбрать дачный барбекю?</h2>
<ul> 
<li>Для ресторана, городских закусочных и кафе лучше купить профессиональный гриль-барбекю Weber у компании «КТОГРИЛЬ». Стационарные американские мангалы оборудованы широкой рабочей поверхностью, вмонтированным столиком на требуемой высоте, механической панелью управления.</li>
<li>Частные лица могут у нас купить мангалы и барбекю для дачи, эти модели нашли широкую популярность, поскольку они легкие, переносные, складные.</li>
</ul>
       </td> <td width="4%"></td> <td width="48%" valign="top"> 
        <table width="100%"> 
          <tbody> 
            <tr> <td align="center" width="140"> 
                <div class="sert"> 
                  <br />
                 
                  <br />
                 
                  <br />
                 
                  <br />
                 Weber World Dealer</div>
               </td> <td>Компания WHOGRILL («КТОГРИЛЬ») авторизированный дилер Weber World, который представляет весь ассортимента компании Weber на больших выставочных площадях и может дать компетентную и подробную консультацию.</td> </tr>
           </tbody>
         </table>
<p>Качественные технологии позволяют выбрать и заказать уличный гриль-барбекю на дачу или мангал в Москве, а так же профессиональный американский гриль для ресторана.</p>
       
<h2>Все продумано до мелочей</h2>
<p>Американский гриль Вебер обладает следующими отличительными особенностями: </p>
<ul> 
<li>сферический котел с уникальной технологией покрытия специальной эмалью в два слоя;</li>
<li>вся конструкция, включая мелкие детали, произведена из высокопрочного термостойкого сырья;</li>
<li>специальная эмаль имеет способность расширяться при нагреве, а не трескаться.</li>
<li>профессиональные уличные барбекю для дачи и аксессуары от компании Weber — это многофункциональность и качество, достойное королей;</li>
<li>аксессуары из высококачественной стали с деревянными ручками — образец стиля и эталон технологического совершенства, благодаря им ваши блюда станут вершиной кулинарного мастерства. Цены на мангалы, грили-барбекю и аксессуары Вебер в интернет-магазине «КТОГРИЛЬ» согласованы с компанией-производителем и установлены с учетом минимальных расценок.</li>
</ul>
       
<h2>Что взять на выездной пикник?</h2>
<p>Конечно уличный гриль Weber!</p>
<p>Звоните прямо сейчас!</p>
<p>И мы доставим понравившуюся вам модель в наиболее короткий срок! </p>
<p>Есть вопросы? </p>
<p>Задавайте.</p>
<p>Мы всегда найдем для вас оригинальные новинки.</p>
</td> </tr>
</tbody>
</table>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>