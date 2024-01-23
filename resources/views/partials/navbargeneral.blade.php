
<nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container">
    <a class="navbar-brand" href="/">CVWS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Country</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/country">Show Country</a></li>
            <li><a class="dropdown-item" href="/add_country">Add Country</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">City</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/project">Show City</a></li>
            <li><a class="dropdown-item" href="/add_project">Add City</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Operator
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/operator">Show Operator</a></li>
            <li><a class="dropdown-item" href="/add_operator">Add New Operator</a></li>
            <li><a class="dropdown-item" href="/uuid_operator">Add New UUID Operator</a></li>
          </ul>
        </li>
    </ul>
    

      <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/logout"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                                  
              <form id="logout-form" action="/logout" method="GET" class="d-none">
                    @csrf
              </form>
              </div>
        </li>
      </ul>
      <li>
    </li>
    </div>
  </div>
</nav>