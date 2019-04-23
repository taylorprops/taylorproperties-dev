@extends('layouts.app')

@section('title', '$listing_address $listing_city, $listing_state $listing_zip | MLS #$mls_id | Taylor Properties')

@section('content')
<style type="text/css">
  .general-info, .address {
    text-align: center;
  }
  .address {
    padding: 2em;
  }
  .listing-bold {
    font-weight: bold;
    font-size: 18px;
  }
  /*.info-block {
    display: inline-flex;
    text-align: center;
  }
  .info-block div {
    margin: 2em;
  }*/
  .small {
    font-size: 80%;
  }

  .modal-dialog {
    max-width: 100%;
  }
  .modal-content {
    background: transparent;
  }
  img.d-block.w-100.big {
    height: 450px;
    object-fit: cover;
  }

  @media (max-width: 767px) {
    .info-block {
      display: block;
      text-align: center;
    }
  }
</style>
<div class="container">
  <div class="row photos">
    <!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails col-md-8" data-ride="carousel">
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <a href="#photoModal" data-toggle="modal" data-target="#photoModal"><img class="d-block w-100 big" src="{{ $listing->ListPictureURL }}" alt="First slide"></a>
        </div>
        <div class="carousel-item">
          <a href="#photoModal" data-toggle="modal" data-target="#photoModal"><img class="d-block w-100 big" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg"
            alt="Second slide"></a>
        </div>
        <div class="carousel-item">
          <a href="#photoModal" data-toggle="modal" data-target="#photoModal"><img class="d-block w-100 big" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg"
            alt="Third slide"></a>
        </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100"
            src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg" class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100"
            src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg" class="img-fluid">
        </li>
        <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100"
            src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg" class="img-fluid"></li>
      </ol>
    </div>
    <!--/.Carousel Wrapper-->
    <div class="col-md-4">
      <p><span class="listing-bold">{{ ucwords(strtolower($listing->FullStreetAddress)) }}</span><br/>
      {{ ucwords(strtolower($listing->City)) }}, {{ $listing->StateOrProvince }} {{ $listing->PostalCode }}</p>
      <div class="info-block">
        <div class="price">
          <span class="listing-bold">${{ number_format($listing->ListPrice) }}</span><br><span class="small">List Price</span>
        </div>
        <div class="bed">
          <span class="listing-bold">{{ $listing->BedroomsTotal }}</span><br><span class="small">Beds</span>
        </div> 
        <div class="baths">
          <span class="listing-bold">{{ $listing->BathroomsTotal }}</span><br><span class="small">Baths</span>
        </div>
        <div class="baths">
          <span class="listing-bold">X,XXX</span><br><span class="small">Sqft</span><br/>
        </div>
        <div class="listingagent">
          <p><strong>Listing Agent</strong><br>
          <a href="/agents/{{$agents[0]->agent_id}}" target="_blank">{{ $agents[0]->fullname }}</a><br></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row description">
    <div class="cold-md-12"> 
      <p>{{$listing->PublicRemarks}}</p>
    </div>
  </div>
  <div class="row details">
    <div class="col-md-6">
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">HOA Fees</th>
            <td>XXX/month</td>

          </tr>
          <tr>
            <th scope="row">Community</th>
            <td>{{$listing->SubdivisionName}}</td>
          </tr>
          <tr>
            <th scope="row">MLS#</th>
            <td>{{$listing->ListingId}}</td>

          </tr>
          <tr>
            <th scope="row">Lot size</th>
            <td>{{$listing->BedroomsHalf}}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">Style</th>
            <td>{{$listing->BedroomsTotal}}</td>

          </tr>
          <tr>
            <th scope="row">County</th>
            <td>{{ucwords(strtolower($listing->County))}}</td>
          </tr>
          <tr>
            <th scope="row">Built</th>
            <td>XXXX</td>

          </tr>
          <tr>
            <th scope="row">Price/sqft</th>
            <td>$XXX</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>  


<!-- Photos Modal -->
<div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!--div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div-->
      <div class="modal-body">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ $listing->ListPictureURL }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection