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
									<span>0</span>
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
					<li><a href="#">Home</a></li>
					<li><a href="#">Women</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Jewelry
						<span class="new">New</span>
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
			<h4>ВАШ ЗАКАЗ</h4>
			<div class="site-pagination">
				<a href="">главная</a> /
				<a href="">Ваша корзина</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->
@if($messageSuccessOrder)
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{$messageSuccessOrder}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<div class="checkout-form">
						<div class="cf-title">информация для оформления</div>
						<div class="row">
							{{--<div class="col-md-7">
								<p>*Billing Information</p>
							</div>--}}
							<div class="col-md-5">
							{{--	<div class="cf-radio-btns address-rb">
									<div class="cfr-item">
										<input type="radio" name="pm" id="one">
										<label for="one">Use my regular address</label>
									</div>
									<div class="cfr-item">
										<input type="radio" name="pm" id="two">
										<label for="two">Use a different address</label>
									</div>
								</div>--}}
							</div>
						</div>
						<div class="row address-inputs">
							<div class="col-md-12">

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $errors)
                                                <li>{{$errors}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="post" action="{{route('/make-order')}}">
                                   @csrf
                                    <input type="text" name="name" id="name" value="{{$user->name}}"  placeholder="Ваше имя">

                                    <input type="text" name="email" id="email" value="{{$user->email}}"   placeholder="Email">

                                    <input type="text" name="phone" id="phone" placeholder="телефон">

                                    <input type="text" name="address" id="address" placeholder="адрес">

							        <div class="col-md-6">
								         <input type="text" name="city" id="city" placeholder="город">
							        </div>
							        <div class="col-md-6">
								         <input type="text" name="zip" id="zip" placeholder="индекс">
							        </div>

                                    <div class="checkout-cart">
                                        <h3>корзина товаров</h3>


                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">название</th>
                                                <th scope="col">количество</th>
                                                <th scope="col">цена</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cart as $item)
                                            <tr>
                                                <th scope="row"></th>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->quantity}}</td>
                                                <td>₴&nbsp;{{$item->price}}</td>
                                                @endforeach
                                            </tr>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col" class="price-list">итого :</th>
                                                <th scope="col" class="total">₴&nbsp;{{$sum}}</th>

                                           {{-- <tr>
                                                <th scope="row">2</th>
                                                <td>итого:</td>
                                                <td></td>
                                                <td>₴&nbsp;{{$sum}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>--}}
                                            </tbody>
                                        </table>




                                       {{-- <ul class="product-list">
                                            @foreach($cart as $item)
                                                <li>

                                                    <h6>{{$item->name}}</h6>
                                                    <p>${{$item->price}}</p>
                                                </li>
                                            @endforeach
                                        </ul>--}}
                                       {{-- <ul class="price-list">
                                            <li>Итого<span>$99.90</span></li>
                                            <li>Доставка<span>free</span></li>
                                            <li class="total">Итого<span>${{$sum}}</span></li>
                                        </ul>--}}

                                    </div>
                                   {{-- <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Имя</th>
                                            <th scope="col">Фамилия</th>
                                            <th scope="col">Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>--}}

                                    <button class="site-btn submit-order-btn">ЗАКАЗАТЬ</button>

                                </form>
                            </div>


                     </div>


                       <div class="cf-title">Доставка</div>

                            {{--<div class="row shipping-btns">
                                <div class="col-6">
                                    <h4>Новая почта &nbsp;&nbsp;<img src="img/Nova_Poshta_2014_logo.svg.png" alt=""></h4>
                                </div>
                                <div class="col-6">
                                    <div class="cf-radio-btns">
                                        <div class="cfr-item">
                                            <input type="radio" name="shipping" id="ship-1">
                                            <label for="ship-1">₴&nbsp;45 </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4>Укрпочта &nbsp;&nbsp;<img src="img/logo-ukrpochta.png" alt=""></h4>
                                </div>
                                <div class="col-6">
                                    <div class="cf-radio-btns">
                                        <div class="cfr-item">
                                            <input type="radio" name="shipping" id="ship-2">
                                            <label for="ship-2">₴&nbsp;45</label>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                        {{--===========================table bootstrap====================================================--}}
                        <table class="table table-sm">
                            {{--<thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Фамилия</th>
                                <th scope="col">Username</th>
                            </tr>
                            </thead>--}}
                            <tbody>
                            <tr>
                                <th scope="row">&nbsp;</th>
                                <td>Новая почта</td>
                                <td>&nbsp;</td>
                                <td><img src="img/Nova_Poshta_2014_logo.svg.png" alt=""></td>
                            </tr>
                            <tr>
                                <th scope="row">&nbsp;</th>
                                <td>Укрпочта</td>
                                <td>&nbsp;</td>
                                <td><img src="img/logo-ukrpochta.png" alt=""></td>
                            </tr>
                           {{-- <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>--}}
                            </tbody>
                        </table>


                        {{--==============================end table bootstrap=====================================================--}}

                           <div class="cf-title">Оплата</div>

                        {{--============================== table bootstrap=====================================================--}}

                        <table class="table table-sm">
                         {{--   <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Фамилия</th>
                                <th scope="col">Username</th>
                            </tr>
                            </thead>--}}
                            <tbody>
                            <tr>
                                <th scope="row">&nbsp;</th>
                                <td>Приват24</td>
                                <td>&nbsp;</td>
                                <td><img src="img/paysystem_05.png" alt=""></td>
                            </tr>
                            <tr>
                                <th scope="row">&nbsp;</th>
                                <td>Visa&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/mastercart.png" alt=""></td>
                            </tr>
                           {{-- <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>--}}
                            </tbody>
                        </table>


                        {{--==============================end table bootstrap=====================================================--}}

                               {{-- <ul class="payment-list">
                                    <li>Приват24<a href="#"><img src="img/paysystem_05.png" alt=""></a></li>
                                    <li>Visa&nbsp;/&nbsp;Mastercard<a href="#"><img src="img/mastercart.png" alt=""></a></li>
                                    <li>&nbsp;</li>
                                </ul>--}}
                                   <button class="site-btn submit-order-btn">ОФОРМИТЬ ОРДЕР</button>
                              </div>

                           </div>

                       <div class="col-lg-4 order-1 order-lg-2">
					   <div class="checkout-cart">
						  <h3>корзина товаров</h3>
						 <ul class="product-list">
                            @foreach($cart as $item)
							<li>
								<div class="pl-thumb"><img src="storage/{!!$item ->attributes-> img_1 !!}" alt=""></div>
								<h6>{{$item->name}}</h6>
								<p>₴&nbsp;{{$item->price}}</p>
							</li>
							{{--<li>
								<div class="pl-thumb"><img src="img/cart/2.jpg" alt=""></div>
								<h6>Animal Print Dress</h6>
								<p>$45.90</p>
							</li>--}}
                            @endforeach
						</ul>
						<ul class="price-list">
							{{--<li>Итого<span>$99.90</span></li>
							<li>Доставка<span>free</span></li>--}}
							<li class="total">Итого :<span>₴&nbsp;{{$sum}}</span></li>
						</ul>

					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- checkout section end -->
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
