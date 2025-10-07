<?
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
use Bitrix\Sale;
use Bitrix\Main\Loader;

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
Loader::includeModule('catalog');
Loader::includeModule('sale');

$basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());


if (isset($_POST["data_del"])) {
    $el_del = $_POST["data_del"];

    $basket->getItemById($el_del)->delete();
    $basket->save();

    $basket->save();
}

$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket",
	"busket",
	Array(
		"ACTION_VARIABLE" => "basketAction",
		"ADDITIONAL_PICT_PROP_2" => "IMG",
		"AUTO_CALCULATION" => "Y",
		"BASKET_IMAGES_SCALING" => "standard",
		"COLUMNS_LIST_EXT" => array(0=>"PREVIEW_PICTURE",1=>"DELETE",2=>"SUM",3=>"PROPERTY_STONE",),
		"COLUMNS_LIST_MOBILE" => array(0=>"PREVIEW_PICTURE",1=>"DELETE",2=>"SUM",3=>"PROPERTY_STONE",),
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "busket",
		"CORRECT_RATIO" => "N",
		"DEFERRED_REFRESH" => "N",
		"DISCOUNT_PERCENT_POSITION" => "bottom-right",
		"DISPLAY_MODE" => "extended",
		"EMPTY_BASKET_HINT_PATH" => "/katalog/",
		"GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_CONVERT_CURRENCY" => "N",
		"GIFTS_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_HIDE_NOT_AVAILABLE" => "N",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MESS_BTN_DETAIL" => "Подробнее",
		"GIFTS_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_PLACE" => "BOTTOM",
		"GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
		"GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "N",
		"GIFTS_TEXT_LABEL_GIFT" => "Подарок",
		"HIDE_COUPON" => "Y",
		"LABEL_PROP" => array(),
		"PATH_TO_ORDER" => "/order/",
		"PRICE_DISPLAY_MODE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
		"QUANTITY_FLOAT" => "N",
		"SET_TITLE" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FILTER" => "N",
		"SHOW_RESTORE" => "N",
		"TEMPLATE_THEME" => "",
		"TOTAL_BLOCK_DISPLAY" => array(0=>"top",),
		"USE_DYNAMIC_SCROLL" => "N",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_GIFTS" => "N",
		"USE_PREPAYMENT" => "N",
		"USE_PRICE_ANIMATION" => "N"
	)
);


