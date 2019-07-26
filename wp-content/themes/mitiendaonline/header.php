<?php

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- <link rel="pingback" href="<?php   ?>"> -->

<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/base.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/cssEcommerce.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/iconos.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/materialize.css">
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/woocommerce.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">
<style type='text/css'>

			.main-navigation ul li a,
			.site-title a,
			ul.menu li a,
			.site-branding h1 a,
			.site-footer .storefront-handheld-footer-bar a:not(.button),
			button.menu-toggle,
			button.menu-toggle:hover {
				color: #333333;
			}

			button.menu-toggle,
			button.menu-toggle:hover {
				border-color: #333333;
			}

			.main-navigation ul li a:hover,
			.main-navigation ul li:hover > a,
			.site-title a:hover,
			a.cart-contents:hover,
			.site-header-cart .widget_shopping_cart a:hover,
			.site-header-cart:hover > li > a,
			.site-header ul.menu li.current-menu-item > a {
				color: #747474;
			}

			table th {
				background-color: #f8f8f8;
			}

			table tbody td {
				background-color: #fdfdfd;
			}

			table tbody tr:nth-child(2n) td,
			fieldset,
			fieldset legend {
				background-color: #fbfbfb;
			}

			.site-header,
			.secondary-navigation ul ul,
			.main-navigation ul.menu > li.menu-item-has-children:after,
			.secondary-navigation ul.menu ul,
			.storefront-handheld-footer-bar,
			.storefront-handheld-footer-bar ul li > a,
			.storefront-handheld-footer-bar ul li.search .site-search,
			button.menu-toggle,
			button.menu-toggle:hover {
				background-color: #ffffff;
			}

			p.site-description,
			.site-header,
			.storefront-handheld-footer-bar {
				color: #404040;
			}

			.storefront-handheld-footer-bar ul li.cart .count,
			button.menu-toggle:after,
			button.menu-toggle:before,
			button.menu-toggle span:before {
				background-color: #333333;
			}

			.storefront-handheld-footer-bar ul li.cart .count {
				color: #ffffff;
			}

			.storefront-handheld-footer-bar ul li.cart .count {
				border-color: #ffffff;
			}

			h1, h2, h3, h4, h5, h6 {
				color: #333333;
			}

			.widget h1 {
				border-bottom-color: #333333;
			}

			body,
			.secondary-navigation a,
			.onsale,
			.pagination .page-numbers li .page-numbers:not(.current), .woocommerce-pagination .page-numbers li .page-numbers:not(.current) {
				color: #6d6d6d;
			}

			.widget-area .widget a,
			.hentry .entry-header .posted-on a,
			.hentry .entry-header .byline a {
				color: #727272;
			}

			a  {
				color: #96588a;
			}

			a:focus,
			.button:focus,
			.button.alt:focus,
			.button.added_to_cart:focus,
			.button.wc-forward:focus,
			button:focus,
			input[type="button"]:focus,
			input[type="reset"]:focus,
			input[type="submit"]:focus {
				outline-color: #96588a;
			}

			button, input[type="button"], input[type="reset"], input[type="submit"], .button, .added_to_cart, .widget a.button, .site-header-cart .widget_shopping_cart a.button {
				background-color: #eeeeee;
				border-color: #eeeeee;
				color: #333333;
			}

			button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .button:hover, .added_to_cart:hover, .widget a.button:hover, .site-header-cart .widget_shopping_cart a.button:hover {
				background-color: #d5d5d5;
				border-color: #d5d5d5;
				color: #333333;
			}

			button.alt, input[type="button"].alt, input[type="reset"].alt, input[type="submit"].alt, .button.alt, .added_to_cart.alt, .widget-area .widget a.button.alt, .added_to_cart, .widget a.button.checkout {
				background-color: #333333;
				border-color: #333333;
				color: #ffffff;
			}

			button.alt:hover, input[type="button"].alt:hover, input[type="reset"].alt:hover, input[type="submit"].alt:hover, .button.alt:hover, .added_to_cart.alt:hover, .widget-area .widget a.button.alt:hover, .added_to_cart:hover, .widget a.button.checkout:hover {
				background-color: #1a1a1a;
				border-color: #1a1a1a;
				color: #ffffff;
			}

			.pagination .page-numbers li .page-numbers.current, .woocommerce-pagination .page-numbers li .page-numbers.current {
				background-color: #e6e6e6;
				color: #636363;
			}

			#comments .comment-list .comment-content .comment-text {
				background-color: #f8f8f8;
			}

			.site-footer {
				background-color: #f0f0f0;
				color: #6d6d6d;
			}

			.site-footer a:not(.button) {
				color: #333333;
			}

			.site-footer h1, .site-footer h2, .site-footer h3, .site-footer h4, .site-footer h5, .site-footer h6 {
				color: #333333;
			}

			#order_review {
				background-color: #ffffff;
			}

			#payment .payment_methods > li .payment_box,
			#payment .place-order {
				background-color: #fafafa;
			}

			#payment .payment_methods > li:not(.woocommerce-notice) {
				background-color: #f5f5f5;
			}

			#payment .payment_methods > li:not(.woocommerce-notice):hover {
				background-color: #f0f0f0;
			}

			@media screen and ( min-width: 768px ) {
				.secondary-navigation ul.menu a:hover {
					color: #595959;
				}

				.secondary-navigation ul.menu a {
					color: #404040;
				}

				.site-header-cart .widget_shopping_cart,
				.main-navigation ul.menu ul.sub-menu,
				.main-navigation ul.nav-menu ul.children {
					background-color: #f0f0f0;
				}

				.site-header-cart .widget_shopping_cart .buttons,
				.site-header-cart .widget_shopping_cart .total {
					background-color: #f5f5f5;
				}

				.site-header {
					border-bottom-color: #f0f0f0;
				}
			}
</style>
</head>

<body class="home">
 

<div id="page" class="hfeed site"> 
	
	<header id="masthead" class=" " role="banner" style=" ">
		<div class="menu-top">
          <div class="container row">
            <div class="col s12 l6 m6">
              	<ul class="inline">
					<li><span class="fa fa-phone"> </span> 999-999-999 |</li>
					<li><span class="fa fa-envelope"> </span> ventas@corporacioncbr.com</li>
				</ul>
            </div>
            <div class="col s12 l6 m6">
              <ul class="inline right redes">
                <li>Siguenos en:</li>
                <li><a href="http://"><span class="fa fa-facebook"> </span></a></li>
                <li><a href="http://"><span class="fa fa-whatsapp"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <div class="nav-wrapper"><a href="#" class="brand-logo"> <img width="180px" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.jpeg" alt="" srcset=""></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <!-- <li><a href="home.html">INICIO</a></li>
                <li><a href="quienes-somos.html">QUIENES SOMOS</a></li>
                <li><a href="#!">CATEGORIA  </a></li>
                <li><a href="contacto.html">CONTACTO </a></li> -->
				<?php $items = wp_get_nav_menu_items('primary-menu'); ?>  
				<?php $cont = 0; ?>
				<?php foreach ($items as $key => $menu_item): ?>
					<?php $cssClass = $menu_item->classes[0] ?>  
					<li><a href="<?php echo $menu_item->url ?>" id="<?php echo $cssClass ?>" title="<?php echo $menu_item->title ?>"><?php echo $menu_item->title ?></a></li> 
				<?php endforeach; ?>
              </ul>
            </div>
          </div>
        </nav>
	</header>

	<div id="content" class="site-content" tabindex="-1">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">