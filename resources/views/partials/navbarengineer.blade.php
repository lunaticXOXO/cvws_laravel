
<nav class="navbar navbar-expand-lg bg-body-dark">
  <div class="container">
    <a class="navbar-brand" href="/">CVWS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product Type</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/product_type">Show Product Type</a></li>
            <li><a class="dropdown-item" href="/add_producttype">Add Product Type</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Structure Product</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/strproduct">Show Structure Product By Product Type</a></li>
            <li><a class="dropdown-item" href="/add_strproduct">Add Structure Product</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Process
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Show Process By Structure Product</a></li>
            <li><a class="dropdown-item" href="#">Add Process By Structure Product</a></li>
          </ul>
        </li>
    </ul>
    

      <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ auth()->user()->name }}
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