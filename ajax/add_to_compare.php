<? require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$APPLICATION->IncludeComponent("pixelplus:catalog.compare.list", "ajax", Array(
	"IBLOCK_TYPE" => "content",	// ��� ���������
	"IBLOCK_ID" => "8",	// ��������
	"AJAX_MODE" => "N",	// �������� ����� AJAX
	"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
	"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
	"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
	"DETAIL_URL" => "",	// URL, ������� �� �������� � ���������� �������� �������
	"COMPARE_URL" => "/compare.php",	// URL �������� � �������� ���������
	"NAME" => "CATALOG_COMPARE_LIST",	// ���������� ��� ��� ������ ���������
	"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
	),
	false,
	Array("HIDE_ICONS"=>"Y")
);
//print_r($_REQUEST);
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/epilog_after.php');?>