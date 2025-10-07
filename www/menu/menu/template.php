<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):
    $countpunmenu = 0;
    ?>
    <div class="header-bottom">
        <div class='container'>
            <div class="header-menu">
                <ul class="header-menu-list">
                    <li><a href="/catalog/" class="header-menu__link">Все коллекции</a></li>
<?
foreach($arResult as $arItem):
    if ($countpunmenu <=3):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
    $countpunmenu++;
?>
    <li<?if($arItem["SELECTED"]):?> class="active"<?endif?>>
    <a href="<?=$arItem["LINK"]?>" class="header-menu__link"><?=$arItem["TEXT"]?></a></li>

    <?endif?>
<?endforeach?>
        <li><span class="header-menu-more">Ещё <span class="header-menu-more__icon"><span></span><span></span><span></span></span></span></li>
    </ul>
    </div>
    </div>
    <div class="header-submenu">
        <div class='container'>
            <div class="header-submenu-body">
                <div class="header-submenu-column">
                    <div class="header-submenu__label">Каталог</div>
                    <ul class="header-submenu-list">
                        <?
                        foreach($arResult as $arItem):
                        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                        continue;
                        ?>
                        <li<?if($arItem["SELECTED"]):?> class="active"<?endif?>>
                        <a href="<?=$arItem["LINK"]?>" class="header-submenu__link"><?=$arItem["TEXT"]?></a></li>

                        <?endforeach?>

                    </ul>
                </div>
            <div class="header-submenu-column">
        <div class="header-submenu__label">Компания</div>
    <ul class="header-submenu-list">
        <li><a href="/onas/" class="header-submenu__link">О нас</a></li>
        <li><a href="/dostavka-i-oplata/" class="header-submenu__link">Доставка и оплата</a></li>
        <!--<li><a href="" class="header-submenu__link">Где купить?</a></li>--!>
        <li><a href="" class="header-submenu__link">Политика конфиденциальности</a></li>
    </ul>
        <div class="header-submenu-social">
            <?$APPLICATION->IncludeFile
                (
                    SITE_DIR."/include/social-links.php",
                    array(),
                    array("MODE"=>"text")
                )
            ?>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>


<?endif?>
