<?php
/*
Template name: Cart
*/
?>
<!DOCTYPE html>
<!-- Last Published: Tue Aug 31 2021 19:12:12 GMT+0000 (Coordinated Universal Time) --><html data-wf-page="6112fb585f27c1cf478c4247" data-wf-site="5f74e9f80a64361bde152628">
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
				<div class="cart-box">
					<div class="cart-row">
						<div class="cart-col-1"></div>
						<div class="cart-col-2">
							<div class="cart-title">Наименование</div>
						</div>
						<div class="cart-col-3">
							<div class="cart-title">Цена</div>
						</div>
						<div class="cart-col-4">
							<div class="cart-title">Кол-во</div>
						</div>
						<div class="cart-col-5">
							<div class="cart-title">Итого</div>
						</div>
						<div class="cart-col-6"></div>
					</div>
				</div>
				<div class="cart-items">
					<div class="cart-row">
						<div class="cart-col-1">
							<div class="cart-image"></div>
						</div>
						<div class="cart-col-2">
							<div class="cart-product-title">Футболка мужская</div>
							<div class="cart-attr"><span class="cart-attr-title">Размер:</span> <span class="cart-attr-value">L</span></div>
							<div class="cart-attr"><span class="cart-attr-title">ЦВет:</span> <span class="cart-color"> </span><span class="cart-attr-value">Красный</span></div>
						</div>
						<div class="cart-col-3">
							<div class="cart-price">1500 р.</div>
						</div>
						<div class="cart-col-4">
							<div class="w-form">
								<form id="email-form" name="email-form" data-name="Email Form">
									<div class="add-count on-cart">
										<div class="change-count">-</div>
<input type="text" class="count-input w-input" maxlength="256" name="Field" data-name="Field" id="Field" required>
										<div class="change-count">+</div>
									</div>
								</form>
								<div class="w-form-done">
									<div>Thank you! Your submission has been received!</div>
								</div>
								<div class="w-form-fail">
									<div>Oops! Something went wrong while submitting the form.</div>
								</div>
							</div>
						</div>
						<div class="cart-col-5">
							<div class="cart-price">1500 р.</div>
						</div>
						<div class="cart-col-6"><a href="#" class="cart-del w-inline-block"></a></div>
					</div>
					<div class="cart-row">
						<div class="cart-col-1">
							<div class="cart-image"></div>
						</div>
						<div class="cart-col-2">
							<div class="cart-product-title">Футболка мужская</div>
							<div class="cart-attr"><span class="cart-attr-title">Размер:</span> <span class="cart-attr-value">L</span></div>
							<div class="cart-attr"><span class="cart-attr-title">ЦВет:</span> <span class="cart-color"> </span><span class="cart-attr-value">Красный</span></div>
						</div>
						<div class="cart-col-3">
							<div class="cart-price">1500 р.</div>
						</div>
						<div class="cart-col-4">
							<div class="w-form">
								<form id="email-form" name="email-form" data-name="Email Form">
									<div class="add-count on-cart">
										<div class="change-count">-</div>
<input type="text" class="count-input w-input" maxlength="256" name="Field-2" data-name="Field 2" id="Field-2" required>
										<div class="change-count">+</div>
									</div>
								</form>
								<div class="w-form-done">
									<div>Thank you! Your submission has been received!</div>
								</div>
								<div class="w-form-fail">
									<div>Oops! Something went wrong while submitting the form.</div>
								</div>
							</div>
						</div>
						<div class="cart-col-5">
							<div class="cart-price">1500 р.</div>
						</div>
						<div class="cart-col-6"><a href="#" class="cart-del w-inline-block"></a></div>
					</div>
				</div>
				<div class="cart-order-row">
					<div class="w-row">
						<div class="w-col w-col-4">
							<div class="w-form">
								<form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="coupon-form">
<input type="text" class="coupon-input w-input" maxlength="256" name="name" data-name="Name" placeholder="Купон на скидку" id="name">
<input type="submit" value="Применить" data-wait="Please wait..." class="add-btn on-coupon w-button"></form>
								<div class="w-form-done">
									<div>Thank you! Your submission has been received!</div>
								</div>
								<div class="w-form-fail">
									<div>Oops! Something went wrong while submitting the form.</div>
								</div>
							</div>
						</div>
						<div class="cart-order-col w-col w-col-4"><a href="#" class="add-btn w-button">Оформить заказ</a></div>
						<div class="cart-total-col w-col w-col-4">
							<div class="cart-total">Итого: <span class="cart-total-price">3000 р.</span></div>
						</div>
					</div>
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