<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100 sticky-top">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('service')}}">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('users')}}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('teachers')}}">Teachers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('product')}}">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('teams')}}">Our Teams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
        </li>
      </ul>
      <div class="nav navbar-nav">
        <div class="btn-nav">
          @if(session('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarScrollingDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              {{session('user.0')}} - <span class="text-uppercase">{{session('user.1')}}</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

              {!!
              session('user.1') == "Admin" ? '<li><a class="dropdown-item logout text-center"
                  href="dashboard">Dashboard</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>' : ''
              !!}


              <li><a class="dropdown-item logout text-center" href="{{route('logout')}}">Logout</a></li>
            </ul>
          </li>
          @else
          <a class="btn btn-primary btn-small navbar-btn " href="{{route('login')}}">Login</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</nav>