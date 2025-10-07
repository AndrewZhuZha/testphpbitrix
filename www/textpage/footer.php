
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<?if(ERROR_404 == 'Y'):?>
		</div>
		</div>
<?else:?>
			</div>
		</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/include/distribution.php"
	),
	false
);?>
<?endif;?>
<footer>
	<div class='container'>
		<div class="footer-body">
			<div class="footer-column">
				<?if(!$bIsMainPage):?>
		    	    <a href="/" class="footer__logo"><img src="/local/templates/.default/img/logo_w.png" alt="" /></a>
                <?else:?>
            	    <span class="footer__logo"><img src="/local/templates/.default/img/logo_w.png" alt="" /></span>
                <?endif;?>
			</div>
			<div class="footer-column">
				<div class="footer-content">
					<div class="footer-content-column">
						<ul class="footer-menu">
                            <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu5", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "bottom",
		"COMPONENT_TEMPLATE" => "menu5",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_THEME" => "blue",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "Y"
	),
	false
); ?>
						</ul>
					</div>
					<div class="footer-content-column">
						<ul class="footer-menu">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "menu5",
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "top",
                                    "COMPONENT_TEMPLATE" => "menu5",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "N",
                                    "MENU_THEME" => "blue",
                                    "ROOT_MENU_TYPE" => "top",
                                    "USE_EXT" => "Y"
                                ),
                                false
                            ); ?>
						</ul>
					</div>
					<div class="footer-content-column">
						<div class="footer-social">
                            <a href="
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/vk.php"
                                ),
                                false
                            );?>
                                " class="footer-social__link fa fa-vk"></a>
                            <a href="
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/facebook.php"
                                ),
                                false
                            );?>
                                " class="footer-social__link fa fa-facebook"></a>
                            <a href="
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/instagram.php"
                                ),
                                false
                            );?>
                                " class="footer-social__link fa fa-instagram"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-column">
				<div class="footer-dev">
					<div class="footer-dev__label">Разработка сайта:</div>
					<a href="https://phpdev.org/" class="footer-dev__item"><img src="/local/templates/.default/img/icons/dev.svg" alt="" /></a>
				</div>
			</div>
		</div>
	</div>
</footer>
	</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"form_header",
	Array(
		"COMPONENT_TEMPLATE" => "form_header",
		"EMAIL_TO" => "daniil.n@phpdev.org",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",),
		"USE_CAPTCHA" => "Y"
	)
);?>
<div class="popup popup-othersize">
	<div class="popup-table table">
		<div class="cell">
			<div class="popup-content">
				<div class="popup-close"></div>
				<div class="form__title title">Укажите ваш размер</div>
				<form data-m="m_2" action="#" class="form-body hm">
					<div class="form-body-row">
						<div class="form-body-column">
							<input type="text" name="form[]" data-value="Ваш размер" class="input req" />
							<div class="form-body__text">Украшения на заказ доставляются примерно через 3 недели после получения оплаты. Подробную информацию можно получить у менеджера после оформления заказа.</div>
						</div>
						<div class="form-body-column">
							<textarea name="form[]" data-value="Комментарий" class="input"></textarea>
						</div>
					</div>
					<div class="form-body-button">
						<button type="submit" class="form__btn btn-3">Добавить в корзину</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="popup popup-incart m_2">
	<div class="popup-table table">
		<div class="cell">
			<div class="popup-content">
				<div class="popup-close"></div>
				<div class="form__title title">Товар добавлен в корзину</div>
				<div class="popup-incart-body">
					<div class="popup-incart__image"><img src="/local/templates/.default/img/catalog/01.png" alt="" /></div>
					<div class="popup-incart__name">Название украшения</div>
					<div class="popup-incart__size">Размер: 16</div>
					<div class="popup-incart-buttons">
						<a href="" class="popup-incart-buttons__btn btn-5 popup__close">Продолжить покупки</a>
						<a href="" class="popup-incart-buttons__btn btn-3">Оформить заказ</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="popup popup-message m_1">
	<div class="popup-table table">
		<div class="cell">
			<div class="popup-content">
				<div class="popup-close"></div>
				<div id="title-msg" class="popup-message__title title">Спасибо! <br />Мы перезвоним вам <br /> в ближайшее время</div>
				<a href="" class="popup__close btn-3">Ок</a>
			</div>
		</div>
	</div>
</div>
<div class="popup popup-video">
	<div class="popup-table table">
		<div class="cell">
			<div class="popup-close"></div>
			<div class="popup-video__value"></div>
		</div>
	</div>
</div>

    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;key=AIzaSyAnTDLrncoU26a3S_WQOZQ0G3evEWWR29E"></script>
	<script src="https://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script src="/local/templates/.default/js/jquery.inputmask.bundle.min.js"></script>
	<script src="/local/templates/.default/js/jquery.nicescroll.min.js"></script>
	<script src="/local/templates/.default/js/jquery.popover.min.js"></script>
	<script src="/local/templates/.default/js/jquery.ui.touch-punch.min.js"></script>
	<script src="/local/templates/.default/js/cloudzoom/cloud-zoom.js"></script>
	<script src="/local/templates/.default/js/slick.min.js"></script>
	<script src="/local/templates/.default/js/forms.js"></script>
	<script src="/local/templates/.default/js/script.js"></script>
</body>
</html>

