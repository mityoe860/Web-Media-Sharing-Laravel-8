<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Ghoulnime</a>

      <form action="/logout" method="post">
          @csrf

          <button type="submit" class="btn btn-dark">Logout <span data-feather="log-out"></span></button>
      </form>

  </header>
