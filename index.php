<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������ ����� ������� ��� ���� Weber (�����), ���������������� ������������ ����� � ������� ������� (������������) ��� ���� ����� Weber � ������");
$APPLICATION->SetPageProperty("description", "��������-������� WhoGrill.ru (��������ܻ) ���������� ������ ���������������� ������������ �����-������� ��� ���� ����� Weber (�����) � ���������� ��������� �� ������ � ��. ������� ������� ������, �������� � �����������, ����������� �� ��������� ����� � ������.")
?> 
<div class="teasers"> <a href="/gril/ugolnyj/" class="teaser" > <img src="/img/ugol.jpg" width="220" height="270" alt="��������" title="�������� �����"  /> </a> <a href="/gril/gazovyj/" class="teaser" > <img src="/img/gaz.jpg" width="220" height="270" alt="�������" title="������� �����"  /> </a> <a href="/gril/elektricheskij/" class="teaser" > <img src="/img/elektr.jpg" width="220" height="270" alt="�������������" title="������������� �����"  /> </a> <a href="/gril/aksessuary/" class="teaser" > <img src="/img/aksess.jpg" width="220" height="270" alt="����������" title="����������"  /> </a> </div>
 
<div style="clear: both;"></div>
 
<div style="height: 40px;"></div>
 
<div class="hits"> 
  <div class="header_main_list"> ���� ������ <a href="/gril/hits/" class="all_hits" >��� ���� ������</a> </div>
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
	"PAGER_TITLE" => "������",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?> </div>
 
<div class="banners_right"> <a href="/info/vibor-grila/" ><img src="/img/choose_grill.png" alt="��� �������" width="225" height="255" title="����� �����"  /></a> 
  <div style="height: 9px;"></div>
 <a href="/info/recipes/" ><img src="/img/recipes.png" alt="�������" width="225" height="130" title="�������"  /></a> 
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
 <h1>������������ �����-������� Weber</h1>
 <p>�������� �������� ������� � ��� �� ������ ������������� ���� �� �������� ����, ��� ��� � �������� ��������, �����, ������� �������, �������, ������. �� �������� � ������ ����������� ������� ����, �������� ������� �������, ����������� ������������ �������, ����������� ������� � ������ �������������.</p>
<p>��� ��� ��� ������� ��� ����������� ��������� ���������?</p>
<p>������� ��������? ��!</p>
<p>��� ������� ��� ������� ��������?</p>
<p>�������� ����� ����� ��� ������� ������������ ��� ����!</p>
<p>��������-������� �WHOGRILL� (��������ܻ) � ������ ���������� ��� ������ ������� ������������ ������������ �������� �Weber Stephen Products Co�, � ����� �������� ����������, ����������� ��� ������������� ������ � ���������� ���� �� ����. ������� ���������������� ����������� Weber � ������ �������������� ������������, �������������� ��������-����������� �������������. ��� ��������, ��� � ��� �� ������� ������ �������, ����� � ������� ��� ���� �� ������� �����.</p>
       
<h2>������ ����� Weber?</h2>
<p>����������� ����, �������������� �������� ������ ������, ����������� � �����. � ��� ��� �������, �������� � ������������� ����� ����� ����� ������������ ���������� � ���� ������������ ���������� ���������. ������������, ���������������, �������� � �������������, � ������� �������������� ������� � ����� ������ � ��� ����� ��������������� �������� ���������� �������, ������� �������� ���� �������������� � ��� ��� ������� ����������, ���� �������� ������ ����� ��� �����.</p>
       
<h2>��� ������� ������ �������?</h2>
<ul> 
<li>��� ���������, ��������� ���������� � ���� ����� ������ ���������������� �����-������� Weber � �������� ��������ܻ. ������������ ������������ ������� ����������� ������� ������� ������������, �������������� �������� �� ��������� ������, ������������ ������� ����������.</li>
<li>������� ���� ����� � ��� ������ ������� � ������� ��� ����, ��� ������ ����� ������� ������������, ��������� ��� ������, ����������, ��������.</li>
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
               </td> <td>�������� WHOGRILL (��������ܻ) ���������������� ����� Weber World, ������� ������������ ���� ������������ �������� Weber �� ������� ����������� �������� � ����� ���� ������������ � ��������� ������������.</td> </tr>
           </tbody>
         </table>
<p>������������ ���������� ��������� ������� � �������� ������� �����-������� �� ���� ��� ������ � ������, � ��� �� ���������������� ������������ ����� ��� ���������.</p>
       
<h2>��� ��������� �� �������</h2>
<p>������������ ����� ����� �������� ���������� �������������� �������������: </p>
<ul> 
<li>����������� ����� � ���������� ����������� �������� ����������� ������ � ��� ����;</li>
<li>��� �����������, ������� ������ ������, ����������� �� �������������� ������������� �����;</li>
<li>����������� ����� ����� ����������� ����������� ��� �������, � �� ����������.</li>
<li>���������������� ������� ������� ��� ���� � ���������� �� �������� Weber � ��� ��������������������� � ��������, ��������� �������;</li>
<li>���������� �� ������������������ ����� � ����������� ������� � ������� ����� � ������ ���������������� ������������, ��������� �� ���� ����� ������ �������� ����������� ����������. ���� �� �������, �����-������� � ���������� ����� � ��������-�������� ��������ܻ ����������� � ���������-�������������� � ����������� � ������ ����������� ��������.</li>
</ul>
       
<h2>��� ����� �� �������� ������?</h2>
<p>������� ������� ����� Weber!</p>
<p>������� ����� ������!</p>
<p>� �� �������� ������������� ��� ������ � �������� �������� ����! </p>
<p>���� �������? </p>
<p>���������.</p>
<p>�� ������ ������ ��� ��� ������������ �������.</p>
</td> </tr>
</tbody>
</table>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>