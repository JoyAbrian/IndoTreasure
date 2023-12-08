@guest
<nav class="navbar sticky-top" style="background-color: rgb(170, 170, 170); padding: 4px 16px; line-height: 0.5;">
    <div class="container-fluid d-flex justify-content-between">
        <div class="d-flex align-items-start">
            <a class="navbar-brand" style="font-size: 80%;" href="https://www.youtube.com/watch?v=xvFZjo5PgG0&ab_channel=Duran">Download App</a>
        </div>
        <div class="d-flex align-items-end ml-auto">
            <a class="navbar-brand" style="font-size: 80%;" href="https://chat.openai.com/share/80b6d05e-7b77-40c0-a46f-b8f7245d5e5f">Tentang IndoTreasure</a>
            <a class="navbar-brand" style="font-size: 80%;" href="/sellerRegister">Mulai Berjualan</a>
        </div>
    </div>
</nav>
@endguest

<nav class="navbar sticky-top" style="background-color: #004080">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/word.png') }}" alt="Logo" width="250"
                class="d-inline-block align-text-top">
        </a>
        <div class="d-flex">
            <button class="btn category-button">Kategori</button>
            <div class="input-group has-validation ms-3">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
                <div class="form-floating">
                    <input type="text" class="form-control custom-search-input" id="search" name="search"
                        placeholder="{{ $search }}" required>
                    <label for="floatingInputGroup2">{{ $search }}</label>
                </div>
            </div>
        </div>
        @auth
        <li class="nav-item">
            <a class="nav-link" href="/wishlist"><i class="bi bi-heart"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-cart"></i></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i> My Profile</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href=""><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Log Out</button>
                    </form>
                </li>
            </ul>
        </li>
        @else
        <div class="buttons-container">
            <a class="btn login-button" href="/login">Login</a>
            <a class="btn register-button" href="/register">Register</a>
        </div>
        @endauth
    </div>
</nav>
