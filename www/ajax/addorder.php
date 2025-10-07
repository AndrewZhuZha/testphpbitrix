<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$arUserProp = array(
    "NAME"                 => $_POST["name"],
    "PHONE"                => $_POST["phone"],
    "EMAIL"                => $_POST["email"],
    "DESCRIPTION"          => $_POST["description"],
);

use Bitrix\Main\Context,
    Bitrix\Currency\CurrencyManager,
    Bitrix\Sale\Order,
    Bitrix\Sale\Basket,
    Bitrix\Sale\Delivery,
    Bitrix\Sale\PaySystem,
    Bitrix\Sale;

global $USER;

Bitrix\Main\Loader::includeModule("sale");
Bitrix\Main\Loader::includeModule("catalog");

// пришёл заказ
$request = Context::getCurrent()->getRequest();
$email = $_POST["email"];
$phone = $_POST["phone"];
$name = $_POST["name"];
$comment =$_POST["description"];

$siteId = Context::getCurrent()->getSite();
$currencyCode = CurrencyManager::getBaseCurrency();

// Создаёт новый заказ
$order = Order::create($siteId, $USER->isAuthorized() ? $USER->GetID() : 539);
$order->setPersonTypeId(1);

//$order->setField('CURRENCY', $currencyCode);
if ($comment) {
    $order->setField('USER_DESCRIPTION', $comment); // Устанавливаем поля комментария покупателя
}

// Создаём корзину с одним товаром
$basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());
$fullPrice = $basket->getBasePrice();
$order->setBasket($basket);

// Создаём одну отгрузку и устанавливаем способ доставки - "Без доставки" (он служебный)
if ($fullPrice >= 20000){
    $shipmentCollection = $order->getShipmentCollection();
    $shipment = $shipmentCollection->createItem();
    $service = Delivery\Services\Manager::getById(Delivery\Services\EmptyDeliveryService::getEmptyDeliveryServiceId());
    $shipment->setFields(array(
        'DELIVERY_ID' => $service['ID'],
        'DELIVERY_NAME' => $service['NAME'],

    ));
    $shipmentItemCollection = $shipment->getShipmentItemCollection();
}else{
    $shipmentCollection = $order->getShipmentCollection();
    $shipment = $shipmentCollection->createItem();
    $service = Delivery\Services\Manager::getById(1);
    $shipment->setFields(array(
        'DELIVERY_ID' => $service['ID'],
        'DELIVERY_NAME' => $service['NAME'],
        'ALLOW_DELIVERY' => 'Y',
        'PRICE_DELIVERY' => 300,
        'CUSTOM_PRICE_DELIVERY' => 'Y'

    ));
    $shipmentItemCollection = $shipment->getShipmentItemCollection();
}

//// Создаём оплату со способом #1
//$paymentCollection = $order->getPaymentCollection();
//$payment = $paymentCollection->createItem();
//$paySystemService = PaySystem\Manager::getObjectById(1);
//$payment->setFields(array(
//    'PAY_SYSTEM_ID' => $paySystemService->getField("PAY_SYSTEM_ID"),
//    'PAY_SYSTEM_NAME' => $paySystemService->getField("NAME"),
//));

$paymentCollection = $order->getPaymentCollection();
$payment = $paymentCollection->createItem();
$paySystemService = PaySystem\Manager::getObjectById(1); //обычно 1 - это оплата наличными
$payment->setFields(array(
    'PAY_SYSTEM_ID' => $paySystemService->getField("PAY_SYSTEM_ID"),
    'PAY_SYSTEM_NAME' => $paySystemService->getField("NAME"),
));

// Устанавливаем свойства
$propertyCollection = $order->getPropertyCollection();
$phoneProp = $propertyCollection->getPhone();
$phoneProp->setValue($phone);
$nameProp = $propertyCollection->getPayerName();
$nameProp->setValue($name);


// Сохраняем
$order->doFinalAction(true);
$result = $order->save();
$orderId = $order->getId();
