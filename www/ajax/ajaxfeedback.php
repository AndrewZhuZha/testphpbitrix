<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');

    if (isset($_GET["name"]) && isset($_GET["phone"])) {
        $arEventFields = array(
            "NAME" => $_GET["name"],
            "PHONE" => $_GET["phone"],
            "EMAIL_TO" => 'andrei.z@phpdev.org',
        );
        CEvent::SendImmediate("test", 's1', $arEventFields);

        $el = new CIBLockElement;
        $arLoadProductArray = array(
            "MODIFIED_BY" => $USER->GetID(),
            "IBLOCK_SECTION_ID" => false,
            "IBLOCK_ID" => 7,
            "NAME" => $_GET["name"],
            "ACTIVE" => "Y",
            "CODE" => $_GET["phone"],
        );
        $el->Add($arLoadProductArray);
        echo json_encode('Спасибо! <br />Мы перезвоним вам <br /> в ближайшее время');
    }

?>