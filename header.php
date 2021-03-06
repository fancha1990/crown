<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo bloginfo('charset');?>" />
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
	<title><?php echo wp_get_document_title(); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/icomoon.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/jquery.formstyler.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/jquery.formstyler.theme.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style.css" /><!--css/style.css-->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
        
	<?php wp_head(); ?>		
        <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo bloginfo('template_url'); ?>/img/1534llo.ico">
        <script src="<?php echo bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="<?php echo bloginfo('template_url');?>/js/preloader.js" type="text/javascript"></script>
</head>
<body>
    
    <!--preloader-->
    <div class="preloader"></div>
    <!--preloader_end-->
<div class="main-wrapper container-fluid">

	<header class="header row">
		<div class="logo">
                    <a href="<?php echo home_url(); ?>"><h1 id="log_art">crown</h1></a>
		</div>
            
                <?php
                wp_nav_menu( array(
                                'theme_location'  => 'main-menu',
                                'menu'            => '',
                                'container'       => 'ul',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => '', //main-menu
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                        ) );
                ?>

		<ul class="main-menu">
			<li class="main-menu__item dropdown">
				<a href="#" class="main-menu__link">Men <span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Bags</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Caps & Hats</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Gifts</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Grooming</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Hoodies & Sweatshirts</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Jackets & Coats</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Jeans</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Jewellery</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Joggers</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Jumpers & Cardigans</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Leather Jackets</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Long Sleeve T-Shirts</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Loungewear</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Polo Shirts</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Sunglasses</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Swimwear</a>
						</li>
					</ul>

				</div>
			</li>
			<li class="main-menu__item dropdown">
				<a href="#" class="main-menu__link">Women <span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Shirts</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Shoes, Boots & Trainers</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Shorts</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Suits & Blazers</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Sunglasses</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Swimwear</a>
						</li>
					</ul>


				</div>
			</li>
			<li class="main-menu__item dropdown">
				<a href="#" class="main-menu__link">Kids <span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">New Arrivals</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Dresses</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Tops</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Sweaters & Knits</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Jackets & Coats</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Rompers & Jumpsuits</a>
						</li>
					</ul>

				</div>
			</li>
			<li class="main-menu__item dropdown">
				<a href="#" class="main-menu__link">Accessories <span class="icon-caret"></span></a>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Hair Accessories</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Sunglasses & Readers</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Socks & Tights</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Hats</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Scarves & Gloves</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Jackets & Coats</a>
						</li>
						<li class="dropdown-menu__item">
							<a href="#" class="dropdown-menu__link">Rompers & Jumpsuits</a>
						</li>
					</ul>

				</div>
			</li>
			<li class="main-menu__item">
				<a href="#" class="main-menu__link">Sale</a>
			</li>
			<li class="main-menu__item">
				<a href="#" class="main-menu__link">LookBook</a>
			</li>
			<li class="main-menu__item">
				<a href="#" class="main-menu__link">Blog</a>
			</li>
		</ul>

		<div class="search">
			<form action="#">
				<input type="text" class="form-control search__input" placeholder="Search" />
				<input type="submit" value="&#xe90b;" class="search__button"/>
			</form>
		</div>

		<div class="location">
			<span class="icon-pin"></span>
			<a href="#" class="location__link">Uzbekistan / $</a>
		</div>
		
		<ul class="profile-menu">
			<li class="profile-menu__item dropdown dropdown--right dropdown--white">
				<a href="#" class="profile-menu__link">
					<span class="basket">
						<span class="icon-bag"></span>
						<span class="badge"><?php echo WC()->cart->get_cart_contents_count()?></span>
					</span>
					<span class="b-price">$165</span>
				</a>
				<div class="dropdown-content">
					<div class="cart">
						<ul class="cart-list">
							<li class="cart-list__item">
								<div class="cart-list__img">
									<a href="#"><img src="<?php echo bloginfo('template_url'); ?>/img/cart-list-img.png" alt=""></a>
								</div>
								<div class="cart-list__info">
									<h6 class="product__title"><a href="#">New Balance Men's Street Backpack</a></h6>
									<div class="cart-list__details">
										<span class="price">$485</span>
										<span class="product__details">
											<span>S</span> • 
											<span>Black</span> • 
											<span>1 pcs</span>  
										</span>
									</div>
								</div>
								<div class="cart-list__delete">
									<a href="#" class="js-remove-cart">
										<span class="icon-close"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</li>
							<li class="cart-list__item">
								<div class="cart-list__img">
									<a href="#"><img src="<?php echo bloginfo('template_url'); ?>/img/cart-list-img1.png" alt=""></a>
								</div>
								<div class="cart-list__info">
									<h6 class="product__title"><a href="#">Lyle & Scott Men's Short Sleeve Camo Pocket</a></h6>
									<div class="cart-list__details">
										<span class="price price--danger">$85</span>
										<span class="product__details">  
											<span>XXL</span> • 
											<span>White</span> • 
											<span>3 pcs</span>  
										</span>
									</div>
								</div>
								<div class="cart-list__delete">
									<a href="#" class="js-remove-cart">
										<span class="icon-close"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</li>
							<li class="cart-list__item">
								<div class="cart-list__img">
									<a href="#"><img src="<?php echo bloginfo('template_url'); ?>/img/cart-list-img2.png" alt=""></a>
								</div>
								<div class="cart-list__info">
									<h6 class="product__title"><a href="#">Lyle & Scott Men's Short Sleeve Camo Pocket</a></h6>
									<div class="cart-list__details">
										<span class="price">$1 285</span>
										<span class="product__details">
											<span>M</span> • 
											<span>Orange</span> • 
											<span>89 pcs</span>  
										</span>
									</div>
								</div>
								<div class="cart-list__delete">
									<a href="#" class="js-remove-cart">
										<span class="icon-close"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</li>
						</ul>
						<div class="cart-footer">
							<span class="total">Total</span>
							<span class="price">$3 285</span>
							<a href="#" class="btn">Check Out</a>
						</div>
					</div>
				</div>
			</li>
			<li class="profile-menu__item dropdown dropdown--right dropdown--white">
				<a href="#" class="profile-menu__link"><span class="icon-user"></span></a>
				<div class="dropdown-content">
					<ul class="user-menu">
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-user"></span>Profile</a>
						</li>
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-heart"></span>Wishlist <span class="badge">2</span></a>
						</li>
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-basket"></span>Orders</a>
						</li>
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-gear"></span>Settings</a>
						</li>
						<li class="user-menu__item">
							<a href="#" class="user-menu__link"><span class="icon-power"></span>Log out</a>
						</li>
					</ul>
					
				</div>
			</li>
		</ul>
	</header>