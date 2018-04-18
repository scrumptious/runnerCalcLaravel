<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('app_homepage') }} ">Runne calc</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('app_homepage') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('app_calculator') }}">Calculator</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Pace table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('app_contact') }}">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('runner.index') }}">Share result</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <input class="form-control" type="text" placeholder="Search">
    </form>
  </div>
</nav>