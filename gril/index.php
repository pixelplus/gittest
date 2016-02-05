<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "����� ������� �������� ������������ ������� ������");
$APPLICATION->SetPageProperty("description", "�������, �������� � ������������� ����� ��������-�������� WHOGRILL � ������.");
$APPLICATION->SetTitle("������� ��������� � ��������, �������, ������������� ����� ��� ������� � ���������� Weber");
?>
<h1>������� ������ Weber</h1>
<?$APPLICATION->IncludeComponent("bitrix:catalog.top", "catalog_top_2", Array(
	"IBLOCK_TYPE" => "content",	// ��� ���������
	"IBLOCK_ID" => "8",	// ��������
	"ELEMENT_SORT_FIELD" => "sort",	// �� ������ ���� ��������� ��������
	"ELEMENT_SORT_ORDER" => "asc",	// ������� ���������� ���������
	"ELEMENT_SORT_FIELD2" => "id",	// ���� ��� ������ ���������� ���������
	"ELEMENT_SORT_ORDER2" => "desc",	// ������� ������ ���������� ���������
	"HIDE_NOT_AVAILABLE" => "N",	// �� ���������� ������, ������� ��� �� �������
	"ELEMENT_COUNT" => "9",	// ���������� ��������� ���������
	"LINE_ELEMENT_COUNT" => "3",	// ���������� ��������� ��������� � ����� ������ �������
	"PROPERTY_CODE" => array(	// ��������
		0 => "ART",
		1 => "GARANTY",
		2 => "DOPNAME",
		3 => "DLINA",
		4 => "COLOR",
		5 => "",
	),
	"OFFERS_LIMIT" => "5",	// ������������ ���������� ����������� ��� ������ (0 - ���)
	"SECTION_URL" => "",	// URL, ������� �� �������� � ���������� �������
	"DETAIL_URL" => "",	// URL, ������� �� �������� � ���������� �������� �������
	"BASKET_URL" => "/personal/basket/",	// URL, ������� �� �������� � �������� ����������
	"ACTION_VARIABLE" => "action",	// �������� ����������, � ������� ���������� ��������
	"PRODUCT_ID_VARIABLE" => "id",	// �������� ����������, � ������� ���������� ��� ������ ��� �������
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// �������� ����������, � ������� ���������� ���������� ������
	"PRODUCT_PROPS_VARIABLE" => "prop",	// �������� ����������, � ������� ���������� �������������� ������
	"SECTION_ID_VARIABLE" => "SECTION_ID",	// �������� ����������, � ������� ���������� ��� ������
	"CACHE_TYPE" => "A",	// ��� �����������
	"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
	"CACHE_GROUPS" => "Y",	// ��������� ����� �������
	"DISPLAY_COMPARE" => "N",	// �������� ������ ���������
	"PRICE_CODE" => array(	// ��� ����
		0 => "BASE",
	),
	"USE_PRICE_COUNT" => "N",	// ������������ ����� ��� � �����������
	"SHOW_PRICE_COUNT" => "1",	// �������� ���� ��� ����������
	"PRICE_VAT_INCLUDE" => "Y",	// �������� ��� � ����
	"PRODUCT_PROPERTIES" => "",	// �������������� ������
	"USE_PRODUCT_QUANTITY" => "N",	// ��������� �������� ���������� ������
	"CONVERT_CURRENCY" => "N",	// ���������� ���� � ����� ������
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
	"PAGER_TITLE" => "������",
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
<p>���������� ������������ ������������ ����� WEBER �� ��������� ���� � ������ ���������� ����� �������� ��������-������� &laquo;WHOGRILL&raquo;. �� ������������ � �������������� ������ ��������, ��� ���� ��� ����������� �������������� �������� ������� � ������������ �� ��������� �� ������������ ������ ������. �� ����� �������� &mdash; ����� ����� ������������� �����������.</p>
 
<h2>����������� ������������ ������ WEBER</h2>
 
<p>� ��������-�������� &laquo;WHOGRILL&raquo; �� ������ ������:</p>
 
<ul class="list">
  <li>���������� � ����������� <a href="/gril/elektricheskij/" >������������� �����</a>;</li>
 	
  <li>���������������� <a href="/gril/gazovyj/" >������� �����</a>;</li>
 	
  <li>���������� � ���������� <a href="/gril/ugolnyj/" >�������� �����</a>;</li>
 	
  <li>��������� <a href="/gril/aksessuary/" >���������� ��� ������</a>.</li>
 </ul>
 
<p>��������� � &laquo;WHOGRILL&raquo;, �� ��������� ���������� �������� ��� ������ �� ����� �� 10000 ������, � ����� ���������� ������ ���� ������� �������������, ������� ������ � ��������� ������� �������� ������. ��� ������ �������� ������ ����� ������� ��� ��������� � ���� �� �������� ��� Skype. �� ���������� � �������� ��� ����� � ������ �����.</p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>