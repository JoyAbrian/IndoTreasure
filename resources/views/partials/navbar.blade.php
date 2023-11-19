<nav class="navbar sticky-top" style="background-color: #004080">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="/">
            <img src="img/word.png" alt="Logo" width="250" class="d-inline-block align-text-top">
        </a>
        <div class="d-flex">
            <button class="btn category-button">Kategori</button>
            <div class="input-group has-validation ms-3">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
                <div class="form-floating">
                    <input type="text" class="form-control custom-search-input" id="floatingInputGroup2" placeholder="{{ $search }}" required>
                    <label for="floatingInputGroup2">{{ $search }}</label>
                </div>
            </div>
        </div>
        <div class="buttons-container">
            <a class="btn login-button">Login</a>
            <a class="btn register-button">Register</a>
        </div>
    </div>
</nav>