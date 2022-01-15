{{--<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Divisima | eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="index.blade.php" class="site-logo">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Search on divisima ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#">Sign</a> In or <a href="#">Create Account</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>{{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity()}}</span>
								</div>
								<a href="#">Shopping Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="#">Home/Главная</a></li>
					<li><a href="#">Women/женщины</a></li>
					<li><a href="#">Men/мужчины</a></li>
					<li><a href="#">Jewelry/украшения
						<span class="new">New/знать</span>
					</a></li>
					<li><a href="#">Shoes</a>
						<ul class="sub-menu">
							<li><a href="#">Sneakers</a></li>
							<li><a href="#">Sandals</a></li>
							<li><a href="#">Formal Shoes</a></li>
							<li><a href="#">Boots</a></li>
							<li><a href="#">Flip Flops</a></li>
						</ul>
					</li>
					<li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="product.blade.php">Product Page</a></li>
							<li><a href="cagorywomen.blade.php">Category Page</a></li>
							<li><a href="cart.blade.php">Cart Page</a></li>
							<li><a href="checkout.blade.php">Checkout Page</a></li>
							<li><a href="contact.blade.php">Contact Page</a></li>
						</ul>
					</li>
					<li><a href="#">Blog</a></li>
				</ul>
			</div>
		</nav>
	</header>--}}
	<!-- Header section end -->

    @include('layouts.heder')

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Страница товара</h4>
			<div class="site-pagination">
				<a href="{{route('/index')}}">главная</a> /
				<a href="{{route('/products')}}">магазин</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
            @foreach($product as $item)
			<div class="back-link">
				<a href="{{route('/products')}}"> &lt;&lt; Каталог товаров</a>
			</div>
			<div class="row">

				<div class="col-lg-6 ">


                    <div class="wrapper ">
                        <div class="demo-content cf">

                            <div class="picture three cf" itemscope itemtype="http://schema.org/ImageGallery">

                                <div class="gallerswipe">

                                <div class="hea">
                                   <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                       <a href="storage/{!!$item -> img_1 !!}" itemprop="contentUrl" data-size="1600x2400">
                                        <img class="photos_b" src="storage/{!!$item -> img_1 !!}" height="390" width="260" itemprop="thumbnail" alt="Beach">
                                       </a>
                                   </figure>
                              </div>

                                <div class="men">
                                    @if ($item -> img_2)
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="storage/{!!$item -> img_2 !!}" itemprop="contentUrl"data-size="1600x2400">
                                        <img class="photos_b" src="storage/{!!$item -> img_2 !!}" height="390" width="260" itemprop="thumbnail" alt="">
                                    </a>
                                </figure>
                                    @endif
                                </div>

                                    <div class="con">
                                        @if ($item -> img_3)
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="storage/{!!$item -> img_3 !!}" itemprop="contentUrl" data-size="1600x2400">
                                        <img class="photos_b" src="storage/{!!$item -> img_3 !!}" height="390"  width="260"  itemprop="thumbnail" alt="">
                                    </a>
                                </figure>
                                        @endif
                                    </div>

                                    <div class="foo">
                                        @if ($item -> img_4)
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="storage/{!!$item -> img_4 !!}" itemprop="contentUrl" data-size="1600x2400">
                                        <img class="photos_b" src="storage/{!!$item -> img_4 !!}" height="390"  width="260"  itemprop="thumbnail" alt="">
                                    </a>
                                </figure>
                                        @endif
                                    </div>

                                    <div class="goo">
                                        @if ($item -> img_5)
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="storage/{!!$item -> img_5 !!}" itemprop="contentUrl" data-size="1600x2400">
                                        <img class="photos_b" src="storage/{!!$item -> img_5 !!}" height="390"  width="260"  itemprop="thumbnail" alt="">
                                    </a>
                                </figure>
                                        @endif
                                    </div>

                                    <div class="soo">
                                        @if ($item -> img_6)
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="storage/{!!$item -> img_6 !!}" itemprop="contentUrl" data-size="1600x2400">
                                        <img class="photos_b" src="storage/{!!$item -> img_6 !!}" height="390"  width="260"  itemprop="thumbnail" alt="">
                                    </a>
                                </figure>
                                        @endif
                                    </div>

                                </div>
                            </div>

                         {{--   <div class="picture two cf" itemscope itemtype="http://schema.org/ImageGallery">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="img/product/1.jpg" itemprop="contentUrl" data-size="1600x2400">
                                        <img src="img/product/1.jpg" height="600"  width="400"  itemprop="thumbnail" alt="Beach">
                                    </a>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://tutsplus.github.io/photoswipe-jquery/img/city-2.jpg" itemprop="contentUrl" data-size="1000x667">
                                        <img src="https://tutsplus.github.io/photoswipe-jquery/img/city-2-thumb.jpg" height="600"  width="400"  itemprop="thumbnail" alt="">
                                    </a>
                                </figure>
                            </div>

                            <div class="picture cf" itemscope itemtype="http://schema.org/ImageGallery">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="https://tutsplus.github.io/photoswipe-jquery/img/people-1.jpg" itemprop="contentUrl" data-size="1000x667">
                                        <img src="https://tutsplus.github.io/photoswipe-jquery/img/people-1-thumb.jpg" height="560" width="840" itemprop="thumbnail" alt="Beach">
                                    </a>
                                </figure>
                            </div>--}}
                        </div>
                    </div>


                       <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                        <div class="pswp__bg"></div>
                        <div class="pswp__scroll-wrap">

                            <div class="pswp__container">
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                            </div>

                            <div class="pswp__ui pswp__ui--hidden">

                                <div class="pswp__top-bar">

                                    <div class="pswp__counter"></div>

                                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                    <button class="pswp__button pswp__button--share" title="Share"></button>
                                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                    <div class="pswp__preloader">
                                        <div class="pswp__preloader__icn">
                                            <div class="pswp__preloader__cut">
                                                <div class="pswp__preloader__donut"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                    <div class="pswp__share-tooltip"></div>
                                </div>

                                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                </button>

                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                </button>

                                <div class="pswp__caption">
                                    <div class="pswp__caption__center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
					      {{--<div class="product-pic-zoom">
						         <img class="product-big-img" src="storage/{!!$item -> img_1 !!}" alt="">
					           </div>
					      <div class="product-thumbs" tabindex="8" style="overflow: hidden; outline: none;">
						   <div class="product-thumbs-track">
							    <div class="pt active" data-imgbigurl="img/single-product/31.jpg"><img src="img/single-product/thumb-1.jpg" alt=""></div>
							    <div class="pt" data-imgbigurl="img/single-product/32.jpg"><img src="img/single-product/thumb-2.jpg" alt=""></div>
							    <div class="pt" data-imgbigurl="img/single-product/33.jpg"><img src="img/single-product/thumb-3.jpg" alt=""></div>
							    <div class="pt" data-imgbigurl="img/single-product/34.jpg"><img src="img/single-product/thumb-4.jpg" alt=""></div>
						  </div>
					      </div>--}}

                </div>


                <div class="col-lg-6 product-details">
					<h2 class="p-title">{{$item -> name}}</h2>
					<h3 class="p-price">{{$item -> price}}&nbsp;грн</h3>
					<h4 class="p-stock">Доступность: <span>В наличии</span></h4>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="p-review">
						<a href="">3 отзыв</a>|<a href="">Добавьте свой отзыв</a>
					</div>
					<div class="fw-size-choose">
						<p>Размер</p>
						<div class="sc-item">
							<input type="radio" name="sc" id="xs-size">
							<label for="xs-size">32</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="s-size">
							<label for="s-size">34</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="m-size" checked="">
							<label for="m-size">36</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="l-size">
							<label for="l-size">38</label>
						</div>
						<div class="sc-item disable">
							<input type="radio" name="sc" id="xl-size" disabled>
							<label for="xl-size">40</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="xxl-size">
							<label for="xxl-size">42</label>
						</div>
					</div>
					{{--<div class="quantity">
						<p>Quantity</p>
                        <div class="pro-qty">
                            <input type="text" value="1">
                        </div>
                    </div>--}}
					<a href="{{route('/add-cart',['id' => $item -> id])}}" class="site-btn">В КОРЗИНУ</a>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">описание</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>{{$item -> description}}</p>
									{{--<p>Approx length 66cm/26" (Based on a UK size 8 sample)</p>
									<p>Mixed fibres</p>
									<p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p>--}}
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">оплата</button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="./img/cards.png" alt="">
									<p>- наложенный платеж при получении, без предоплат! (комиссию оплачивает покупатель)<br>
                                        - оплата картой на сайте (он-лайн) - при оформлении заказа<br>
                                        - предоплата на карту Приват Банка (без комиссий) - при подтверждении менеджером по телефону</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">доставка & возврат</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 дней на возврат</h4>
                                    <p> 545 моделей товара - в наличии. Его отправляем в день заказа!<br>
                                    другие позиции привозим "под заказ" - в этом случае отправка в течении
									<span>3 - 7 дней</span></p>
									<p>Отправляем Новой Почтой,<br>
                                       УкрПочтой - на Ваш выбор за счет получателя! </p>
								</div>
							</div>
						</div>
                        <div class="panel">
                            <div class="panel-header" id="headingFour">
                                <button class="panel-link " data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">спросите</button>
                            </div>
                            <div id="collapse4" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="panel-body">
                                    <p>в контактной форме ниже вы можете задать любой вопрос<br>
                                       описать любую проблему<br>
                                       оставить пожелания о товаре или что захотите<br>
                                       мы свяжимся с вами в ближайшее время</p>
                                </div>
                            </div>
                        </div>
					</div>
{{--					<div class="social-sharing">--}}
{{--						<a href=""><i class="fa fa-google-plus"></i></a>--}}
{{--						<a href=""><i class="fa fa-pinterest"></i></a>--}}
{{--						<a href=""><i class="fa fa-facebook"></i></a>--}}
{{--						<a href=""><i class="fa fa-twitter"></i></a>--}}
{{--						<a href=""><i class="fa fa-youtube"></i></a>--}}
{{--					</div>--}}

                    <style>
                        form {
                            background: #f5f5f5; /* Цвет фона */
                            width: 300px; /* Ширина формы */
                            margin: auto; /* Выравниваем по центру */
                            padding: 20px; /* Поля вокруг текста */
                        }
                        input {
                            width: 100%; /* Ширина поля */
                            box-sizing: border-box; /* Ширина не учитывает padding */
                            margin: 10px 0; /* Отступы сверху и снизу */
                            padding: 12px 0; /* Поля вокруг текста */
                            border: none; /* Убираем рамку */
                            border-bottom: 1px solid #ccc; /* Линия снизу */
                            background: transparent; /* Прозрачный фон */
                        }
                        input:focus {
                            outline: none; /* Убираем контур */
                            border-bottom: 2px solid #1976D2; /* Синяя линия снизу */
                        }
                        input::placeholder {
                            transition: 0.5s; /* Время трансформации */
                            color: #aaa; /* Цвет подсказки */
                        }
                        input:focus::placeholder {
                            font-size: 10px; /* Размер шрифта */
                            transform: translateY(-16px); /* Сдвигаем вверх */
                        }
                    </style>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $errors)
                                    <li>{{$errors}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="/cart/check">
                        @csrf
                        <input type="email_phone" name="email_phone" id="email_phone" placeholder="Email или phone">

                        <input type="message" name="message" id="message" placeholder="написать узнать что да как">

                        <button type="submit" class="site-btn">сообщение</button>
                    </form>



				</div>
			</div>
            @endforeach
		</div>
	</section>
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>ПОХОЖИЕ ТОВАРЫ</h2>
			</div>
			<div class="product-slider owl-carousel">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/1.jpg" alt="">
						<div class="pi-links">
							<a href="http://127.0.0.1:8000/product?id=7" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
							{{--<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>--}}
						</div>
					</div>
					<div class="pi-text">
						<h6>₴&nbsp;3500</h6>
						<p><a href="http://127.0.0.1:8000/product?id=7" style="color:#000000">Ophelia red</a></p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">New</div>
						<img src="./img/product/2.jpg" alt="">
						<div class="pi-links">
							<a href="http://127.0.0.1:8000/product?id=3" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
							{{--<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>--}}
						</div>
					</div>
					<div class="pi-text">
						<h6>₴&nbsp;3950</h6>
                        <p><a href="http://127.0.0.1:8000/product?id=3" style="color:#000000">Abigail</a></p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/3.jpg" alt="">
						<div class="pi-links">
							<a href="http://127.0.0.1:8000/product?id=1" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
							{{--<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>--}}
						</div>
					</div>
					<div class="pi-text">
						<h6>₴&nbsp;3500</h6>
						<p><a href="http://127.0.0.1:8000/product?id=1" style="color:#000000">Maven </a></p>
					</div>
				</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/4.jpg" alt="">
							<div class="pi-links">
								<a href="http://127.0.0.1:8000/product?id=8" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
								{{--<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>--}}
							</div>
						</div>
						<div class="pi-text">
							<h6>₴&nbsp;3700</h6>
							<p><a href="http://127.0.0.1:8000/product?id=8" style="color:#000000">Ophelia White</a></p>
						</div>
					</div>
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/6.jpg" alt="">
						<div class="pi-links">
							<a href="http://127.0.0.1:8000/product?id=5" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
							{{--<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>--}}
						</div>
					</div>
					<div class="pi-text">
						<h6>₴&nbsp;2300</h6>
						<p><a href="http://127.0.0.1:8000/product?id=5" style="color:#000000">Blue</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- RELATED PRODUCTS section end -->

    @include('layouts.futer')

	<!-- Footer section -->
	{{--<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.blade.php"><img src="./img/logo-light.png" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
--}}
