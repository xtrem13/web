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
	.endimage{
		text-align: center;
		padding:20px 0 50px;
	}
	.endimage img{
		max-width: 60%;
	}
	.img-cont img{
		height:350px;
		object-fit: cover;
		width:80%;
	}
	.right .img-cont{
		text-align: left;
	}
	@media (max-width: 768px){
		*{
			text-align:center !important;
		}
		.row>*{
			margin-bottom:30px;
		}
	}
</style>
<div class="container">
	<div class="page-title">
		<h2>Цеха</h2>
		<hr>
		<hr class="blue">
	</div>
</div>
<div class="container manufactures">
	<div class="row manuf">
		<div class="col-md-6">
			<h2>Локомотивосборочный цех</h2>
			<p>
				Локомотивосборочный цех является основным цехом предприятия в котором выполняется ремонт тепловозов, электровозов и вагонов в соответствии с действующим «Правилами заводского ремонта», 	а так же модернизация локомотивов и вагонов.
			</p>
			<div class="more-button">
				<a class="btn-blue" href="{{route('onemanuf',['l'=>$l, 'id'=>1])}}">Подробно</a>
			</div>
			<div class="endsection">
				<hr>
				<hr class="blue">
			</div>
		</div>
		<div class="col-md-6 img-cont">
			<img src="{{asset('manufactures/m1.png')}}" alt="" class="bordered">
		</div>
	</div>
	<div class="row manuf right">
		<div class="col-md-6 img-cont">
			<img src="{{asset('manufactures/m2.png')}}" alt="" class="bordered">
		</div>
		<div class="col-md-6 order-sm-0">
			<h2>Локомотивосборочный цех</h2>
			<p>
				Локомотивосборочный цех является основным цехом предприятия в котором выполняется ремонт тепловозов, электровозов и вагонов в соответствии с действующим «Правилами заводского ремонта», 	а так же модернизация локомотивов и вагонов.
			</p>
			<div class="more-button">
				<a class="btn-blue" href="{{route('onemanuf',['l'=>$l, 'id'=>2])}}">Подробно</a>
			</div>
			<div class="endsection">
				<hr>
				<hr class="blue">
			</div>
		</div>
	</div>
</div>
<div class="endimage">
	<img src="{{asset('images/end-img.png')}}" alt="">
</div>