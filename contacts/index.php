<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты интернет-магазина WHOGRILL в Москве: телефон, адрес Киевское шоссе, дом 1 (Бизнес-парк Румянцево)");
?> 
<div style="position: relative;"> 	 	 
  <h1>Контактная информация</h1>
 	 
  <p> 
    <br />
   </p>
 	Мы открыты для любых вопросов и предложений. 	 
  <div class="contacts_wr"> 		 
    <ul> 			 
      <li> 				<strong>Наш телефон:</strong> 				 
        <div><span class="call_phone_3">+7 (495) 961-66-22</span> и +7 (903) 961-66-22</div>
       </li>
     
      <li><strong>E-mail:</strong> 				 
        <div>info@whogrill.ru</div>
       			</li>
     			 
      <li> 				<strong>Skype:</strong> 				 
        <div>whogrill</div>
       			</li>
     			 
      <li> 				<strong>Часы работы:</strong> 				 
        <div> 					<b>интернет-магазин</b> с 09:00 до 22:00 (без выходных) 
          <br />
         					<b>магазин Москва, поселение Сосенское, ул. Сосновая 3Б</b> с 11.00 до 20.00 (без выходных) </div>
       </li>
     
      <li> 
        <div>                                      <font color="#ff0000">31 января магазин работает до 16.00</font></div>
       </li>
     
      <li> 
        <div><font color="#ff0000">                                      прием заказов по телефону до 22.00</font><span style="color: rgb(255, 0, 0);">                                     </span></div>
       </li>
     
      <li> 
        <br />
       </li>
     			 
      <li> 				<strong>Адрес в Москве:</strong> 				 
        <div>Москва, Калужское шоссе 4 км от мкад, поселение Сосенское, ул. Сосновая 3Б</div>
       			</li>
     			 
      <li> 				<strong>Схема проезда:</strong> 				 
        <div> 					<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.56933941829394;s:10:\"yandex_lon\";d:37.44928199999997;s:12:\"yandex_scale\";i:12;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.449410746;s:3:\"LAT\";d:55.5700142086;s:4:\"TEXT\";s:8:\"WHOGRILL\";}}}",
		"MAP_WIDTH" => "100%",
		"MAP_HEIGHT" => "510",
		"CONTROLS" => array(0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",),
		"OPTIONS" => array(0=>"ENABLE_DBLCLICK_ZOOM",1=>"ENABLE_RIGHT_MAGNIFIER",2=>"ENABLE_DRAGGING",),
		"MAP_ID" => ""
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'Y'
)
);?> 	 				</div>
       			</li>
     			 
      <li> 				<strong>Как добраться:</strong> 				 
        <br />
       			</li>
     
      <li><strong> 
          <br />
         </strong></li>
     			 
      <li> 				<strong class="last">Адрес для сотрудничества:</strong> 				 
        <div>        119454, г. Москва, Проспект Вернадского, д. 24</div>
       			</li>
     		</ul>
   	</div>
 	 
  <div class="right-top-send"> 		 		 
    <h2>Написать письмо</h2>
   		<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"letter",
	Array(
		"WEB_FORM_ID" => "1",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"USE_EXTENDED_ERRORS" => "N",
		"SEF_MODE" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"LIST_URL" => "",
		"EDIT_URL" => "",
		"SUCCESS_URL" => "",
		"CHAIN_ITEM_TEXT" => "",
		"CHAIN_ITEM_LINK" => "",
		"VARIABLE_ALIASES" => Array(
			"WEB_FORM_ID" => "WEB_FORM_ID",
			"RESULT_ID" => "RESULT_ID"
		)
	)
);?> 	 	</div>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>