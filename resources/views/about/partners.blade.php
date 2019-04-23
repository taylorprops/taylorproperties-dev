@extends('layouts.app')
@section('title', 'Affiliated Partners | Taylor Properties | Buying and Selling Real Estate in DC, MD, VA and PA')
@section('content')
<style type="text/css">
	@media (max-width: 768px){
.order1 {
order: 1;
}
.order2 {
order: 2;
}
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-3" style="display: flex; align-items: center;">
			<div>
				<img alt="Do Your Research" class="img-fluid" src="{{asset('images/logos/HeritageTitle.png')}}"/>
			</div>
		</div>
		<div class="col-md-9 col-lg-9 ml-auto d-flex align-items-center mt-4 mt-md-0">
			<div>
				<h3>Heritage Title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-9 col-lg-9 ml-auto d-flex align-items-center mt-4 mt-md-0 order2">
			<div>
				<h3>Heritage Financial</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
		<div class="col-md-3 order1" style="display: flex; align-items: center;">
			<div>
				<img alt="Find the Right Agent" class="img-fluid" src="{{asset('images/logos/HeritageTitle.png')}}" />
			</div>
		</div>
	</div>
</div>
@include('includes.agent_testimonials')
@endsection