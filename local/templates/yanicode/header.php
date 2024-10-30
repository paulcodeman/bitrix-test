<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta class="js-meta-viewport" name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
	<?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/template_styles.css">
</head>

<body>
<header class="header">
        <div class="container">
            <div class="header-wrapper">
                <a href="/" class="header__logo">
                    <img width="300" height="92" src="<?=SITE_TEMPLATE_PATH?>/assets/images/svg/logo-yanicode.svg" alt="yanicode">
                </a>
                <div class="header__burger header__burger_close">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </div>
                <div class="header-nav">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top-menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(0=>"",),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>
                    <div class="header__phone">
					<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/phone.php"
	)
);?>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="website-workarea">
<?$APPLICATION->ShowPanel()?>