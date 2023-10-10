<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("о нас");
?><p style="text-align: center;">
 <span style="font-size: 28pt;">ОПРОС ГРИНАТОМ</span><br>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:voting.form",
	"opros_shablon1",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "main_page",
		"VOTE_ID" => "1",
		"VOTE_RESULT_TEMPLATE" => "modalnoe-okno.php"
	)
);?>
</p>
 <br>
 <br>
 <br><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>