<?
define("STOP_STATISTICS", true);
define("PUBLIC_AJAX_MODE", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<?
/*
 * Подписка на рассылки
 */
if(CModule::IncludeModule("subscribe")){  
	if(isset($_POST['rassylka']) && $_POST['rassylka']=="Y") {
		$arFields = Array(
			"USER_ID" => ($USER->IsAuthorized()? $USER->GetID():false),
			"FORMAT" => ($FORMAT <> "html"? "text":"html"),
			"EMAIL" => $_POST['email'],
			"ACTIVE" => "Y",
			"CONFIRMED" => "Y",
			'SEND_CONFIRM' => "N"
		);
		$subscr = new CSubscription;

		//can add without authorization
		$IDrassylka = $subscr->Add($arFields);
		if($ID>0)
			CSubscription::Authorize($IDrassylka);
		/*else
			$strWarning .= "Error adding subscription: ".$subscr->LAST_ERROR."<br>";*/
	}
}
/*
 * END Подписка на рассылки
 */
?>
<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>