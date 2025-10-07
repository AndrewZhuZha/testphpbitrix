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

<?if($arResult["ITEMS"]):?>

    <div class="mainslider">
        <div class="mainslider-slider">

            <?foreach($arResult["ITEMS"] as $cell => $arItem):?>
                <?if ($arItem["PROPERTIES"]["Textbutton"]["VALUE"]):
                    $buttonText =  ($arItem["PROPERTIES"]["Textbutton"]["VALUE"]);
                else:
                    $buttonText = "Смотреть";
                endif;
                ?>

                <div class="mainslide">
                    <div class="mainslide-content">
                        <div class='container'>
                            <div class="mainslide-body">
                                <div class="mainslide__title"><? echo $arItem["NAME"]?></div>
                                <div class="mainslide__text"><? echo $arItem["PREVIEW_TEXT"]?></div>
                                <?if ($arItem["PROPERTIES"]["Hidebutton"]["VALUE"]):?>
                                    <?if($arItem["PROPERTIES"]["url"]["VALUE"]):?>
                                        <a href="<?= $arItem["PROPERTIES"]["url"]["VALUE"]?>" class="mainslide__btn btn-3"><?echo $buttonText?></a>
                                    <?else:?>
                                        <a href="/vse-kollektsii/" class="mainslide__btn btn-3"><?echo $buttonText?></a>
                                    <?endif;?>
                                <?endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="mainslide__bg ibg"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" /></div>
                </div>
            <?endforeach;?>
        </div>
        <div class="mainslider-arrows">
            <div class='container'></div>
        </div>
    </div>
<?endif;?>

