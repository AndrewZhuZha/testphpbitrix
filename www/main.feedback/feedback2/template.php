<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<!--<form data-m="m_1" action="<?//=POST_FORM_ACTION_URI?>" class="form-body hm" method="POST">
<?//=bitrix_sessid_post()?>
    <div class="form-body-row">
        <div class="form-body-column">
                <input type="text" id = "user_name" class="input" name="user_name" data-value="Ваше имя">
        </div>
        <div class="form-body-column">
                <input type="text" id = "user_phone" class="input req" name="user_phone" data-value="Ваш телефон">
        </div>
    </div>
	<input type="hidden" name="PARAMS_HASH" value="<?//=$arResult["PARAMS_HASH"]?>">
        <div class="form-body-button">
	        <input type="submit" name="submit" class="form__btn btn-3" value="<?//=GetMessage("MFT_SUBMIT")?>">
        </div>
</form>--!>


