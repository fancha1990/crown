<?php get_header();?>

	<main class="main">
		<section class="header-inner" style="background-image: url('<?php echo bloginfo('template_url'); ?>/img/header-inner.png');">
			
			<ul class="bread-crambs">
				<li class="bread-crambs__item">
					<a href="#" class="bread-crambs__link">Home</a> /
				</li>
				<li class="bread-crambs__item">
					<a href="#" class="bread-crambs__link">Men</a> /
				</li>
			</ul>

			<span class="category">men</span>
			<h1 class="header-inner__title">Polo Shirts</h1>
		</section>
		<div class="tab-wrap">
			<div class="filter">
				<div class="filter-sidebar">
					<button class="toggle-filter">
						<span class="icon-sliders"></span>
						<span class="sr-only">Filters</span>
					</button>
					<span class="filter__title">34 items found</span>
				</div>
				<div class="filter-content">
					<span class="filter__title">Sort by</span>
					<div class="sort">
						<input type="radio" id="sort1" name="sort">
						<label for="sort1" class="sort__item">Price <span class="icon-arrow-up-down"><span class="path1"></span></span></label>
						<input type="radio" id="sort2" name="sort" checked="">
						<label for="sort2" class="sort__item">Name <span class="icon-arrow-up-down"><span class="path1"></span></span></label>
						<input type="radio" id="sort3" name="sort">
						<label for="sort3" class="sort__item">Date <span class="icon-arrow-up-down"><span class="path1"></span></span></label>
					</div>

					<ul class="filter-list tabs">
						<li class="filter-list__item">
							<a href="#tab_1" class="filter-list__link"><span class="icon-list-2"></span></a>
						</li>
						<li class="filter-list__item active">
							<a href="#tab_2" class="filter-list__link"><span class="icon-list"></span></a>
						</li>
					</ul>

				</div>
			</div>
			
			<div class="box-main">
				<aside class="sidebar">
					<div class="accordion">
						<div class="accordion__head open">
							<h5 class="accordion__title">Category</h5>
							<span class="icon-minus"></span>
						</div>
						<div class="accordion__body">
							<ul class="check-list">
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Bags</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Belts</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Hats, Scarves & Gloves</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Sunglasses</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Watches</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Wallets</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Boat Shoes</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Boots</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Deserts & Chukkas</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Espadrilles & Sandals</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Flip Flops</label>
								</li>
							</ul>

						</div>
						<div class="accordion__head">
							<h5 class="accordion__title">Brand</h5>
							<span class="icon-minus"></span>
						</div>
						<div class="accordion__body" style="display: none;">
							<ul class="check-list">
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Bags</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">Belts</label>
								</li>

							</ul>
						</div>
						<div class="accordion__head">
							<h5 class="accordion__title">Size</h5>
							<span class="icon-minus"></span>
						</div>
						<div class="accordion__body" style="display: none;">
							<ul class="check-list check-list--column">
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">S</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">XL</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">M</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">XXL</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">L</label>
								</li>
								<li class="check-list__item">
									<input type="checkbox" class="styler" id="check-list1">
									<label for="check-list1" class="check-list__text">XXXL</label>
								</li>

							</ul>
						</div>
						<div class="accordion__head">
							<h5 class="accordion__title">Price</h5>
							<span class="icon-minus"></span>
						</div>
						<div class="accordion__body" style="display: none;">

							<div id="slider-range"></div>
							<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
							<input type="text" id="amount1" readonly style="border:0; color:#f6931f; font-weight:bold;">

						</div>
						<div class="accordion__head">
							<h5 class="accordion__title">Brand</h5>
							<span class="icon-minus"></span>
						</div>
						<div class="accordion__body" style="display: none;">22</div>
						<div class="accordion__head">
							<h5 class="accordion__title">Brand</h5>
							<span class="icon-minus"></span>
						</div>
						<div class="accordion__body" style="display: none;">22</div>
					</div>
				</aside>
				<div class="content">
					<div class="box-tab-cont">
						<div class="tab-cont hide" id="tab_1">.11111..</div>
						<div class="tab-cont " id="tab_2">.22222..</div>
					</div>
				</div>
			</div>
			
		</div>
	</main>		
	
	<footer>
		
	</footer>
	
</div>

<script src="<?php echo bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/jquery.formstyler.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/custom.js"></script>

</body>
</html>
