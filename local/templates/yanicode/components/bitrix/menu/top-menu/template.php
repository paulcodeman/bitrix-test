<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="nav-list">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
<a href="<?=$arItem["LINK"]?>" class="nav-list__item"><?=$arItem["TEXT"]?></a>
<?endforeach?>

</nav>
<?endif?>