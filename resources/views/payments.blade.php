<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payments | IndoTreasure</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script>
        $(function () {
            $('.card-name .card-input').html($('.card-list li:first-child').html());

            $('.card-grp').click(function () {
                $('.card-list').toggleClass('visible');
            });

            $('.card-list li').click(function () {
                $('.card-list').removeClass('visible');
                $('.card-input').html($(this).html());
            });
        });

    </script>
</head>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Comfortaa');
            
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Comfortaa', cursive;
        }

        body {
            background: #8cb1b7;
        }

        .card-name {
            width: 300px;
            background: #fff;
            margin: 80px auto;
            padding: 30px;
            border-radius: 3px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .label-title {
            display: block;
            padding-bottom: 10px;
            color: #8cb1b7;
            font-size: 22px;
            text-align: center;
            line-height: 28px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .input-wrapper {
            position: relative;
        }

        .card-input {
            width: 100%;
            outline: none;
            padding: 10px 20px;
            background: #8cb1b7;
            cursor: pointer;
            position: relative;
            color: #e8eff1;
            border-radius: 3px;
        }

        .arrow {
            position: absolute;
            top: 16px;
            right: 20px;
            cursor: pointer;
            color: #e8eff1;
        }

        ul.card-list {
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
            width: 100%;
            top: 52px;
            display: none;
            background: #dae6e8;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        ul.card-list.visible {
            display: block;
        }

        ul li {
            padding: 10px 20px;
            cursor: pointer;
        }

        ul li {
            border-top: 0;
        }

        ul li .fab,
        .card-input .fab {
            font-size: 32px;
        }

    </style>

    <div class="card-name card-form">
        <label class="label-title">Choose Payment</label>
        <div class="input-wrapper">
            <div class="card-grp">
                <div class="card-input">
                </div>
                <div class="arrow">
                    <i class="fas fa-caret-down fa-lg"></i>
                </div>
            </div>

            <ul class="card-list">
                <li ><i class="fab fa-cc-visa"></i> VISA</li>
                <li><i class="fab fa-cc-discover"></i> DISCOVER</li>
                <li><i class="fab fa-cc-amex"></i> AMEX</li>
                <li><i class="fab fa-cc-stripe"></i> STRIPE </li>
                <li><i class="fab fa-cc-jcb"></i> JCB</li>
            </ul>

        <a href="/" class="btn btn-danger mt-3">Back</a>
        <a href="/" class="btn btn-success mt-3">Pay Now</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
