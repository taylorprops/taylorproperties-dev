@extends('layouts.app')
@section('title', '100% Commission Real Estate Broker | Taylor Properties | Buying and Selling Real Estate in DC, MD, VA and PA')
@section('content')
<style>
#mainNav {
background-color: #fff;
}
.fixed-top {
position: inherit;
}
.container-fluid.header {
background-image: url({{ asset('images/careers2.jpg') }});
background-size: cover;
background-position: top center;
}
.header-text {
background-color: rgba(250,250,250,.9);
width: 70%;
min-width: 300px;
padding: 10px;
margin: 70px auto;
}
#pricing {
margin: 2em auto;
}
.pricing
.fixed-top {
position: inherit;
}
.header-text {
background-color: rgba(250,250,250,.9);
width: 70%;
min-width: 300px;
padding: 10px;
margin: 100px auto;
}
.col-md-12.pricing {
margin-bottom: 2em;
text-align: center;
}
article {
width:100%;
max-width:1000px;
margin:0 auto;
/*height:1000px; */
position:relative;
}
article ul {
display:flex;
top:0px;
z-index:10;
padding-bottom:14px;
padding-left: 0 !important;
}
article li {
list-style:none;
flex:1;
}
article li:last-child {
border-right:1px solid #DDD;
}
article button {
width:100%;
border: 1px solid #DDD;
border-right:0;
border-top:0;
padding: 10px;
background:#FFF;
font-size:14px;
font-weight:bold;
height:60px;
color:#999
}
article li.active button {
background:#F5F5F5;
color:#000;
}
table { border-collapse:collapse; table-layout:fixed; width:100%; }
th { background:#F5F5F5; display:none; }
td, th {
height:53px
}
td,th { border:1px solid #DDD; padding:10px; empty-cells:show; }
td,th {
text-align:left;
}
td+td, th+th {
text-align:center;
display:none;
}
td.default {
display:table-cell;
}
.bg-blue {
border-top:3px solid #215a96;
}
.bg-orange {
border-top:3px solid #ff8c42;
}
.sep {
background:#F5F5F5;
font-weight:bold;
}
.txt-l { font-size:28px; font-weight:bold; }
.txt-top { position:relative; top:-9px; left:-2px; }
.tick { font-size:18px; color:#215a96; }
.hide {
border:0;
background:none;
}
.disclaimer {
margin-top: 4em;
}
.row.testimonials {
margin: 2em auto;
background-color: #215a96;
}

.commission-calc {
  background: #215a96;
}

.teams {
  background: #a3cef1;
}

@media (max-width: 768px){
.header-text{
width: 95%;
}
}
@media (min-width: 640px) {
article ul {
display:none;
}
td,th {
display:table-cell !important;
}
td,th {
width: 330px;

}
td+td, th+th {
width: auto;
}
}
</style>
<div class="container-fluid header">
  <div class="row">
    <div class="header-text">
      <h3>Taylor Properties Careers</h3>
      <p>Behind every great company, is great people. That is why, as an agent of Taylor Properties, you can count on a broker that will tap into your strengths, offer the training you need and give you all the tools to advance your career. We believe most people want more than a job in real estate; they want a rewarding career. Real estate offers you the flexibility to run your own business as you see fit with all the support you need from your broker, all while offering you an industry leading <strong>100% Commission</strong>.</p>
      <p>Our goal is to be the mid-Atlantic's premier real estate services company. At Taylor Properties, we promote a culture of caring. We’ve grown extremely quickly over the past 10 years and we are always looking to fill out our team with exceptional talent. We strive to uplift others while raising the bar on what we’re capable of achieving ourselves. In helping our clients and our community through what we do every day, that is what makes Taylor Properties an admired company and a great place to work.</p>
    </div>
  </div>
</div>
<section id="pricing">
  <div class="container">
    <div class="row">
      <div class="col-md-12 pricing">
        <h1 style="color: #215a96;">100% Commission or 85% Commission Plans.</h1>
        <h3 style="color: #666;">The choice is yours, switch anytime.</h3>
      </div>
    </div>
    <div class="row">
      <!-- DIRTY Responsive pricing table HTML -->
      <article>
        <ul>
          <li class="bg-blue active">
            <button>100% Commission</button>
          </li>
          <li class="bg-orange">
            <button>85% Commisson</button>
          </li>
        </ul>
        <table>
          <thead>
            <tr>
              <th class="hide"></th>
              <th class="bg-blue default">100% Commission</th>
              <th class="bg-orange">85% Commisson</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Price</td>
              <td class="default"><span class="txt-top">&dollar;</span><span class="txt-l">49</span>/mo</td>
              <td><span class="txt-top">&dollar;</span><span class="txt-l">0</span>/mo</td>
            </tr>
            <tr>
              <td colspan="3" class="sep">No Hidden Fees</td>
            </tr>
            <tr>
              <td>Full Broker Service</td>
              <td class="default"><span class="tick">&#10004;</span></td>
              <td><span class="tick">&#10004;</span></td>
            </tr>
            <tr>
              <td>E&O Insurance</td>
              <td class="default">Included</td>
              <td>Included</td>
            </tr>
            <tr>
              <td>Desk Fees</td>
              <td class="default">None</td>
              <td>None</td>
            </tr>
            <tr>
              <td>Free Copies, Scanning and Printing</td>
              <td class="default"><span class="tick">&#10004;</span></td>
              <td><span class="tick">&#10004;</span></td>
            </tr>
            <tr>
              <td>Quotas</td>
              <td class="default">None</td>
              <td>None</td>
            </tr>
            <tr>
              <td>In-House Lender</td>
              <td class="default"><span class="tick">&#10004;</span></td>
              <td><span class="tick">&#10004;</span></td>
            </tr>
            <tr>
              <td>In-House Title</td>
              <td class="default"><span class="tick">&#10004;</span></td>
              <td><span class="tick">&#10004;</span></td>
            </tr>
            <tr>
              <td>FREE Business Cards</td>
              <td class="default"><span class="tick">&#10004;</span></td>
              <td><span class="tick">&#10004;</span></td>
            </tr>
            <tr>
              <td>Training and Mentoring Programs</td>
              <td class="default"><span class="tick">&#10004;</span></td>
              <td><span class="tick">&#10004;</span></td>
            </tr>
            <tr>
              <td>Conference Room Usage</td>
              <td class="default"><span class="tick">&#10004;</span></td>
              <td><span class="tick">&#10004;</span></td>
            </tr>
            <tr>
              <td>Same Day Commissions Payout</td>
              <td class="default"><span class="tick">&#10004;</span></td>
              <td><span class="tick">&#10004;</span></td>
            </tr>
            <tr>
              <td>Skyslope Document Management</td>
              <td class="default">Free</td>
              <td>Free</td>
            </tr>
          </tbody>
        </table>
      </article>
    </div>
  </div>
</section>

<section class="commission-calc">
  <div class="container">
    <div class="row" style="padding: 3em; text-align: center;">
      <div class="col-md-12">
        <h2 style="color: #fff; text-align: center;margin-bottom: 1em;">Numbers speak louder than words</h2>
        <h3 style="color: #fff;">How does your commission compare? Calculate how much more you could make with Taylor Properties.</h3>
        <a class="btn btn-secondary" href="/100-percent-commission-calculator" style="font-size: 18px; font-weight: bold;">Calculate My Commission</a>
      </div>
    </div>
  </div>
</section>

@include('includes.agent_testimonials')

<section class="teams">
  <div class="container">
    <div class="row" style="padding: 3em;">
      <div class="col-md-12">
        <h2 style="text-align: center;margin-bottom: 1em;">Taylor Properties Teams</h2>
        <h3 style="text-align: center;margin-bottom: 1em;">Our Team Plan is designed to help you build a successful team and incentivizes high volume selling.</h3>
      </div>
      <div class="col-md-6" style="background: #e7ecef;padding: 2em;margin: 1em 0;">
        <h4>Why join a team?</h4>
        <ul>
          <li>More leads, bigger pipeline and lead coverage</li>
          <li>Extra training and support</li>
          <li>Stability of income</li>
          <li>Lower business expenses</li>
          <li>Great for newer agents</li>
        </ul>
      </div>
      <div class="col-md-6" style="background: #e7ecef;padding: 2em;margin: 1em 0;">
        <h4>Start a team today</h4>
        <ul>
          <li>Team Leader determines commission splits</li>
          <li>Full ownership over your team brand</li>
          <li>No Quotas</li>
          <li>Full Broker Support</li>
          <li>Same Incentives as Individual Plans</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
// DIRTY Responsive pricing table JS
$( "ul" ).on( "click", "li", function() {
var pos = $(this).index()+2;
$("tr").find('td:not(:eq(0))').hide();
$('td:nth-child('+pos+')').css('display','table-cell');
$("tr").find('th:not(:eq(0))').hide();
$('li').removeClass('active');
$(this).addClass('active');
});
// Initialize the media query
var mediaQuery = window.matchMedia('(min-width: 640px)');

// Add a listen event
mediaQuery.addListener(doSomething);

// Function to do something with the media query
function doSomething(mediaQuery) {
if (mediaQuery.matches) {
$('.sep').attr('colspan',3);
} else {
$('.sep').attr('colspan',2);
}
}

// On load
doSomething(mediaQuery);
</script>
@endsection