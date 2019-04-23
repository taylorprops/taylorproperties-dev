@extends('layouts.app')

@section('title', 'Office Locations | Taylor Properties | Buying and Selling Real Estate in DC, MD, VA and PA')

@section('content')
<style>
	#mainNav {
		background-color: #fff;
	}
	.fixed-top {
		position: inherit;
	}
	.container-fluid.header {
	    background-image: url({{ asset('images/taylorprops-hero.jpeg') }});
	    background-size: cover;
	    background-position: center;
	}
	.header-text {
	    background-color: rgba(250,250,250,.9);
	    width: 70%;
	    min-width: 300px;
	    padding: 10px;
	    margin: 100px auto;
	}
	#locations {
		padding: 4em 0;
	}
	.col-md-4.locations {
	    margin-bottom: 2em;
	}
</style>
<div class="container-fluid header">
	<div class="row">
		<div class="header-text">
			<h1>Office Locations</h1>
			<p>Convenient locations to serve you throughout the Baltimore-Washington metropolitan areas. Our offices give you the flexibility to work where you want or need. Fully equipped with work stations, free printing, scanning and faxing. Conference rooms to hold meetings, trainings and settlements.</p>
		</div>
	</div>
</div>
<section id="locations">
  <div class="container">
    <div class="row">
    	@foreach ($locations as $location)
		<div class="col-md-4 locations">
			<h4>{{$location->name}}</h4>
			<p>{{$location->address1}}<br>
				@if ($location->address2 != '')
					{{$location->address2}}<br>
				@else
				@endif
				{{$location->city}}, {{$location->state}} {{$location->zip}}<br>
			<a href="{{$location->map_url}}" target="_blank">Get Directions</a></p>
		</div>
		@endforeach
	</div>
  </div>
</section>
@endsection