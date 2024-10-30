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
<div class="services-category">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="services__item" data-popup="services-popup"><?=$arItem["NAME"]?></div> <!-- Я бы тут присваивал id элемента к template, для получения html из popup -->
<template id="popup-services">
            <div class="popup-services-cover">
                <div class="popup-services__title">
                    БРЕНДИНГ
                </div>
                <div class="popup-services__category">
                    <?=$arItem["NAME"]?>
                </div>
                <div class="popup-services__desc">
                    <?=$arItem["DETAIL_TEXT"]?>
                </div>
            </div>
        </template>
<?endforeach;?>
</div>
