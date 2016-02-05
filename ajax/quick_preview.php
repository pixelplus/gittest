 <?
define("STOP_STATISTICS", true);
define("PUBLIC_AJAX_MODE", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>

<?
if(!CModule::IncludeModule("iblock"))
	return; 
	$res = CIBlockElement::GetByID($_REQUEST['ID']);
	if($arRes = $res->GetNext())
		$props = CIBlockElement::GetProperty(8, $_REQUEST['ID'], "sort", "asc", Array("CODE"=>"DOPNAME"));
		while ($ob = $props->GetNext())
		{
			$DOPNAME = mb_convert_encoding($ob['VALUE'], "UTF-8", "windows-1251");
		}
?>

<style>
#preview_block img {visibility: visible !important;}
#preview_block .loader {background: url(/img/loading_prewiev.gif) 50% 0% no-repeat; height: 64px; padding-bottom: 50px;}
</style>

<div id="preview_block" style="width: 724px;">
	<table width="100%" border="0">
		<tr>
			<td><div class="h1" style="line-height: 20px; padding-bottom: 0px; margin: 0px;"><?//=$arRes['NAME'];?><?=mb_convert_encoding($arRes['NAME'], "UTF-8", "windows-1251");?></div></td>
		</tr>
		<tr>
			<td><span class="gray" style="display: inline-block; margin-bottom: 20px;"><nobr><?=$DOPNAME?></nobr></span></td>
		</tr>
	</table>
	<a title="Подробнее" class="fancybox-item fancybox-detail" href="<?=urldecode($arRes['DETAIL_PAGE_URL']);?>" onclick="$.fancybox.close();">Подробнее</a>
	<table class="tovar" id="preview_table">
		<div class="loader"></div>
	</table>
</div>

<script>
(function() {
	$.ajax({
		type: 'POST',
		url: "<?=$arRes['DETAIL_PAGE_URL'];?>",
		success: function(prevresult) {
			var prevresultend = $(prevresult).find('table.tovar').html();
			$('.loader').hide();
			$('div#preview_block table#preview_table').html(prevresultend).find('a.fancybox-prev-min').removeClass('fancybox-prev-min');
			$.fancybox.update();
		}
	});
}());
</script>

<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>