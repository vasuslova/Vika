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
			<h1>
				<?if(!CSite::InDir('/')):?><a href="#"><?endif;?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"COMPONENT_TEMPLATE" => ".default",
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
						)
					);?>
				<?if(!CSite::InDir('/')):?></a><?endif;?>
			</h1>

			<ul>
				<li><a href="index.html" class="active">Home</a></li>
				<li><a href="page.html">About us</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
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