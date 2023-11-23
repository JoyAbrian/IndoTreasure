<nav class="navbar sticky-top" style="background-color: rgb(170, 170, 170); padding: 4px 16px; line-height: 0.5;">
    <div class="container-fluid d-flex justify-content-between">
        <div class="d-flex align-items-start">
            <a class="navbar-brand" style="font-size: 80%;" href="/">Download App</a>
        </div>
        <div class="d-flex align-items-end ml-auto">
            <a class="navbar-brand" style="font-size: 80%;" href="/">Tentang IndoTreasure</a>
            <a class="navbar-brand" style="font-size: 80%;" href="/">Mulai Berjualan</a>
        </div>
    </div>
</nav>

<nav class="navbar sticky-top" style="background-color: #004080">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/word.png') }}" alt="Logo" width="250" class="d-inline-block align-text-top">
        </a>
        <div class="d-flex">
            <button class="btn category-button">Kategori</button>
            <div class="input-group has-validation ms-3">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
                <div class="form-floating">
                    <input type="text" class="form-control custom-search-input" id="search" name="search" placeholder="{{ $search }}" required>
                    <label for="floatingInputGroup2">{{ $search }}</label>
                </div>
            </div>
        </div>
        <div class="buttons-container">
            <a class="btn login-button" href="/login">Login</a>
            <a class="btn register-button" href="/register">Register</a>
        </div>
    </div>
</nav>