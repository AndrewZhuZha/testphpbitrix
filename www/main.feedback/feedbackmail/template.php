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
<form data-m="m_1" action="<?=POST_FORM_ACTION_URI?>" method="POST"  class="form-body hm">
    <?=bitrix_sessid_post()?>
    <div class="form-body-row">
        <div class="form-body-column">
                <input type="text" id="user_name_1" name="user_name" data-value="Ваше имя" class="input" />
        </div>
        <div class="form-body-column">
                <input type="text" id="user_email_1" name="user_email" data-value="Ваш email" class="input email req" />
        </div>
    </div>
    <div class="form-body-check">
        <div class="check">Я принимаю <a href="/dostavka-i-oplata/">условия конфиденциальности</a> <input type="checkbox" value="1" class="req" name="form[]" /></div>
    </div>
        <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
    <div class="form-body-button">
        <button type="submit" class="form__btn btn-3" value="Подписаться" >Подписаться</button>
    </div>
</form>

