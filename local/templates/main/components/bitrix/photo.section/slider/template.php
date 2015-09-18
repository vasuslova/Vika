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

<div id="slideshow">
	<?if (!empty($arResult)):?>
		<?foreach($arResult['ROWS']['0'] as $key => $arItem):?>
	<a href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"];?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>" title="<?=$arItem["NAME"];?>" /></a>
		<?endforeach;?>
	<?endif?>
</div>
