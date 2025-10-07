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
<?if ($arResult["ITEMS"]):?>
<div class="clients">
    <div class="clients-header">
        <div class='container'>
            <div class="clients__title">Наши довольные клиенты</div>
        </div>
    </div>
    <div class="clients-items">
<?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="clients-item">
        <div class="clients-item__bg ibg"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" /></div>
        <div class="clients-item-content">
            <div class="clients-item-content__title"><? echo $arItem["NAME"]?></div>
            <div class="clients-item-content__text">
                <p><?echo $arItem["DETAIL_TEXT"]?></p>
            </div>
            <a href="/vse-kollektsii/" class="clients-item-content__btn btn-4">Хочу быть здесь</a>
        </div>
    </div>
<?endforeach;?>
    </div>
</div>
<?endif;?>
</div>

