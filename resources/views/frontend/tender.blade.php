<style>
	table{
		width:90%;
		border-collapse: collapse;
		margin-bottom:15px;
	}
	table *{
		text-align: left;
	}
	table thead tr th{
		font-size: 18px;
		font-style: italic;
		color:deepskyblue;
	}
	table tbody tr:nth-child(1) td{
		border-top:none;
		padding:8px;
	}
	table tbody tr td{
		border:1px solid silver;
		padding:8px;
	}
	hr.bl{
		height: 2px;
		border:none;
		background-color: deepskyblue;
	}
	h3{
		color: #2696F8;
		font-style: italic;
		font-size: 20px;
	}
	h4{
		color: #2696F8;
		font-style: italic;
	}
	p{
		color: grey;
		font-style: italic;
		font-size: 15px;

	}
	.main{
		margin-top:60px;
	}
	.description{
		margin-top:30px;
		margin-bottom:30px;
	}
	.description>.col-md-6:nth-child(1){
		padding-right:20px;
		border-right:1px solid blue;
	}
	.two-way{
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
		color: #2696F8;
	}
	.two-way a{
		color:#2696F8;
	}
	.flex{
		display: flex;
		
		align-items: center;
	}
	.trigger{
		margin-right:10px;
		color:grey;
		cursor: pointer;
		width:20px;
	}
	.tender-description{
		display: none;
	}
	@media (max-width: 768px){
		.row>*{
			margin-bottom:20px;
		}
	}
	.tender-name h3{
		cursor: pointer;
	}
	.open-desc{
		display: block;
	}
</style>
<div class="container">
	<div class="page-title">
		<h2>Tenders</h2>
		<hr>
		<hr class="blue">
	</div>
</div>
<div class="container main">
	<div class="tender">
		<div class="flex tender-name" onclick="toggle_desc(this)">
			<div class="trigger">
				<span>></span>
			</div>
			<h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, repellat, perferendis.
			</h3>
		</div>
		<div class="tender-description open-desc">
			<hr class="blue">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa a vitae magni unde incidunt quae sunt quibusdam deleniti maxime provident odit fuga, quos error officia molestiae, necessitatibus, dolor praesentium blanditiis.</p>
			<table>
				<thead>
					<tr>
						<th width="70%">
							Position
						</th>
						<th width="30%">
							Quantity
						</th>
					</tr>
				</thead>
			</table>
			<hr class="bl">
			<table>
				<tbody>
					<tr>
						<td width="70%">title</td>
						<td width="30%">12</td>
					</tr>
					<tr>
						<td>title</td>
						<td>12</td>
					</tr>
					<tr>
						<td>title</td>
						<td>12</td>
					</tr>
					<tr>
						<td>title</td>
						<td>12</td>
					</tr>
				</tbody>
			</table>
			<h4>Description</h4>
			<hr class="bl">
			<div class="row description">
				<div class="col-md-6">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam totam eveniet ducimus, maiores a culpa quibusdam animi asperiores dolores nihil dolorem, aspernatur. Eum beatae, nemo dolor porro recusandae ex eligendi.
				</div>
				<div class="col-md-6">
					<div class="two-way">
						<div>Contacts:</div>
						<div>+99890 228 8818</div>
					</div>
					<div class="two-way">
						<div>Mail:</div>
						<div>axtrem13@gmail.com</div>
					</div>
					<div class="two-way">
						<div>Links:</div>
						<div>
							<a href="#">Documents to load</a><br>
							<a href="#">Documents to load</a><br>
							<a href="#">Documents to load</a><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	function toggle_desc(elem){
		var description=elem.parentNode.children[1];
		if(description.classList.contains('open-desc')){
			description.classList.remove('open-desc');
			return 0;
		}
		description.classList.add('open-desc');
	}
</script>