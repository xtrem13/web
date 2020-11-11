<style>
	.manufactures{

	}
	.manufactures img{
		max-width: 80%;
	}
	.manufactures .img-cont{
		text-align: right;
	}
	.manuf{
		margin-top:25px;
		margin-bottom:50px;
	}
	.manuf h2{
		color:#489ef9;
	}
	.manuf a{
		text-decoration: none;
		cursor: pointer;

	}
	.endsection hr{
		height: 1px;
		border:none;
		background-color: grey;
		margin-top:15px;
	}
	.endsection hr.blue{
		margin:0;
		margin-top:-2px;
		height: 3px;
		border:none;
		background-color: blue;
		width:25%;
	}
	.manuf.right .more-button{
		text-align: right;
	}
	
	
	@media (max-width: 768px){
		*{
			text-align:center !important;
		}
		.row>*{
			margin-bottom:30px;
		}
	}
	.tem{
		
	}
	.tem img{
		width:100%;
		height: 500px;
		object-fit: cover;
	}
</style>
<div class="container">
	<div class="page-title">
		<h2>Manufacturing</h2>
		<hr>
		<hr class="blue">
	</div>
</div>
<div class="container manufactures">
	<div class="row manuf right">
		<div class="col-md-6">
			<h2>Some Title</h2>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eligendi inventore deleniti illum qui. A nostrum, eligendi sed at ea est similique, nesciunt ipsam cumque modi quos, facere, amet nulla!
			</p>
			<div class="more-button">
				<a class="btn-blue">More</a>
			</div>
			<div class="endsection">
				<hr>
				<hr class="blue">
			</div>
		</div>
		<div class="col-md-6 img-cont">
			<img src="{{asset('images/h1.jpg')}}" alt="" class="bordered">
		</div>
	</div>
</div>
<div class="endimage">
	<img src="{{asset('images/end-img.png')}}" alt="">
</div>
<div class="container tem">
	<h2 class="centered">TEM2</h2>
	<div>
		<img src="{{asset('images/h1.jpg')}}" alt="" class="bordered">
	</div>
</div>
<div class="endimage">
	<img src="{{asset('images/end-img.png')}}" alt="">
</div>
<div class="container tem">
	<h2 class="centered">ZAPCHASTI</h2>
	<div>
		<img src="{{asset('images/h1.jpg')}}" alt="" class="bordered">
	</div>
</div>
<div class="endimage">
	<img src="{{asset('images/end-img.png')}}" alt="">
</div>