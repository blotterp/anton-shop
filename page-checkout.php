<?php
/*
Template name: Checkout
*/
?>
<!DOCTYPE html>
<!-- Last Published: Tue Aug 31 2021 19:12:12 GMT+0000 (Coordinated Universal Time) --><html data-wf-page="6123a97329d06c35e1188dcf" data-wf-site="5f74e9f80a64361bde152628">
	<?php get_template_part("header_block", ""); ?>
	<body class="body">
		<script id="query_vars">
var query_vars = '<?php global $wp_query; echo serialize($wp_query->query) ?>';
		</script>
		<div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
			<div class="navbar-container w-container">
				<div class="nav-content"><a href="#" class="w-nav-brand"><img src="<?php echo get_template_directory_uri() ?>/images/5f74eb2c15bdf55af54fc713_Logo.svg" loading="lazy" alt class="image"></a>
					<nav role="navigation" class="w-nav-menu"><a href="/" class="nav-link w-nav-link">Главная</a>
						<div data-hover="false" data-delay="0" class="nav-link navdropdown w-dropdown">
							<div class="nav-link w-dropdown-toggle">
								<div class="icon-navdrop w-icon-dropdown-toggle"></div>
								<div>Магазин</div>
							</div>
							<nav class="w-dropdown-list"><a href="#" class="w-dropdown-link">Link 1</a><a href="#" class="w-dropdown-link">Link 2</a><a href="#" class="w-dropdown-link">Link 3</a></nav>
						</div><a href="#" class="nav-link w-nav-link">О нас</a><a href="#" class="nav-link w-nav-link">Блог</a><a href="#" class="nav-link w-nav-link">Контакты</a></nav>
					<div class="nav-system">
						<div class="system-item icon-search"></div>
						<div class="system-item icon-user"></div>
						<div class="system-item icon-cart">
							<div class="count-product">1</div>
						</div>
					</div>
				</div>
				<div class="menu-button w-nav-button">
					<div class="icon w-icon-nav-menu"></div>
				</div>
			</div>
		</div>
		<div class="breadcrumbs wf-section">
			<div class="bc-text"><a href="#" class="bc-link">Главная</a> <span class="bc-sep">/</span> Страница</div>
		</div>
		<div class="page-section wf-section">
			<div class="container">
				<div class="checkout-box">
					<div class="w-form">
						<form id="email-form-3" name="email-form-3" data-name="Email Form 3" class="form">
							<h3 class="h3 on-checkout">Контактная информация</h3>
<label for="name" class="checkout-label">Имя*</label>
<input type="text" class="w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder id="name-2">
<label for="email" class="checkout-label">Email*</label>
<input type="email" class="w-input" maxlength="256" name="email" data-name="Email" placeholder id="email" required>
<label for="email-2" class="checkout-label">Телефон*</label>
<input type="email" class="w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder id="email-2" required>
							<h3 class="h3 on-checkout">Способ доставки</h3>
							<div class="delivery-box">
<label class="w-radio">
<input type="radio" data-name="Radio" id="radio" name="Radio" value="Radio" class="w-form-formradioinput w-radio-input"><span class="w-form-label">Самовывоз</span></label>
<label class="w-radio">
<input type="radio" data-name="Radio 2" id="radio-2" name="Radio" value="Radio" class="w-form-formradioinput w-radio-input"><span class="w-form-label">Доставка транспортной компанией</span></label></div>
<label for="email-3" class="checkout-label">Адрес доставки*</label>
<input type="email" class="w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder id="email-2" required>
							<h3 class="h3 on-checkout">СпособЫ Оплаты</h3>
							<div class="payment-box">
<label class="payment-radio w-radio">
<input type="radio" data-name="Radio 3" id="radio-3" name="radio-3" value="Radio 3" class="w-form-formradioinput w-radio-input"><span class="payment-label w-form-label"><span class="payment-title">Оплата картой</span><br><span class="payment-desc">Оплата пластиковой картой на сайте</span></span></label>
<label class="payment-radio w-radio">
<input type="radio" data-name="Radio 3" id="radio-3" name="radio-3" value="Radio 3" class="w-form-formradioinput w-radio-input"><span class="payment-label w-form-label"><span class="payment-title">Оплата наличными</span><br><span class="payment-desc">Оплата наличными курьеру</span></span></label></div>
							<h3 class="h3 on-checkout">Комментарий к заказу</h3>
<textarea name="field" maxlength="5000" id="field" class="textarea-2 w-input"></textarea>
<input type="submit" value="Оформить заказ" data-wait="Please wait..." class="add-btn w-button"></form>
						<div class="w-form-done">
							<div>Thank you! Your submission has been received!</div>
						</div>
						<div class="w-form-fail">
							<div>Oops! Something went wrong while submitting the form.</div>
						</div>
					</div>
					<div class="text-block-3">Ваш заказ № <strong>123</strong> успешно оформлен.</div>
				</div>
			</div>
		</div>
		<div class="footer wf-section">
			<div class="container">
				<div class="w-row">
					<div class="w-col w-col-4">
						<div class="footer-left-box"><img src="<?php echo get_template_directory_uri() ?>/images/5f74eb2d7d0468d9b8d26f6a_Logo_white-1.svg" loading="lazy" alt class="footer-logo">
							<div class="logo-text">Интернет-магазин Антон создан в 2020 году. Мы продаем только качественную мужскую и женскую одежду<br>‍</div>
						</div>
					</div>
					<div class="w-col w-col-2">
						<h3 class="footer-h3">Наш сервис</h3>
						<div class="footer-menu"><a href="#" class="footer-link">Помощь</a><a href="#" class="footer-link">Контакты</a><a href="#" class="footer-link">Магазин</a><a href="#" class="footer-link">Личный кабинет</a></div>
					</div>
					<div class="w-col w-col-2">
						<h3 class="footer-h3">Информация</h3>
						<div class="footer-menu"><a href="#" class="footer-link">О нас</a><a href="#" class="footer-link">Оплата</a><a href="#" class="footer-link">Доставка</a><a href="#" class="footer-link">Возврат товара</a></div>
					</div>
					<div class="w-col w-col-4">
						<h3 class="footer-h3">Контакты</h3>
						<div class="footer-menu"><a href="#" class="contact-footer">г. Москва, Московская, д. 1, офис 5</a><a href="#" class="contact-footer phone">+7 900 123-46-79</a><a href="#" class="contact-footer email">email@youremail.com</a><a href="#" class="contact-footer time">8:00-21:00, Пн-Сб, без перерывов</a></div>
					</div>
				</div>
			</div>
		</div>
		<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
		<?php get_template_part("footer_block", ""); ?>