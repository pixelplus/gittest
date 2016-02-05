<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
if(!CModule::IncludeModule("iblock"))
   return;
define("STOP_STATISTICS", true);
define("PUBLIC_AJAX_MODE", true);
?>
<?$APPLICATION->IncludeComponent(
   "bitrix:player",
   "",
   Array(
		"PLAYER_TYPE" => "auto",
		"USE_PLAYLIST" => "N",
		"PATH" => $_POST['path'],
		"PROVIDER" => "",
		"STREAMER" => "",
		"WIDTH" => "560",
		"HEIGHT" => "315",
		"PREVIEW" => "",
		"FILE_TITLE" => "",
		"FILE_DURATION" => "",
		"FILE_AUTHOR" => "",
		"FILE_DATE" => "",
		"FILE_DESCRIPTION" => "",
		"SKIN_PATH" => "/bitrix/components/bitrix/player/mediaplayer/skins",
		"SKIN" => "",
		"CONTROLBAR" => "bottom",
		"WMODE" => "opaque",
		"LOGO" => "",
		"LOGO_LINK" => "",
		"LOGO_POSITION" => "none",
		"PLUGINS" => array(),
		"ADDITIONAL_FLASHVARS" => "",
		"AUTOSTART" => "N",
		"REPEAT" => "none",
		"VOLUME" => "90",
		"MUTE" => "N",
		"ADVANCED_MODE_SETTINGS" => "N",
		"PLAYER_ID" => "",
		"BUFFER_LENGTH" => "10",
		"ALLOW_SWF" => "N"
  )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>