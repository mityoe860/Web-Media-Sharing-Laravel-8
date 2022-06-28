<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Ghoulnime</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('animelist') ? 'active' : '' }}" href="/animelist">Anime List</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Genre
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach($listgenre as $list)
              <li><a class="dropdown-item" href="/animelist?genre={{ $list->slug }}">{{ $list->name }}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('about') ? 'active' : '' }}" href="/about">About</a>
          </li>
        </ul>

      </div>
      <div class="col-md-4">
          <form action="/animelist">
      <div class="input-group">
        <input type="text" class="form-control" name="search" value="{{ request('search') }}" placeholder="Search...">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
      </div>
          </form>
    </div>
    </div>


  </nav>
