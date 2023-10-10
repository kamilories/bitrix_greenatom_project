<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="col-lg-12">
        <div class="product_img_slide owl-carousel owl-theme">
            <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                <?php
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']; ?>" alt="#" ></a>
                        <h1 align="center"><?=$arItem['NAME']?></h1>
                        <p align="center"><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                <?endif; ?>
            <?php endforeach; ?>



        </div>
    </div>
<?php endif; ?>







