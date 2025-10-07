<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;
@define("ERROR_404","F");
?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="format-detection" content="telephone=no">
	<link type="text/css" rel="stylesheet" href="/local/templates/.default/template_styles.css">
	<link rel="shortcut icon" type="image/x-icon" href="/local/templates/.default/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<!--<body class="headpage">-->
<body>
	<div class="wrapper">
	    	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<header>
	<div class="header-body">
		<div class="container">
		<?if(!$bIsMainPage):?>
			<a href = "/" class="header__logo"><img alt="logo" src="/local/templates/.default/img/logo.png"></a>
        <?else:?>
        	<span class="header__logo"><img alt="logo" src="/local/templates/.default/img/logo.png"></span>
        <?endif;?>

            <div class="header-body-top">
                <div class="header-body-top-column">
                    <ul class="header-body-menu">
                        <!--<li><a href="" class="header-body-menu__link">Где купить?</a></li>-->
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "menu4",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "top",
                                "COMPONENT_TEMPLATE" => "menu4",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "MENU_THEME" => "blue",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "Y"
                            ),
                            false
                        ); ?>
                    </ul>
                </div>
                <div class="header-body-top-column">
                    <ul class="header-body-menu">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "menu4",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "bottom",
                                "COMPONENT_TEMPLATE" => "menu4",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "MENU_THEME" => "blue",
                                "ROOT_MENU_TYPE" => "bottom",
                                "USE_EXT" => "Y"
                            ),
                            false
                        ); ?>
                        <li><a href="/busket/" class="header-body-menu__cart">
                                Корзина
                                <span>
                                        <? $APPLICATION->IncludeComponent(
                                            "bitrix:sale.basket.basket.line",
                                            "basketLine",
                                            array(
                                                "COMPONENT_TEMPLATE" => "basketLine",
                                                "HIDE_ON_BASKET_PAGES" => "Y",
                                                "PATH_TO_AUTHORIZE" => "",
                                                "PATH_TO_BASKET" => "/busket/",
                                                "PATH_TO_ORDER" => "/order/",
                                                "PATH_TO_PERSONAL" => SITE_DIR . "personal/",
                                                "PATH_TO_PROFILE" => SITE_DIR . "personal/",
                                                "PATH_TO_REGISTER" => SITE_DIR . "login/",
                                                "POSITION_FIXED" => "N",
                                                "SHOW_AUTHOR" => "N",
                                                "SHOW_EMPTY_VALUES" => "N",
                                                "SHOW_NUM_PRODUCTS" => "Y",
                                                "SHOW_PERSONAL_LINK" => "N",
                                                "SHOW_PRODUCTS" => "N",
                                                "SHOW_REGISTRATION" => "N",
                                                "SHOW_TOTAL_PRICE" => "N"
                                            ),
                                            false
                                        ); ?>
                                    </span>
                            </a>
                        </li>

                        <li>
                            <div class="header-body-lang">
                                <div class="header-body-lang__title">RU</div>
                                <!--<div class="header-body-lang-box">-->
                                <!--	<a href="" class="header-body-lang__item">RU</a>-->
                                <!--	<a href="" class="header-body-lang__item">EN</a>-->
                                <!--</div>-->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
			<div class="header-body-bottom">
				<div class="header-body-bottom-column">
					<div class="header-body-contacts">
                        <a href="tel:
                            <?
