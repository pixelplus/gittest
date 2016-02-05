<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
@define("ERROR_404","Y");
CHTTP::SetStatus("404 Not Found");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ошибка: 404 - такой страницы не существует");
?>
<h1>Ошибка: 404</h1>
<p>Такой страницы не существует.<br>
Вернуться на <a href="/">главную страницу</a>.</p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>