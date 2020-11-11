<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
	<link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
	<link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
	<link rel="stylesheet" href="{{asset('assets/layout.css')}}?t={{time()}}">
	<link rel="stylesheet" href="{{asset('assets/home/css/style.css')}}?t={{time()}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap">

</head>

<body onclick="hide_menu()">
	<ul class="mobile-menu close">
		<li><a href="{{route('home', $l)}}" class="active">ГЛАВНАЯ</a></li>
		<li><a href="{{route('about', $l)}}" >О ПРЕДПРИЯТИИ</a></li>
		<li><a href="{{route('manuf', $l)}}">Цеха</a></li>
		<li><a href="{{route('modern', $l)}}">Модернизация и ЛОКализация</a></li>
		<li><a href="{{route('structure', $l)}}">ОТДЕЛЫ</a></li>
		<li><a href="{{route('tender', $l)}}">ТЕНДЕР</a></li>
		<li><a href="{{route('komitets', $l)}}">Комитеты</a></li>
		<li><a href="{{route('price', $l)}}">Прайс-лист</a></li>
	</ul>
	<header>
		<div class="just-overlay"></div>
		<div class="over-text">
			<nav>
				<div class="container">
					<ul>
						<li><a href="{{route('home', $l)}}" class="active">ГЛАВНАЯ</a></li>
						<li><a href="{{route('about', $l)}}" >О ПРЕДПРИЯТИИ</a></li>
						<li><a href="{{route('manuf', $l)}}">Цеха</a></li>
						<li><a href="{{route('modern', $l)}}">Модернизация и ЛОКализация</a></li>
						<li><a href="{{route('structure', $l)}}">ОТДЕЛЫ</a></li>
						<li><a href="{{route('tender', $l)}}">ТЕНДЕР</a></li>
						<li><a href="{{route('komitets', $l)}}">Комитеты</a></li>
						<li><a href="{{route('price', $l)}}">Прайс-лист</a></li>
					</ul>
					<div class="hamburger">
						<span onclick="open_menu(event)">Меню</span>
					</div>
				</div>
			</nav>
			<div class="creden">
				<div class="container">
					<div class="row">
						<div class="col-md-6 top-left">
							<div class="phone">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>+998 71 237-88-85</span>
							</div>
						</div>
						<div class="col-md-6 top-right">
							<div class="phone">
								<i class="fa fa-mobile" aria-hidden="true"></i>
							</div>
							<div class="glasses">
								<i class="fa fa-eye-slash" aria-hidden="true"></i>
							</div>
							<div class="search">
								<i class="fa fa-search" aria-hidden="true"></i>
							</div>
							<div class="language" onclick="toggle_lang(this)">
								Русский
								<i class="fa fa-angle-down" aria-hidden="true"></i>
								<i class="fa fa-globe" aria-hidden="true"></i>
								<ul>
									<li><a href="#">Uzbek</a></li>
									<li><a href="#">O'zbek</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="showcase">
				<div class="logo">
					<img src="assets/home/images/logoz.png" alt="">
					<small>Унитарное предприятие</small>
					<h1>O'ZTEMIRYO'LMASHTA'MIR</h1>
				</div>
				<div class="down">
					<i></i>
				</div>
			</div>
		</div>
	</header>
	<section class="anns">
		<div class="container">
			<div class="title">
				<div>
					<h2>Последние новости</h2>
					<div class="arrows">
						<i class="fa fa-angle-left ann-left"></i>
						<i class="fa fa-angle-right ann-right"></i>
					</div>
				</div>
				<hr>
				<hr class="dark">
			</div>
		</div>
		<div class="container">
			<div class="ann-slider">
				<div class="row">
					<div class="col-md-7">
						<div class="big-ann">
							<div class="overlay"></div>
							<div class="text">
								<abbr title="asb">Акционерное общество «Узбекистон
									темир йуллари» Проводит конкурс
									на консалтинг по менеджменту
									финансово-хозяйственной ...
								</abbr>
								<div class="details light">
									<div class="detail">
										<i></i>
										<span>10.09.2020</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="small-ann">
							<img src="assets/home/images/ann-small.png" alt="">
							<div class="details dark">
								<div class="detail">
									<i></i>
									<span>10.09.2020</span>
								</div>
							</div>
							<div class="text">
								<abbr title="Медиа-тур: Много нового, интересного и актуального на новых объектах метрополитена. Развитие, достижения и перспективы﻿ в годы ... ">Медиа-тур: Много нового, интересного и актуального на новых объектах метрополитена. Развитие, достижения и перспективы﻿ в годы ...
								</abbr>
								<div>
									<button class="more-button">All announcements</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<div class="big-ann">
							<div class="overlay"></div>
							<div class="text">
								<abbr title="asb">Акционерное общество «Узбекистон
									темир йуллари» Проводит конкурс
									на консалтинг по менеджменту
									финансово-хозяйственной ...
								</abbr>
								<div class="details light">
									<div class="detail">
										<i></i>
										<span>10.09.2020</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="small-ann">
							<img src="assets/home/images/ann-small.png" alt="">
							<div class="details dark">
								<div class="detail">
									<i></i>
									<span>10.09.2020</span>
								</div>
							</div>
							<div class="text">
								<abbr title="Медиа-тур: Много нового, интересного и актуального на новых объектах метрополитена. Развитие, достижения и перспективы﻿ в годы ... ">Медиа-тур: Много нового, интересного и актуального на новых объектах метрополитена. Развитие, достижения и перспективы﻿ в годы ...
								</abbr>
								<div>
									<button class="more-button">All announcements</button>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<section class="interactive">
		<div class="container">
			<div class="title">
				<div>
					<h2>Интерактивные услуги</h2>
				</div>
				<hr>
				<hr class="dark">
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<a class="inter-card" href="#">
						<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
							<img src="{{asset('images/icon1.png')}}"/>
						</div>
						<div class="inter-text">
							<span>Открытые данные</span>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a class="inter-card" href="#">
						<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
							<img src="{{asset('images/icon2.png')}}"/>
						</div>
						<div class="inter-text">
							<span>Открытые данные</span>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a class="inter-card" href="#">
						<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
							<img src="{{asset('images/icon3.png')}}"/>
						</div>
						<div class="inter-text">
							<span>Открытые данные</span>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a class="inter-card" href="#">
						<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
							<img src="{{asset('images/icon4.png')}}"/>
						</div>
						<div class="inter-text">
							<span>Открытые данные</span>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a class="inter-card" href="#">
						<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
							<img src="{{asset('images/icon5.png')}}"/>
						</div>
						<div class="inter-text">
							<span>Открытые данные</span>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a class="inter-card" href="#">
						<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
							<img src="{{asset('images/icon6.png')}}"/>
						</div>
						<div class="inter-text">
							<span>Открытые данные</span>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a class="inter-card" href="#">
						<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
							<img src="{{asset('images/icon7.png')}}"/>
						</div>
						<div class="inter-text">
							<span>Открытые данные</span>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a class="inter-card" href="#">
						<div class="inter-icon" style="display: flex; justify-content: center; align-items: center;">
							<img src="{{asset('images/icon8.png')}}"/>
						</div>
						<div class="inter-text">
							<span>Открытые данные</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="title">
				<div>
					<h2>ГАЛЕРЕЯ</h2>
				</div>
				<hr>
				<hr class="dark">
			</div>
		</div>
		<div class="gallery">
			<div class="container">
				<div class="row">
					<div class="col-md-4 left">
						<img src="assets/home/images/gall1.png" alt="">
						<img src="assets/home/images/gall4.png" alt="">
						<img src="assets/home/images/gall6.png" alt="">
					</div>
					<div class="col-md-8 right">
						<div class="row">
							<div class="col-md-6 two" style="padding:0">
								<img src="assets/home/images/gall2.png" alt="">
								<img src="assets/home/images/gall5.png" alt="">
							</div>
							<div class="col-md-6 one">
								<img src="assets/home/images/gall3.png" alt="">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 one-big" style="padding:0">
								<img src="assets/home/images/gall7.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="useful-links">
		<div class="container">
			<div class="title">
				<div>
					<h2>Полезные ссылки</h2>
					<div class="arrows">
						<i class="fa fa-angle-left use-left"></i>
						<i class="fa fa-angle-right use-right"></i>
					</div>
				</div>
				<hr />
				<hr class="dark"/>
			</div>
		</div>
		<div class="container">
			<div class="links-slider">
				<div class="link-card">
					<img src="assets/home/images/lexuz.png" alt="">
					<a href="#">Портал Государственной Власти Республики Узбекистан
					</a>
				</div>
				<div class="link-card">
					<img src="assets/home/images/auksion.png" alt="">
					<a href="#">Портал Государственной Власти Республики Узбекистан
					</a>
				</div>
				<div class="link-card">
					<img src="assets/home/images/link.png" alt="">
					<a href="#">Портал Государственной Власти Республики Узбекистан
					</a>
				</div>
				<div class="link-card">
					<img src="assets/home/images/palata.png" alt="">
					<a href="#">Портал Государственной Власти Республики Узбекистан
					</a>
				</div>
				<div class="link-card">
					<img src="assets/home/images/gerb.png" alt="">
					<a href="#">Портал Государственной Власти Республики Узбекистан
					</a>
				</div>
				<div class="link-card">
					<img src="assets/home/images/uztemir.png" alt="">
					<a href="#">Портал Государственной Власти Республики Узбекистан
					</a>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="title">
				<div>
					<h2>сТАТИСТИКА</h2>
				</div>
				<hr />
				<hr class="dark" />
			</div>
		</div>
		<div class="stats">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="stat-card">
							<span class="stat-count">1,246</span>
							<hr>
							<div class="stat-title">
								<span>Отремонтированные <br> тепловозы</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="stat-card">
							<span class="stat-count">26</span>
							<hr>
							<div class="stat-title">
								<span>Отремонтированные <br> тепловозы</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="stat-card">
							<span class="stat-count">4800</span>
							<hr>
							<div class="stat-title">
								<span>Отремонтированные <br> тепловозы</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="stat-card">
							<span class="stat-count">122</span>
							<hr>
							<div class="stat-title">
								<span>Отремонтированные <br> тепловозы</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="useful-links">
		<div class="container">
			<div class="title">
				<div>
					<h2>Полезные ссылки</h2>
					<div class="arrows">
						<i class="fa fa-angle-left use-left-2"></i>
						<i class="fa fa-angle-right use-right-2"></i>
					</div>
				</div>
				<hr />
				<hr class="dark"/>
			</div>
		</div>
		<div class="container">
			<div class="links-slider-2">
				<div class="link-card">
					<img src="assets/home/images/UZKABEL.png" alt="" style="width: 100%">
					<a href="#">Портал Государственной Власти Республики Узбекистан
					</a>
				</div>
				<div class="link-card">
					<img src="assets/home/images/cropped-3-1.png" alt="" style="width: 100%">
					<a href="#">Портал Государственной Власти Республики Узбекистан
					</a>
				</div>
				<div class="link-card">
					<img src="assets/home/images/dielogo.png" alt="" style="width: 100%">
					<a href="#">Портал Государственной Власти Республики Узбекистан
					</a>
				</div>
				<div class="link-card">
					<img src="assets/home/images/logo_talco.png" alt="" style="width: 100%">
					<a href="#">Портал Государственной Власти Республики Узбекистан
					</a>
				</div>
				<div class="link-card">
					<img src="assets/home/images/osookg-logo.png" alt="" style="width: 100%">
					<a href="#">Портал Государственной Власти Республики Узбекистан
					</a>
				</div>
				<div class="link-card">
					<img src="assets/home/images/uztemir.png" alt="" style="width: 100%">
					<a href="#">Портал Государственной Власти Республики Узбекистан
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="contacts">
		<div class="container">
			<div class="title">
				<div>
					<h2>Контакты</h2>
				</div>
				<hr />
				<hr class="dark"/>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contacts-images">
						<div class="first-img">
							<img src="{{asset('images/geo.png')}}" alt="">
							<span>
								Республика Узбекистан <br>
								100005, г. Ташкент ул. <br>
								Мехржон - 64
							</span>
						</div>
						<div class="second-img">
							<img src="{{asset('images/document.png')}}" alt="">
							<span>998 (71) 233-65-84</span>
						</div>
						<div class="third-img">
							<img src="{{asset('images/call.png')}}" alt="">
							<span>998 (71) 237-88-85</span>
						</div>
						<div class="fourth-img">
							<img src="{{asset('images/mail.png')}}" alt="">
							<span>info@tash-trz.uz</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<iframe style="border: 2px solid #2696f8;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.040762398899!2d69.28676351572472!3d41.28621731022324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef54b3c208f59%3A0x7b30f40357e1cc2b!2zNjQg0YPQu9C40YbQsCDQnNC10YXRgNC20L7QvSwg0KLQsNGI0LrQtdC90YIsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e0!3m2!1sru!2s!4v1604379689130!5m2!1sru!2s" 
					width="100%" height="500" frameborder="1" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<!-- <div class="just-overlay"></div> -->
		<div class="over-text-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="logo">
							<img src="assets/home/images/logoz.png" alt="">
							<div class="div">
								<small>Унитарное предприятие</small>
								<h2>O'ZTEMIRYO'LMASHTA'MIR</h2>
							</div>
						</div>
						<div class="legal">
							Копирование информации (цитирование в средствах массовой информации тех или иных сведений либо сообщений), размещенной на сайте davxizmat.uz допускается только при условии указания ссылки на источник информации.
						</div>
						<div class="copyright">
							&copy 2020. Все права защищены.
						</div>
					</div>
					<div class="col-md-6">
						<div class="mistake">
							Если Вы нашли ошибку в тексте, выделите её и нажмите Ctrl+Enter для уведомления администрации.
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="{{asset('assets/jquery.min.js')}}"></script>
	<script src="{{asset('assets/slick/slick.js')}}"></script>
	<script>
		$('.links-slider').slick({
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			prevArrow:$(".use-left"),
			nextArrow:$(".use-right"),
			responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			]
		});
		$('.links-slider-2').slick({
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			prevArrow:$(".use-left-2"),
			nextArrow:$(".use-right-2"),
			responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			]
		});
		$('.ann-slider').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			prevArrow:$(".ann-left"),
			nextArrow:$(".ann-right")
		});
	</script>
	<script>
		const mobile_menu=document.getElementsByClassName("mobile-menu")[0];
		const body=document.getElementsByTagName("body")[0];
		function open_menu(ev){
			ev.stopPropagation();
			mobile_menu.classList.remove('close');
			mobile_menu.classList.add('open');
			body.classList.add('unscrolled');
		}
		function hide_menu(){
			body.classList.remove('unscrolled');
			mobile_menu.classList.remove('open');
			mobile_menu.classList.add('close');
		}
		function toggle_lang(elem){
			if(elem.classList.contains('open')){
				elem.classList.remove('open');
				return 0;
			}
			elem.classList.add('open');
		}
	</script>
</body>

</html>