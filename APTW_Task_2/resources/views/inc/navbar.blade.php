<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100 sticky-top">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">APTW Task 2</a>
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
          <a class="btn btn-primary btn-small navbar-btn" href="{{route('login')}}">Login</a>
        </div>
      </div>
    </div>
  </div>
</nav>