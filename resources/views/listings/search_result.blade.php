@extends('layouts.app')
@section('title', 'Taylor Properties | Real Estate in DC, MD, VA and PA')
@section('content')

<section id="searchListings">
	<div class="container">
		<div class="row">
			<form class="form-inline">
			  <input type="text" class="form-control mb-2 mr-sm-2" id="keyword" placeholder="Address, Neighborhood, or ZIP">

			  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
			    <option selected>Listing Type</option>
			    <option value="1">For Sale</option>
			    <option value="2">Pending</option>
			    <option value="3">Sold</option>
			  </select>

			  <div class="form-check mb-2 mr-sm-2">
			    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
			    <label class="form-check-label" for="inlineFormCheck">
			      Remember me
			    </label>
			  </div>

			  <button type="submit" class="btn btn-primary mb-2">Submit</button>
			</form>
		</div>
	</div>	
</section>


@endsection