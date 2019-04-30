@extends('layouts.app')
@section('title', 'Team | Taylor Properties | Buying and Selling Real Estate in DC, MD, VA and PA')
@section('content')
<style type="text/css">
	.imagebox {
background: black;
padding: 0px;
position: relative;
text-align: center;
width: 100%;
}
.imagebox img {
opacity: 1;
transition: 0.5s opacity;
width: 100%;
}
.imagebox .imagebox-desc {
background-color: rgba(33, 90, 150, 0.9);
bottom: 0px;
color: #fff;
font-size: 1.2em;
left: 0px;
padding: 15px 15px;
position: absolute;
transition: 0.5s padding;
text-align: center;
width: 100%;
font-weight: bold;
}
.col-sm-4 {
	padding: 2em;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="imagebox">
				<img src="{{ asset('images/find-home.jpg')}}" class="category-banner img-responsive">
				<span class="imagebox-desc">Robb Taylor<br>Broker/Owner</span>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="imagebox">
				<img src="{{ asset('images/find-agent.jpg')}}" class="category-banner img-responsive">
				<span class="imagebox-desc">Mike Taylor<br>Managing Broker</span>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="imagebox">
				<img src="{{ asset('images/careers.jpg')}}" class="category-banner img-responsive">
				<span class="imagebox-desc">Delia Abrams<br>COO</span>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="imagebox">
				<img src="{{ asset('images/careers.jpg')}}" class="category-banner img-responsive">
				<span class="imagebox-desc">Diane Superczynski<br>Recruiting Director</span>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="imagebox">
				<img src="{{ asset('images/careers.jpg')}}" class="category-banner img-responsive">
				<span class="imagebox-desc">Kerri George<br>Administrative Assisstant</span>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="imagebox">
				<img src="{{ asset('images/careers.jpg')}}" class="category-banner img-responsive">
				<span class="imagebox-desc">Kayla Williams<br>Administrative Assisstant</span>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="imagebox">
				<img src="{{ asset('images/careers.jpg')}}" class="category-banner img-responsive">
				<span class="imagebox-desc">Gary Phinith<br>Marketing Director</span>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="imagebox">
				<img src="{{ asset('images/careers.jpg')}}" class="category-banner img-responsive">
				<span class="imagebox-desc">Kyle Abrams<br>Social Media Coordinator</span>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="imagebox">
				<img src="{{ asset('images/careers.jpg')}}" class="category-banner img-responsive">
				<span class="imagebox-desc">Lucia Martinez<br>Accounts and Billing</span>
			</div>
		</div>
	</div>
</div>
@include('includes.agent_testimonials')
@endsection