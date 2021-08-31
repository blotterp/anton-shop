<?php
/*
Template name: Page
*/
?>
<!DOCTYPE html>
<!-- Last Published: Tue Aug 31 2021 19:12:12 GMT+0000 (Coordinated Universal Time) --><html data-wf-page="612385ca75cce2f787795506" data-wf-site="5f74e9f80a64361bde152628">
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
				<h1 class="page-title center">Заголовок страницы</h1>
				<div class="post-text">This is some text inside of a div block.</div>
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