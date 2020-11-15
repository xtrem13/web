@php
 $title=request()->title;
@endphp
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('gallery/plugins/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('gallery/plugins/owlcarousel/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('gallery/fonts.css')}}">
<link rel="stylesheet" href="{{asset('gallery/style.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<style>
	.gallery{
		padding:10px 0 100px;
	}
</style>
<section class="gallery">
	<div class="container">
		<div class="gallery-title">
			<h2>{{$title}}</h2>
		</div>
		<div class="gallery-name">
			<h3>Soyuz molodeji</h3>
		</div>
		<div class="gallery-images">

			<a data-fancybox="gallery" href="{{asset('prof/images/vra4.jpg')}}">
				<img src="{{asset('prof/images/vra4.jpg')}}" alt="">
			</a>
		</div>
	</div>
</section>



