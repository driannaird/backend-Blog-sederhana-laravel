<ul class="nav nav-tabs container">
    <li class="nav-item">
      <a class="nav-link {{ ($active === "home") ? 'active' : ''  }}" aria-current="page" href="/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($active === "posts") ? 'active' : ''  }}" href="/posts">Posts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($active === "category") ? 'active' : ''  }}" href="/categories">Category</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($active === "penulis") ? 'active' : ''  }}" href="/penulis">Penulis</a>
    </li>

    @auth
    <li class="nav-item dropdown ms-auto">
      <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Welcome, {{ auth()->user()->name }}
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a href="/dashboard" class="dropdown-item"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
          </form>
      </ul>
    </li>
    @else
    <li class="nav-item ms-auto">
      <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : ''  }}"><i class="bi bi-arrow-right-square"></i> Login</a>
    </li>
    @endauth

</ul>