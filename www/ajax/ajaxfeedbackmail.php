<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');
    if (isset($_GET["name_1"]) && isset($_GET["email"])) {

       $el = new CIBLockElement;
        $arLoadProductArray = array(
            "MODIFIED_BY" => $USER->GetID(),
            "IBLOCK_SECTION_ID" => false,
            "IBLOCK_ID" => 9,
            "NAME" => $_GET["name_1"],
            "ACTIVE" => "Y",
            "CODE" => $_GET["email"],
        );
        $el->Add($arLoadProductArray);
        echo json_encode('Спасибо, <br /> будем держать Вас в курсе!');
    }
?>