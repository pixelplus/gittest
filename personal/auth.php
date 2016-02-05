<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if($_GET['forgot_password']=='yes'):
$APPLICATION->SetTitle("Запрос пароля на восстановление");
elseif($_GET['change_password']=='yes'):
$APPLICATION->SetTitle("Востановление пароля");
elseif($_GET['register']=='yes'):
$APPLICATION->SetTitle("Регистрация");
else:
$APPLICATION->SetTitle("Авторизация");
endif;
global $USER;
if ($USER->IsAuthorized())
{
if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) 
   LocalRedirect($backurl);
}
?> <?global $USER;
if ($USER->IsAuthorized())
{
LocalRedirect("/personal/");
}?>


 <?global $USER;
if (!$USER->IsAuthorized())
{?>


<?if($_GET['forgot_password']=='yes'):?>
<h1>Регистрация</h1>
<div class="form">
 <?$APPLICATION->IncludeComponent(
   "bitrix:system.auth.forgotpasswd","",false
);?>
</div>
 <?elseif($_GET['change_password']=='yes'):?>
 <?$APPLICATION->IncludeComponent(
   "bitrix:system.auth.changepasswd","",false
);?>

 <?elseif($_GET['register']=='yes'):?>
<h1>Регистрация</h1>
<div class="form">
 <?$APPLICATION->IncludeComponent(
   "bitrix:main.register",
   "",
   Array(
      "USER_PROPERTY_NAME" => "",
      "SEF_MODE" => "N",
      "SHOW_FIELDS" => Array("NAME", "LAST_NAME"),
      "REQUIRED_FIELDS" => Array("NAME", "LAST_NAME"),
      "AUTH" => "Y",
      "USE_BACKURL" => "Y",
      "SUCCESS_PAGE" => "/personal/",
      "SET_TITLE" => "Y",
	  "USE_CAPTCHA" => "Y",
   )
);?>
</div>
 <?else:?>
<h1>Авторизация</h1>
<div class="form">
 <?$APPLICATION->IncludeComponent(
   "bitrix:system.auth.form",
   "",
   Array(
      "REGISTER_URL" => SITE_DIR."personal/auth.php?register=yes",
      "PROFILE_URL" => SITE_DIR."personal/",
      "SHOW_ERRORS" => "Y"
   )
);?>
</div>
<?endif?> <?}?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>