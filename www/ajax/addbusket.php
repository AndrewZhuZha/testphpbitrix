<?
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
use Bitrix\Sale;
use Bitrix\Main\Loader;

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');
Loader::includeModule('catalog');
Loader::includeModule('sale');
if (isset($_POST["data_id"])) {
    $el_id = $_POST["data_id"];
    $el_props =  CIBlockElement::GetById($el_id);
    
    while($ar_props = $el_props->Fetch()){
      $db_propsn[]=$ar_props;
    } 
    $NAME = $db_propsn[0]['NAME'];
    $PREVIEW_PICTURE = CFile::GetPath(($db_propsn[0]['PREVIEW_PICTURE']));
    
    // print_r($el_id); 
    // print_r($NAME);
    // print_r($PREVIEW_PICTURE); 

    /** int $productId ID товара */
    /** int $quantity количество */
    $productId = $el_id;
    $productId_inBusket = '';
    $array_item_busket = [];
    $quantity = 1;
    $basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());

    foreach ($basket as $basketItem) {
        $productId_inBusket = $basketItem->getField('PRODUCT_ID');
        $array_item_busket[] = $productId_inBusket;
    }
    if(!in_array($productId,$array_item_busket)){
        if ($item = $basket->getExistsItem('catalog', $productId)) {
            $item->setField('QUANTITY', $item->getQuantity() + $quantity);
        }
        else {
            $item = $basket->createItem('catalog', $productId);
            $item->setFields(array(
                'QUANTITY' => $quantity,
                'CURRENCY' => Bitrix\Currency\CurrencyManager::getBaseCurrency(),
                'LID' => Bitrix\Main\Context::getCurrent()->getSite(),
                'PRODUCT_PROVIDER_CLASS' => 'CCatalogProductProvider',
            ));

        }
        $basket->save();
        $elProps = [
            'TITLE' => 'Товар добавлен в корзину',
            'NAME' => $NAME,
            'PICTURE' => $PREVIEW_PICTURE,
        ];
        echo json_encode($elProps);
    }else{
        $error = [
            'TITLE' => 'Товар уже в корзине',
        ];
        echo json_encode($error);
    }
}

