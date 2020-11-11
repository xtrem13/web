<style>
	.gallery{
		margin:15px 0 30px;
	}
	.gallery img{
		height: 300px;
		object-fit: cover;
		max-width: 100%;
		cursor: pointer;
	}
	/* the slides */
	.slick-slide {
		margin: 0 27px;
		height: 310px;
		padding-top:10px;
		padding-bottom:10px;
	}
	.slick-prev::before{
		content:"<";
	}
	.slick-next::before{
		content:">";
	}
	.slick-prev::before, .slick-next::before{
		color: #222;
	}
	/* the parent */
	.slick-list {
		margin: 0 -27px;
	}
	.page-content h3{
		font-style: italic;
		color: deepskyblue;
		font-size:30px;
		text-align: center;
	}
	.page-content p{
		color: #222;
	}
	.content-title{
		margin-top:30px;
		overflow: hidden;
	}
</style>
<div class="container">
	<div class="page-title">
		<h2>{{$zavod['title'][$l]}}</h2>
		<hr>
		<hr class="blue">
	</div>
</div>
<div class="container">
	<div class="gallery">
		@foreach($zavod['images'] as $image)
		<div class="item">
			<img src="{{route('img')."?path=".urlencode($image)}}" 
				alt="" 
				class="bordered"
			>
		</div>
		@endforeach
	</div>
	<div class="centered">
		<a href="{{route('zavgallery', ['l'=>$l,'id'=>$zavod['id']])}}" class="btn-blue">more</a>
	</div>
</div>
<div class="container">
	<div class="content-title">
		<hr>
		<hr class="dark">
	</div>
</div>
<div class="container page-content">
	<h3>{{$zavod['title'][$l]}}</h3>
	<div class="endimage">
		<img src="{{asset('images/end-img.png')}}" alt="">
	</div>
	<p>
		{{$zavod['content'][$l]}}
	</p>
</div>
@section('js')
<script>
	$('.gallery').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows:true,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		
		]
	});
</script>
@endsection