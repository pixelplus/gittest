<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������� �������");
?>
<h1>������� �������</h1>
<br>
<?$APPLICATION->IncludeComponent("bitrix:sale.personal.order", "history", Array(
	"SEF_MODE" => "N",	// �������� ��������� ���
	"ORDERS_PER_PAGE" => "20",	// ���������� ������� �� ����� ��������
	"PATH_TO_PAYMENT" => "payment.php",	// �������� ����������� ��������� �������
	"PATH_TO_BASKET" => "basket.php",	// �������� � ��������
	"SET_TITLE" => "Y",	// ������������� ��������� ��������
	"SAVE_IN_SESSION" => "Y",	// ��������� ��������� ������� � ������ ������������
	"NAV_TEMPLATE" => "",	// ��� ������� ��� ������������ ���������
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>