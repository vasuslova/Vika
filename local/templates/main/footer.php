<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
</div>		<!-- #content ends -->

</div>		<!-- #holder ends -->

<div id="logos">
    <ul>
        <li><a href="http://php.net/"><img src="<?=SITE_TEMPLATE_PATH;?>/images/php.png" alt="PHP" /></a></li>
        <li><a href="http://mysql.com/"><img src="<?=SITE_TEMPLATE_PATH;?>/images/mysql.png" alt="MySQL" /></a></li>
        <li><a href="http://jquery.com/"><img src="<?=SITE_TEMPLATE_PATH;?>/images/jquery.png" alt="jQuery" /></a></li>
        <li><a href="http://wordpress.org/"><img src="<?=SITE_TEMPLATE_PATH;?>/images/wp.png" alt="WordPress" /></a></li>
        <li><a href="http://expressionengine.com/"><img src="<?=SITE_TEMPLATE_PATH;?>/images/ee.png" alt="Expression Engine" /></a></li>
    </ul>
</div>		<!-- #logos ends -->

<div id="footer">
    <p class="left">
            <?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
            <span>
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
            </span>
            <?if(!CSite::InDir('/')):?></a><?endif;?>
    </p>
    <p class="right">Copyright &copy; <?=date('Y');?>. Все права защищены.</p>
</div>		<!-- #footer ends -->

</div>		<!-- wrapper ends -->

</div>

<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.nivo.slider.pack.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.fancybox.pack.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.easing.pack.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/DD_belatedPNG.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/filter.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/custom.js", true);?>

<!-- Twitter badge-->
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/enstyled.json?callback=twitterCallback2&amp;count=1"></script>

</body>
</html>
