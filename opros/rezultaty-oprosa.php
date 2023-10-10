<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("результаты опроса");
?><p style="text-align: center;">
	<b><span style="color: #ed008c; font-size: 28pt;">результаты</span></b>
</p>
 <?$APPLICATION->IncludeComponent(
	"bitrix:voting.result",
	"",
	Array(
		"CACHE_TIME" => "1200",
		"CACHE_TYPE" => "A",
		"QUESTION_DIAGRAM_1" => "-",
		"QUESTION_DIAGRAM_2" => "-",
		"QUESTION_DIAGRAM_3" => "-",
		"VOTE_ALL_RESULTS" => "N",
		"VOTE_ID" => "1"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>