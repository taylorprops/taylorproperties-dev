@extends('layouts.app')
@section('title', $agent->fullname.' | Taylor Properties | Buying and Selling Real Estate in DC, MD, VA and PA')
@section('content')
<style type="text/css">
.imagebox {
background: black;
padding: 0px;
position: relative;
width: 100%;
}
.imagebox img {
opacity: 1;
transition: 0.5s opacity;
width: 100%;
}
.imagebox .imagebox-desc {
background-color: rgba(33, 90, 150, 0.1);
bottom: 0px;
color: #fff;
font-size: 1.2em;
left: 0px;
padding: 4px 10px;
position: absolute;
transition: 0.5s padding;
width: 100%;
font-weight: bold;
text-shadow: 0 0 3px rgba(0,0,0,.9);
}
.imagebox:hover img {
opacity: 0.7;
}
.imagebox:hover .imagebox-desc {
padding: 4% 2%;
}
.category-banner {
height: 300px;
object-fit: cover;
}
</style>
<main role="main">
  <div class="container">
    @include('flash::message')
    <div class="row" style="margin-top: 4em;">
      <div class="col-md-4">
        <div class="profile">
          @if ($agent->photo_url == '' || $agent->photo_url == null)
          <img class="profile-img-top" src="{{ asset('images/logos/TaylorProperties-1x1.jpg') }}" alt="{{$agent->fullname}}" style="width: 100%;padding: 1em;">
          @else
          <img class="profile-img-top" src="{{ $agent->photo_url }}" alt="{{$agent->fullname}}" width="100%">
          @endif
        </div>
        <div class="contact-info">
          <h3>Contact</h3>
          @if ($agent->website == '' || $agent->website == null)
          @else
          <p><a href="{{$agent->website}}" target="_blank">{{$agent->website}}</a></p>
          @endif
          <p class="profile-text phone">{{$agent->cell}}</p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#emailModal" style="margin-bottom: 1rem;">Email</button>
        </div>
      </div>
      <div class="col-md-8">
        <div class="profile-body">
          <div class="name">
            <h1><strong>{{$agent->fullname}}</strong></h1>
            <h5 class="profile-text designation">{!! $agent->designations !!}</h5>
          </div>
          <div class="about-me">
            @if ($agent->bio == '' || $agent->bio == null)
            @else
            {!! $agent->bio !!}
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="margin: 3em auto;">
    <div class="row">
      <div class="col-md-12">
        <h3>My Listings</h3>
      </div>
    </div>
    <div class="row">
      @foreach ($listings as $listing)
      <div class="col-sm-4">
        <div class="imagebox">
          <a href="/homes-for-sale/{{ strval($listing->ListingId) }}">
            <img src="{{ $listing->ListPictureURL}}" class="category-banner img-responsive">
            <span class="imagebox-desc">${{ number_format($listing->ListPrice) }} <small>{{ $listing->BedroomsTotal }} bds {{ $listing->BathroomsTotal }} ba X,XXX sqft</small><br>
            <small>{{ ucwords(strtolower($listing->FullStreetAddress)) }}, {{ ucwords(strtolower($listing->City)) }}, {{ $listing->StateOrProvince }}</small></span>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Email {{$agent->firstname}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {!! Form::open(['url' => '/agents/'.$agent->agent_id.'/email','method' => 'POST','id'=>'contactForm', 'name'=>'sentMessage']) !!}
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                {{Form::text('name','',['id'=>'name', 'class'=>'form-control','placeholder'=>'Your Name *','required'=>'required','data-validation-required-message'=>'Please enter your name.'])}}
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                {{Form::email('email','',['id'=>'email', 'class'=>'form-control','placeholder'=>'Your Email *','required'=>'required','data-validation-required-message'=>'Please enter your name.'])}}
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                {{Form::tel('phone','',['id'=>'phone', 'class'=>'form-control','placeholder'=>'Your Phone *','required'=>'required','data-validation-required-message'=>'Please enter your phone number.'])}}
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                {{Form::textarea('body','',['id'=>'body', 'class'=>'form-control','placeholder'=>'Your Message *','required'=>'required','data-validation-required-message'=>'Please enter your message.'])}}
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-lg-12 text-center">
            <div id="success"></div>
            {{Form::submit('Send Message',['id'=>'sendMessageButton','class'=>'btn btn-primary btn-xl text-uppercase'])}}
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</main>
@endsection