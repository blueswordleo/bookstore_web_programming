<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" href="/">Giant Book Supplier</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/">Home</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              @foreach ($categories as $c)
                  <li><a class="dropdown-item" href="{{ url('Category', ['id' => $c->id]) }}">{{ $c->name }}<a></li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/Publisher">publisher</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/Contact">contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
