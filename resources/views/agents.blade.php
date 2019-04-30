@extends('layouts.app')

@section('title', 'Find an Agent | Taylor Properties | Buying and Selling Real Estate in DC, MD, VA and PA')

@section('content')

<style type="text/css">
  .row.search {
    
  }
  .card-body{
    background: #215a96;
    color: #fff;
    text-align: center;
    padding: 1.25rem 0;
  }
  .card-body a {
    color: #fff;
  }

  .card-text .designation {
    color: #999;
    font-style: italic;
  }

  .card-img-top {
    height: 350px;
    object-fit: cover;
  }

  @media (min-width: 768px){
    .card-img-top {
      height: 150px;
    }
  }
</style>

<main role="main">
  <div class="album py-5">
    <div class="container">
      @include('flash::message')
      <div class="row search">
          <form action="/agents/search" method="GET" role="search">
              {{ csrf_field() }}
              <div class="input-group">
                  <input type="text" class="form-control" name="q"
                      placeholder="Search for an Agent"> 
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary">
                          <i class="fa fa-search"></i>
                      </button>
                  </span>
              </div>
          </form>
      </div>
    </div>
    <div class="container">
      <div class="row">
        @foreach ($agents as $agent)
        <div class="col-md-3 col-lg-2">
          <div class="agent card mb-3 box-shadow">
            <a href="/agents/{{$agent->agent_id}}">
            @if ($agent->photo_url == '' || $agent->photo_url == null)
            <img class="card-img-top" src="{{ asset('images/logos/TaylorProperties-1x1.jpg') }}" alt="{{$agent->fullname}}" style="padding: 1em;">
            @else
            <img class="card-img-top" src="{{ $agent->photo_url }}" alt="{{$agent->fullname}}">
            @endif
            </a>
            <div class="card-body">
              <p class="card-text"><a href="/find-agent/{{$agent->agent_id}}"><strong>{{$agent->fullname}}</strong></a></p>
              <p class="card-text phone">{{$agent->cell}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{ $agents->links() }}
    </div>
  </div>
</main>


@endsection