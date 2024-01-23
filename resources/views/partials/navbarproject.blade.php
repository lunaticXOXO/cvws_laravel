
<nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container">
    <a class="navbar-brand text-white" href="/">CVWS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Customer</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/customer">Show Customer</a></li>
            <li><a class="dropdown-item" href="/search_customer">Search Customer</a></li>
            <li><a class="dropdown-item" href="/add_customer_view">Add Customer</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Project</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/project">Show Project</a></li>
            <li><a class="dropdown-item" href="/project_customer">Show Project By Customer</a></li>
            <li><a class="dropdown-item" href="/add_projectview">Add Project</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Detail Project
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Show Detail Project</a></li>
            <li><a class="dropdown-item" href="#">Show Detail Project By Customer</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle= "dropdown" aria-expanded="false">Product</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Show Product</a></li>    
          </ul>
        </li>
    </ul>
    

      <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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