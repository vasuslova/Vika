<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<ul>
	<?foreach($arResult as $key => $arItem):?>
		<?if($arItem['DEPTH_LEVEL'] == 1):?>
		<li><a href="<?=$arItem["LINK"];?>" <?if($arItem["SELECTED"]):?> class="current" <?endif?>><span></span><?=$arItem["TEXT"];?></a></li>
		<?endif;?>
	<?endforeach;?>
	</ul>
<?endif?>