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
		<h2>Отделы</h2>
		<hr>
		<hr class="blue">
	</div>
</div>
<div class="container manufactures">
	@foreach($structures as $index=>$structure)
	<div class="row manuf {{$index%2==0?"right":""}}">
		<div class="col-md-6 {{$index%2==0?"order-md-1":""}}">
			<h2>{{$structure['title'][$l]}}</h2>
			<p>
				{{$structure['short_content'][$l]}}
			</p>
			<div class="more-button">
				<a class="btn-blue" 
					href="{{route('one_str',['l'=>$l, 'id'=>$structure['id']])}}">
					подробно
				</a>
			</div>
		</div>
		<div class="col-md-6 {{$index%2==0?"":"img-cont"}} ">
			<img src="{{route('img')."?path=". urlencode($structure['img'])}}"
				 alt="" 
				 class="bordered"
			>
		</div>
	</div>
	@endforeach
	
	<div class="endsection">
		<hr>
		<hr class="blue">
	</div>
</div>
<div class="endimage">
	<img src="{{asset('images/end-img.png')}}" alt="">
</div>