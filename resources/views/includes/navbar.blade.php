<style type="text/css">
	.navbar {
		border-bottom: 5px solid #215a96;
	}
	body {
		background-color: #ffffff !important;
	}

	a.nav-link {
	    font-size: 1rem;
	    /* color: #215a96; */
	}
	.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
	    color: white;
	}
	li.nav-item:hover {
	    background-color: #215a96;
	}
	li.nav-item {
	    padding: 0 10px;
	}
	.navbar-light .navbar-nav .nav-link {
	    color: #2d3047;
	}
</style>
<nav class="navbar navbar-expand-lg navbar-light static-top">
  <div class="container">
    <a class="navbar-brand" href="/">
          <img src="{{ asset('images/logos/TaylorProperties-horizontal-fullcolor.png') }}" alt="" style="max-width: 175px;">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <!--li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li-->
        <li class="nav-item">
          <a class="nav-link" href="#">Buying</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Selling</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Find an Agent</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/about" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="/about">About Us</a>
              <a class="dropdown-item" href="#">Team</a>
              <a class="dropdown-item" href="#">Offices</a>
              <a class="dropdown-item" href="#">Philanthropy</a>
              <a class="dropdown-item" href="#">Partners</a>
              <a class="dropdown-item" href="#">Careers</a>
            </div>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="tel:8005900925"><i class="fas fa-phone"></i> 800-590-0925</a>
        </li>
      </ul>
    </div>
  </div>
</nav>