<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("История заказов");
?>
<h1>История заказов</h1>
<br>
<?$APPLICATION->IncludeComponent("bitrix:sale.personal.order", "history", Array(
	"SEF_MODE" => "N",	// Включить поддержку ЧПУ
	"ORDERS_PER_PAGE" => "20",	// Количество заказов на одной странице
	"PATH_TO_PAYMENT" => "payment.php",	// Страница подключения платежной системы
	"PATH_TO_BASKET" => "basket.php",	// Страница с корзиной
	"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	"SAVE_IN_SESSION" => "Y",	// Сохранять установки фильтра в сессии пользователя
	"NAV_TEMPLATE" => "",	// Имя шаблона для постраничной навигации
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>