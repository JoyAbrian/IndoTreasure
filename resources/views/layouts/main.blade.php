<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | IndoTreasure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
    @include('partials.navbar')
    <div class="container mt-4">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <img src="img/logo.png" alt="logo" width="100px">
            </a>
            <span class="mb-3 mb-md-0 text-muted">© 2023</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="https://web.facebook.com/watch/?ref=search&v=711750460667134&external_log_id=3689e9a8-8dfc-41a7-b6cd-10552f5f47eb&q=never%20gonna%20give%20you%20up"><i class="bi bi-facebook"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/joyrantepasang/"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="https://twitter.com/stupidImpostor"><i class="bi bi-twitter-x"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="https://www.threads.net/@joyrantepasang"><i class="bi bi-threads"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&pp=ygUXbmV2ZXIgZ29ubmEgZ2l2ZSB5b3UgdXA%3D"><i class="bi bi-youtube"></i></a></li>
        </ul>
    </footer>
</div>

</html>