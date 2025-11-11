<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EduFun</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        {{-- Home --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('article.home') ? 'active' : '' }}"
             href="{{ route('article.home') }}">Home</a>
        </li>

        {{-- Category Dropdown --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->routeIs('category.*') ? 'active' : '' }}" href="#"
             id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item {{ request()->routeIs('category.info') && request()->route('id') == 1 ? 'active' : '' }}"
                   href="{{ route('category.info', 1) }}">Data Science</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('category.info') && request()->route('id') == 2 ? 'active' : '' }}"
                   href="{{ route('category.info', 2) }}">Network Security</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('category.info') && request()->route('id') == 3 ? 'active' : '' }}"
                   href="{{ route('category.info', 3) }}">Interactive Multimedia</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('category.info') && request()->route('id') == 4 ? 'active' : '' }}"
                   href="{{ route('category.info', 4) }}">Software Engineering</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        {{-- Writers --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('writer.*') ? 'active' : '' }}"
             href="{{ route('writer.info') }}">Writers</a>
        </li>

        {{-- About --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('about.info') ? 'active' : '' }}"
             href="{{ route('about.info') }}">About</a>
        </li>

        {{-- Popular --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('popular.*') ? 'active' : '' }}" href="#">Popular</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
