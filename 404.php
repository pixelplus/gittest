<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
@define("ERROR_404","Y");
CHTTP::SetStatus("404 Not Found");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������: 404 - ����� �������� �� ����������");
?>
<h1>������: 404</h1>
<p>����� �������� �� ����������.<br>
��������� �� <a href="/">������� ��������</a>.</p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>