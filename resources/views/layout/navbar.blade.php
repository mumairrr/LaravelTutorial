<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Parcel Company</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="nav navbar-nav">
        <li class="nav-item mx-2">
          <a class="nav-link" aria-current="page" href=" {{ url('./') }} ">Home</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{ url('./Users') }}">Users</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{ url('./Parcels') }}">Parcels</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{ url('./Contact') }}">Contact</a>
        </li>
      </ul>
    </div>
      <span><a href="{{ url('./CreateUsers') }}" class="btn btn-primary justify-content-end collapse navbar-collapse " id="navbarSupportedContent">Create User</a> </span>
  </div>
</nav>