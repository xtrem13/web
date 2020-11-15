@php
	$l=request()->l;
@endphp
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
	<link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
	<link rel="stylesheet" href="{{asset('assets/bootstrap-grid.css')}}">
	<link rel="stylesheet" href="{{asset('assets/layout.css')}}">
	<title>O'ZTEMIRYO'LMASHTA'MIR</title>
	
</head>

<body onclick="hide_menu()">
	<ul class="mobile-menu close">
		<li><a href="{{route('home', $l)}}" class="active">ГЛАВНАЯ</a></li>
		<li><a href="{{route('about', $l)}}" >О ПРЕДПРИЯТИИ</a></li>
		<li><a href="{{route('manuf', $l)}}">Цеха</a></li>
		<li><a href="{{route('modern', $l)}}">Модернизация и ЛОКализация</a></li>
		<li><a href="{{route('structures', $l)}}">ОТДЕЛЫ</a></li>
		<li><a href="{{route('tender', $l)}}">ТЕНДЕР</a></li>
		<li><a href="{{route('komitets', $l)}}">Комитеты</a></li>
		<li><a href="{{route('price', $l)}}">Прайс-лист</a></li>
	</ul>
	<nav>
		<div class="container">
			<ul class="menu">
				<li><a href="{{route('home', $l)}}" class="active">ГЛАВНАЯ</a></li>
				<li><a href="{{route('about', $l)}}" >О ПРЕДПРИЯТИИ</a></li>
				<li><a href="{{route('manuf', $l)}}">Цеха</a></li>
				<li><a href="{{route('modern', $l)}}">Модернизация и ЛОКализация</a></li>
				<li><a href="{{route('structures', $l)}}">ОТДЕЛЫ</a></li>
				<li><a href="{{route('tender', $l)}}">ТЕНДЕР</a></li>
				<li><a href="{{route('komitets', $l)}}">Комитеты</a></li>
				<li><a href="{{route('price', $l)}}">Прайс-лист</a></li>
			</ul>
			<div class="hamburger">
				<span onclick="open_menu(event)">Меню</span>
			</div>
		</div>
	</nav>
	<main>
		@yield('content')
	</main>
	<footer>
		<!-- <div class="just-overlay"></div> -->
		<div class="over-text-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="logo">
							<img src="{{asset('assets/home/images/logoz.png')}}" alt="">
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

		var menu=document.getElementsByClassName('menu')[0].children;
		for(let i=0;i<menu.length;i++){
			if(window.location.href.split("#")[0]==menu[i].children[0].href){
				menu[i].children[0].classList.add('active');
			}else{
				menu[i].children[0].classList.remove('active');
			}
		}
	</script>
	@yield('js')
	
</body>

</html>