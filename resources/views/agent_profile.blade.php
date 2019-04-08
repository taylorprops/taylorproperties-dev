@extends('layouts.app')

@section('title', 'Find an Agent | Taylor Properties | Buying and Selling Real Estate in DC, MD, VA and PA')

@section('content')

<main role="main">
  <div class="container">
    @include('flash::message')
    <div class="row" style="margin: 4em 0;">
      <div class="col-md-4">
        <div class="profile">
          @if ($agent->photo_url == '' || $agent->photo_url == null)
          <img class="profile-img-top" src="{{ asset('images/logos/TaylorProperties-1x1.jpg') }}" alt="{{$agent->fullname}}" style="width: 100%;padding: 1em;">
          @else
          <img class="profile-img-top" src="{{ $agent->photo_url }}" alt="{{$agent->fullname}}" width="100%">
          @endif
        </div>
      </div>
      <div class="col-md-8">
        <div class="profile-body">
          <div class="name">
            <h1><strong>{{$agent->fullname}}</strong></h1>
            <p class="profile-text designation">{!! $agent->designations !!}</p>
          </div>
          <div class="contact-info">
            <h3>Contact</h3>
            <p class="profile-text phone">{{$agent->cell}}</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#emailModal" style="margin-bottom: 1rem;">Email</button>
          </div>
          <div class="about-me">
            @if ($agent->bio == '' || $agent->bio == null)
            @else
            <h3>About Me</h3>
            {!! $agent->bio !!}
            @endif
          </div>
        </div>
      </div>
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