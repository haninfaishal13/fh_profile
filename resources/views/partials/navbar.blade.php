<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 sticky-sm-bottom sticky-md-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Navbar</a>
        <ul class="flex-row navbar-nav ms-auto align-items-center">
            <li class="nav-item me-2">
                <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item me-2">
                <a class="nav-link" aria-current="page" href="#">Portofolio</a>
            </li>
            <li class="nav-item me-2">
                <a class="nav-link" aria-current="page" href="#">Contact</a>
            </li>
            <li class="nav-item me-2">
                <a class="nav-link" href="#">Blog</a>
            </li>
        </ul>
        {{-- @if (!Auth::guest())
            <div class="dropdown">
                <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Faishal Hanin
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{asset('assets/image/default-user-image.jpeg')}}" class="img-circle img-icon img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <a href="{{route('backsite.profile')}}" class="btn btn-success btn-sm">
                            Dashboard
                        </a>
                        <button class="btn btn-danger btn-sm">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </button>
                    </div>
                </div>
            </div>
        @else
            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#auth-modal">
                <i class="fas fa-sign-in-alt"></i>Login
            </button>
        @endif --}}
    </div>
</nav>
