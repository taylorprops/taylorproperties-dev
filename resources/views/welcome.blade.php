@extends('layouts.app')

@section('title', 'Taylor Properties | Buying and Selling Real Estate in DC, MD, VA and PA')

<style type="text/css">
    /* Background image */
    .jumbotron {
      text-align: center;
      padding-top: 10rem;
      padding-bottom: 10rem;
      text-shadow: 2px 2px #000;
    }

    .lead span {
      color: orange;
      font-weight: bold;
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

@section('content')
<!-- see https://www.youtube.com/watch?v=bSG2YMqJJys&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-&index=4 @ 3:40 to pass value in to blade -->
<div class="jumbotron jumbotron-fluid bg-cover">
  <div class="overlay"></div>
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<main role="main">
  <div class="container">
    <div class="row-fluid">
        <div class="intro-text">
            <p>They say "home is where the heart is" and we understand that a finding the right home at the right price can be a daunting task. You need an experienced partner who knows the neighborhoods, the market and the process. At Taylor Properties, we understand that we are not only selling or buying your home. It is much more than that.<p>
            <p class="intro-close">Taylor Properties. Love your home.</p>
        </div>
      </div>
  </div>


  <div class="album py-5">
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
  </div>

</main>


@endsection