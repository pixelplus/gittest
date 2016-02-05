<? require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');?>
<?
CModule::IncludeModule('sale');
CModule::IncludeModule('catalog');
$cmd = htmlspecialcharsEx($_POST['action']);
$elementId = intval($_POST['id']);
$count = intval($_POST['quantity']);

//Add functional
if($elementId && $cmd == 'ADD2BASKET'){
	if ($count) {
    	$res = Add2BasketByProductID($elementId, $count, array());
	} else {
    	$res = Add2BasketByProductID($elementId, 1, array());
	}
}
//Delete functional
/*if($elementId && $cmd == 'delete'){
    $res = CSaleBasket::Delete($elementId);
}
//Update functional
if($elementId && $count && $cmd == 'update'){
    $arFields = array(
       'QUANTITY' => $count
    );
    $res = CSaleBasket::Update($elementId, $arFields);
}*/
?>
<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.small", "basket_top", Array(
	"PATH_TO_BASKET" => "/personal/basket.php",	// Страница корзины
	"PATH_TO_ORDER" => "/personal/order.php",	// Страница оформления заказа
	"SHOW_DELAY" => "Y",
	"SHOW_NOTAVAIL" => "Y",
	"SHOW_SUBSCRIBE" => "Y"
	),
	false
);?>


<? require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/epilog_after.php');?>