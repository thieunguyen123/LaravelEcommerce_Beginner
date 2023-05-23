<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark gradient-custom">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="{{url('/')}}">E-shop</a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars text-light"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
          <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link active" aria-current="page" href="#!">
              <div>
                <i class="fas fa-home fa-lg mb-1"></i>
              </div>
              Home
            </a>
          </li>
          <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link" href="#!">
              <div>
                <i class="far fa-envelope fa-lg mb-1"></i>
                <span class="badge rounded-pill badge-notification bg-dark">11</span>
              </div>
              Link
            </a>
          </li>
          <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link disabled" aria-disabled="true" href="#!">
              <div>
                <i class="far fa-envelope fa-lg mb-1"></i>
                <span class="badge rounded-pill badge-notification bg-dark">11</span>
              </div>
              Disabled
            </a>
          </li>
          <li class="nav-item dropdown text-center mx-2 mx-lg-1">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
              aria-expanded="false">
              <div>
                <i class="far fa-envelope fa-lg mb-1"></i>
                <span class="badge rounded-pill badge-notification bg-dark">11</span>
              </div>
              Dropdown
            </a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Left links -->

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
          <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link" href="#!">
              <div>
                <i class="fas fa-bell fa-lg mb-1"></i>
                <span class="badge rounded-pill badge-notification bg-dark">11</span>
              </div>
              Messages
            </a>
          </li>
          <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link" href="#!">
              <div>
                <i class="fas fa-globe-americas fa-lg mb-1"></i>
                <span class="badge rounded-pill badge-notification bg-dark">11</span>
              </div>
              News
            </a>
          </li>
        </ul>
        <!-- Right links -->

        <!-- Search form -->
        <form class="d-flex input-group w-auto ms-lg-3 my-3 my-lg-0">
          <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-white" type="button" data-mdb-ripple-color="dark">
            Search
          </button>
        </form>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
  <link href="{{asset('frontend/css/custom.css')}} " rel="stylesheet">
