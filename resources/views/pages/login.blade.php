<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{asset('assets/logo')}}/untad.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{asset('assets/dashboard')}}/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['assets/dashboard/css/fonts.min.css']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });

    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/dashboard')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/dashboard')}}/css/atlantis.css">
    <style>
        .login {
            background: url('{{asset('assets/dashboard/img/bg-abstract2.png')}}');
            background-size: cover;
        }
    </style>
</head>

<body class="login">
    <div class="wrapper wrapper-login shadow-lg">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">{{__('pages/login.masuk')}}</h3>
            @if (session()->has('loginError'))
            <div class="alert alert-danger">
                {{ session('loginError') }}
            </div>
            @endif
            <form action="/cekLogin" method="POST">
                @csrf
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input id="username" name="username" type="text" class="form-control input-border-bottom"
                            required>
                        <label for="username" class="placeholder">Username</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="password" name="password" type="password" class="form-control input-border-bottom"
                            required>
                        <label for="password" class="placeholder">{{__('pages/login.password')}}</label>
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                    </div>
                    <div class="form-action mb-3 col-lg-12">
                        <button type="submit" class="btn btn-primary col-lg-12">{{__('pages/login.masuk')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="{{asset('assets/dashboard')}}/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{asset('assets/dashboard')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="{{asset('assets/dashboard')}}/js/core/popper.min.js"></script>
    <script src="{{asset('assets/dashboard')}}/js/core/bootstrap.min.js"></script>
    <script src="{{asset('assets/dashboard')}}/js/atlantis.min.js"></script>
</body>

</html>
