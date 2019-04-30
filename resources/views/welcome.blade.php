@extends('layouts.app')

@section('title', 'Taylor Properties | Buying and Selling Real Estate in DC, MD, VA and PA')

@section('content')
<style type="text/css">
    /* Background image */
    .jumbotron {
      text-align: center;
      padding-top: 10rem;
      padding-bottom: 10rem;
    }

    .lead {
      font-size: 1.5rem !important;
    }

    .bg-cover {
      background-size: cover;
      color: white;
      background-position: center center;
      position: relative;
      z-index: -2;
      background-image: url('/images/taylorprops-hero.jpeg');
    }

    .overlay {
      background-color: #000;
      opacity: 0.5;
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      z-index: -1;
    }
    .intro-text p {
        text-align: center;
        width: 70%;
        margin: 0 auto;
        font-size: 18px;
    }

    p.intro-close {
        color: #215a96;
        font-size: 22px;
        font-family: 'Merriweather', serif;
        font-weight: 700;
    }

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

    .imagebox:hover img {
      opacity: 0.7;
    }

    .imagebox:hover .imagebox-desc {
      padding: 10% 0;
    }


    @media (min-width: 576px) {
        .jumbotron {
            padding: 12rem 2rem !important;
        }
    }

    @media (max-width: 410px) {
        .intro-text p {
            width: 100%;
        }
    }
</style>
<!-- see https://www.youtube.com/watch?v=bSG2YMqJJys&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-&index=4 @ 3:40 to pass value in to blade -->
<div class="jumbotron jumbotron-fluid bg-cover">
  <div class="overlay"></div>
  <div class="container">
    <h1 class="display-4" style="font-weight: 700;color:#a3cef1;">testing</h1>
    <p class="lead">Taylor Properties is the largest independent real estate brokerage in Maryland with over 800 local agents.</p>
  </div>
</div>

<main role="main">
  <div class="container">
    <div class="row-fluid">
        <div class="intro-text">
            <p>They say "home is where the heart is" and we know that finding the perfect home can be a daunting task. You need an experienced partner who knows the neighborhoods, the market and the process. At Taylor Properties, we understand that we are not only selling or buying your home. It is much more than that.<p>
            <p class="intro-close">Taylor Properties. Love your home.</p>
        </div>
      </div>
  </div>


  <!--div class="album py-5">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="//via.placeholder.com/140x140" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><a href="#">Find a Home</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="//via.placeholder.com/140x140" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><a href="#">Sell My Home</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="//via.placeholder.com/140x140" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><a href="/agents">Find an Agent</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div-->

  <div class="container" style="margin: 3em auto;">
    <div class="row">
      <div class="col-sm-4">
        <div class="imagebox">
          <a href="/search-homes">
            <img src="{{ asset('images/find-home.jpg')}}" class="category-banner img-responsive">
            <span class="imagebox-desc">Search Homes</span>
          </a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="imagebox">
          <a href="/agents">
            <img src="{{ asset('images/find-agent.jpg')}}" class="category-banner img-responsive">
            <span class="imagebox-desc">Find an Agent</span>
          </a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="imagebox">
          <a href="/careers">
            <img src="{{ asset('images/careers.jpg')}}" class="category-banner img-responsive">
            <span class="imagebox-desc">Careers</span>
          </a>
        </div>
      </div>
    </div>
  </div>

</main>


@endsection