<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?=LANGUAGE_ID?>">

<head>
	<?$APPLICATION->ShowHead();?>

	<title><?$APPLICATION->ShowTitle();?></title>

	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css", true);?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/nivo-slider.css", true);?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/custom-nivo-slider.css", true);?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery.fancybox.css", true);?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/ie.css", true);?>

</head>
<body>
<?$APPLICATION->ShowPanel();?>

<div id="bgc">

	<div class="wrapper">		<!-- wrapper begins -->

		<div id="header">
			<h1><a href="#"><span>Blur Studio</span></a></h1>

			<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>
		</div>		<!-- #header ends -->

		<div id="holder">

			<div id="slideshow">
				<a href="portfolio.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/sh1.jpg" alt="" title="Work + Play illustration" /></a>
				<a href="portfolio.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/sh2.jpg" alt="" title="Graphic design project" /></a>
				<a href="portfolio.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/sh3.jpg" alt="" title="Scattered" /></a>
				<a href="portfolio.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/sh4.jpg" alt="" title="Color splash design" /></a>
				<a href="portfolio.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/sh5.jpg" alt="" title="Flux project" /></a>
				<a href="portfolio.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/sh6.jpg" alt="" title="Typography poster" /></a>
			</div>		<!-- #slideshow ends -->

			<div id="slideshowbtm"><a href="contact.html" class="quotelink">Get a quote</a></div>

			<div id="content" class="homepage">