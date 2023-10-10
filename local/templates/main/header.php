<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;
?>
	
	
<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?$APPLICATION->ShowTitle();?></title>
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH ?>/assets/img/logo.png">
    
    
    <?php 
    Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH. '/assets/css/bootstrap.min.css');
    Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH. '/assets/css/animate.css');
    Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH. '/assets/css/owl.carousel.min.css');
    Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH. '/assets/css/owl.theme.default.min.css');
    Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH. '/assets/css/all.css');
    Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH. '/assets/css/flaticon.css');
    Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH. '/assets/css/themify-icons.css');
    Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH. '/assets/css/magnific-popup.css');
    Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH. '/assets/css/slick.css');
    Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH. '/assets/css/style.css');
    
    
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/jquery-1.12.1.min.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/popper.min.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/bootstrap.min.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/jquery.magnific-popup.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/owl.carousel.min.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/jquery.nice-select.min.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/slick.min.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/jquery.counterup.min.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/waypoints.min.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/contact.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/jquery.ajaxchimp.min.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/jquery.form.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/jquery.validate.min.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/mail-script.js');
    Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH. '/assets/js/custom.js');
          
    
    
    ?>
    <?$APPLICATION->ShowHead();?>
</head>

<body>
    <div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_menu"
	),
	false
);?>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->