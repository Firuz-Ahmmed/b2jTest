<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{route('search')}}">b2jTest</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center mt-2" id="navbarTogglerDemo02">
        <form class="d-flex" method="POST" action="{{route('search')}}">
            @csrf
          <input class="form-control mr-sm-2" name="searchInputValue" placeholder="Search" aria-label="Search" value="{{ $inputValue ?? '' }}">
          <button class="btn btn-outline-success ms-3" type="submit" name="search" >Search</button>
          <button class="btn btn-outline-success ms-3" type="submit" name="reset" >Reset</button>
        </form>
      </div>
    </div>
  </nav>
  