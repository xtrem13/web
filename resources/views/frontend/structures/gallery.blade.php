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
			<h2>галерея</h2>
		</div>
		<div class="gallery-name">
			<h3>{{$str['title'][$l]}}</h3>
		</div>
		<div class="gallery-images">

			@foreach($images as $image)
			<a data-fancybox="gallery" href="{{route('img')."?path=".urlencode($image->path)}}">
				<img src="{{route('img')."?path=".urlencode($image->path)}}" alt="">
			</a>

			@endforeach
		</div>
	</div>
</section>