//                        $APPLICATION->IncludeComponent(
//                            "bitrix:main.include",
//                            ".default",
//                            array(
//                                "AREA_FILE_SHOW" => "file",
//                                "COMPONENT_TEMPLATE" => ".default",
//                                "EDIT_TEMPLATE" => "",
//                                "PATH" => "/local/include/phone.php"
//                            ),
//                            false
//                        );
                        ?>
                                " class="header-body-contacts__phone">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/phone.php"
                                ),
                                false
                            );?>
                        </a>
						<a href="" class="header-body-contacts__callback btn pl callback">Перезвонить</a>
					</div>
				</div>
				<div class="header-body-bottom-column">
					<div class="header-body-buttons">
						<!--<a href="" class="header-body-buttons__item btn-2">Изделия на заказ</a>-->
						<!--<a href="" class="header-body-buttons__item btn-2">Ремонт украшений</a>-->
					</div>
				</div>
			</div>
			<div class="header-menu__icon">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class='container'>
			<div class="header-menu">
				<ul class="header-menu-list">
					<li><a href="/katalog/" class="header-menu__link">Все коллекции</a></li>
                    
                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_THEME" => "blue",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y"
	),
	false
);?>
                    
					<li><span class="header-menu-more">Ещё <span class="header-menu-more__icon"><span></span><span></span><span></span></span></span></li>
				</ul>
			</div>
		</div>
		<div class="header-submenu">
			<div class='container'>
				<div class="header-submenu-body">
					<!--<div class="header-submenu-column">-->
					<!--	<div class="header-submenu__label">Коллекции</div>-->
					<!--	<ul class="header-submenu-list">-->
					<!--		<li><a href="" class="header-submenu__link">Коллекция 1</a></li>-->
					<!--		<li><a href="" class="header-submenu__link">Коллекция 2</a></li>-->
					<!--		<li><a href="" class="header-submenu__link">Коллекция 3</a></li>-->
					<!--		<li><a href="" class="header-submenu__link">Коллекция 4</a></li>-->
					<!--		<li><a href="" class="header-submenu__link">Коллекция 5</a></li>-->
					<!--		<li><a href="" class="header-submenu__link">Коллекция 6</a></li>-->
					<!--		<li><a href="" class="header-submenu__link">Коллекция 7</a></li>-->
					<!--	</ul>-->
					<!--</div>-->
					<div class="header-submenu-column">
						<div class="header-submenu__label">Каталог</div>
						<ul class="header-submenu-list">
							<?$APPLICATION->IncludeComponent(
                    	"bitrix:menu", 
                    	"menu", 
                        	array(
                        		"ALLOW_MULTI_SELECT" => "N",
                        		"CHILD_MENU_TYPE" => "left",
                        		"COMPONENT_TEMPLATE" => "menu2",
                        		"DELAY" => "N",
                        		"MAX_LEVEL" => "1",
                        		"MENU_CACHE_GET_VARS" => array(
                        		),
                        		"MENU_CACHE_TIME" => "3600",
                        		"MENU_CACHE_TYPE" => "N",
                        		"MENU_CACHE_USE_GROUPS" => "N",
                        		"MENU_THEME" => "blue",
                        		"ROOT_MENU_TYPE" => "left",
                        		"USE_EXT" => "Y"
                        	),
                        	false
                        );?>
						</ul>
					</div>
					<div class="header-submenu-column">
						<div class="header-submenu__label">Компания</div>
						<ul class="header-submenu-list">
							<li><a href="/o-nas" class="header-submenu__link">О нас</a></li>
							<li><a href="/dostavka-i-oplata" class="header-submenu__link">Доставка и оплата</a></li>
							<li><a href="/dostavka-i-oplata" class="header-submenu__link">Где купить?</a></li>
							<li><a href="/politika-konfidentsialnosti" class="header-submenu__link">Политика конфиденциальности</a></li>
						</ul>
						<div class="header-submenu-social">
							<a href="
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/vk.php"
                                ),
                                false
                            );?>
                                " class="header-submenu-social__item fa fa-vk"></a>
							<a href="
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/facebook.php"
                                ),
                                false
                            );?>
                                " class="header-submenu-social__item fa fa-facebook"></a>
							<a href="
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/instagram.php"
                                ),
                                false
                            );?>
                                " class="header-submenu-social__item fa fa-instagram"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<?if(ERROR_404 == 'Y'):?>
		<div class="page404">
<?else:?>
<?if(!$bIsMainPage):?>
    <?$APPLICATION->IncludeComponent(
    	"bitrix:breadcrumb",
    	"nav",
    	Array(
    		"PATH" => "",
    		"SITE_ID" => "s1",
    		"START_FROM" => "0"
    	)
    );?>
<?endif;?>
    <div class="textpage">
    			<div class='container'>
    			    <div class="textpage__title title cnt"> <?$APPLICATION->ShowTitle();?></div>
<?endif;?>