<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������ ��������� ��������-�������� WHOGRILL: ���, ���, ���, ���");
?><h1>��������� ��������-�������� �WHOGRILL�</h1>
<table border="0" style="line-height: 30px;">
<tr>
<td>����</td><td width="20"></td><td>1147746064344</td>
</tr>
<tr>
<td>���</td><td width="20"></td><td>7729762828</td>
</tr>
<tr>
<td>���</td><td width="20"></td><td>772901001</td>
</tr>
<tr>
<td>��� ���� (�������)</td><td width="20"></td><td>27555335</td>
</tr>
<tr>
<td>������ ������������</td><td width="20"></td><td>�������� � ������������ ���������������� <noindex>��������ܻ</noindex></td>
</tr>
<tr>
<td>����������� ������������</td><td width="20"></td><td><noindex>��� ��������ܻ</noindex></td>
</tr>
<tr>
<td>���</td><td width="20"></td><td>044525555</td>
</tr>
<tr>
<td>����������� �����</td><td width="20"></td><td>������, �������� �����, ��� 1, �� ���������</td>
</tr>
<tr>
<td>����������� �����</td><td width="20"></td><td>119454, �. ������, �������� �����������, ��� 24, ���� 3</td>
</tr>
</table>
<h2>�������� ������</h2>
<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "letter", array(
	"WEB_FORM_ID" => "1",
	"IGNORE_CUSTOM_TEMPLATE" => "N",
	"USE_EXTENDED_ERRORS" => "N",
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/contacts/",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"LIST_URL" => "",
	"EDIT_URL" => "",
	"SUCCESS_URL" => "",
	"CHAIN_ITEM_TEXT" => "",
	"CHAIN_ITEM_LINK" => "",
	"VARIABLE_ALIASES" => array(
		"WEB_FORM_ID" => "WEB_FORM_ID",
		"RESULT_ID" => "RESULT_ID",
	)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>