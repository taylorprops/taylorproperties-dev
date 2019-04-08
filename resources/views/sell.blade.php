@extends('layouts.app')
@section('title', 'Selling Your Home | Taylor Properties | Buying and Selling Real Estate in DC, MD, VA and PA')
@section('content')
<style type="text/css">
.container-fluid.header {
background-image: url({{ asset('images/keys.jpg') }});
background-size: cover;
background-position: center;
}
.header-text {
background-color: rgba(250,250,250,.9);
width: 70%;
min-width: 300px;
padding: 10px;
margin: 70px auto;
}
#contact {
background: #e7ecef;
padding: 4em 0;
margin-top: 3em;
}
.img-fluid {
height: 300px;
object-fit: cover;
width: 100%;
}
.section.mt-5 .container .row {
margin-bottom: 50px;
}

@media (max-width: 768px){
  .order1 {
    order: 1;
  }
  .order2 {
    order: 2;
  }
}
</style>
<div class="container-fluid header">
  <div class="row">
    <div class="header-text">
      <h1>Sell Your Home</h1>
      <p>Selling your home will likely be one of the biggest transactions of your life. You can try to do it alone to save money, but hiring an agent has many advantages. Agents can get broader exposure for your property, help you negotiate a better deal, dedicate more time to your sale, and help keep your emotions from sabotaging it.</p>
      <p>Real estate is an intensely-localized commodity. Taylor Properties is the largest independent real estate brokerage in Maryland and continues to grow with new agents joining from the D.C. Metro area each day. Our agents Let us take the stress of selling your home off your shoulders.</p>
    </div>
  </div>
</div>
<section class="section mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div>
          <img alt="Know your comps" class="img-fluid" src="{{ asset('images/neighborhood.jpg') }}" />
        </div>
      </div>
      <div class="col-md-6 col-lg-6 ml-auto d-flex align-items-center mt-4 mt-md-0">
        <div>
          <h2>Know your comps</h2>
          <p class="">"Comps" or Comparables, are homes of similar size, condition, age, and style that recently sold in a certain neighborhood. Evaluating comparable homes and their prices can help determine a fair market value for a home. </p>
          <p>Our real estate agents can help recommend home improvement options to have your new listing be more competitve and attractive to potential buyers. When you are ready to list, your agent might suggest the best time to put your home on the market, price, or even contractors to help with painting, staging, and other ways to get your home sold at the best price.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-6 ml-auto d-flex align-items-center mt-4 mt-md-0 order2">
        <div>
          <h2>Marketing</h2>
          <p class="">Getting your home ready to sell in only half the battle. Getting your home in-front of many qualified buyers as possible is the other half. By using an agent's existing network, you will have access to professional photographers, videographers, listing websites, databases and personal contacts to get your home advertised to ensure the best exposure.</p>
        </div>
      </div>
      <div class="col-md-6 order1">
        <div>
          <img alt="Marketing" class="img-fluid" src="{{ asset('images/curb-appeal.jpg') }}" />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div>
          <img alt="Prioritize what's important" class="img-fluid" src="{{ asset('images/clean-house-interior.jpg') }}" />
        </div>
      </div>
      <div class="col-md-6 col-lg-6 ml-auto d-flex align-items-center mt-4 mt-md-0">
        <div>
          <h2>Prioritize what's important</h2>
          <p class="">There are many simultaneous moving parts during the selling of your home. From staging and cleaning your house, to listing, marketing and scheduling open houses, you likely can't do it all. And if you try to, will most likely be overwhelmed with everything going on. Working with an agent let's you concentrate on the things that are important and in your control such as cleaning your house and searching for your next home.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-6 ml-auto d-flex align-items-center mt-4 mt-md-0 order2">
        <div>
          <h2>Get the best deal</h2>
          <p class="">Our in-house title and financial consultants can give you the best deal on any fees associated with the sale of your home (and the purchase of your next). Utilize our contacts to save you time, money and stress.</p>
        </div>
      </div>
      <div class="col-md-6 order1">
        <div>
          <img alt="Shop and Make an Offer" class="img-fluid" src="{{ asset('images/happy-family-computer.jpg') }}" />
        </div>
      </div>
    </div>
  </div>
</section>
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        @include('flash::message')
        <h2 class="section-heading text-uppercase">Questions?</h2>
        <h3 class="section-subheading text-muted">We are here to help, send us a message today and ask us anything!</h3>
      </div>
    </div>
    @include('includes.contactform')
  </div>
</section>
@endsection