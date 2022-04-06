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
    <li class="nav-item ms-auto">
      <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : ''  }}"><i class="bi bi-arrow-right-square"></i> Login</a>
    </li>
</ul>