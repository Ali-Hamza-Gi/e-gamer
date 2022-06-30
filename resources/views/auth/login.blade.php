<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/assets/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/assets/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/responsive-style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>E-gamerce - Pakistan's First Gaming Portal</title>
</head>

<body>
    <section class="login_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="white_box">
                        <div class="text-center">
                            <a href="#" class="logo">
                                <img src="{{ asset('front/assets/images/logo-black.png') }}" alt="#">
                            </a>
                            <h3>Login</h3>

                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="player-tab" data-bs-toggle="tab"
                                    data-bs-target="#player" type="button" role="tab" aria-controls="player"
                                    aria-selected="true">Player</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand"
                                    type="button" role="tab" aria-controls="brand"
                                    aria-selected="false">Brand</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="player" role="tabpanel"
                                aria-labelledby="player-tab">
                                <form method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="text-center">
                                        <h4>Login as a Player</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="hidden" name="user_type" value="player">
                                            <h5>Email Address</h5>
                                            <input type="text" name="email" placeholder="Email Address" value="{{ old('email') }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Password</h5>
                                            <input type="password" name="password" placeholder="Password"
                                                class="form-control">
                                            <label class="label_check">Remember Password
                                                <input type="checkbox" type="checkbox" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <button class="btn_send" type="submit">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="brand" role="tabpanel" aria-labelledby="brand-tab">
                                <form method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="text-center">
                                        <h4>Login as a Brand</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Email Address</h5>
                                            <input type="hidden" name="user_type" value="brand">
                                            <input type="text" name="email" placeholder="Email Address" value="{{ old('email') }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Password</h5>
                                            <input type="password" name="password" placeholder="Password"
                                                class="form-control">
                                            <label class="label_check">Remember Password
                                                <input type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <button class="btn_send" type="submit">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <a href="forgot_password.html" class="forgot_link">Forgot Password?</a>
                            </div>
                            <div class="col-12 col-md-6 text-end">
                                <p>Not registered? <a href="{{ route('register') }}" class="other_page">Sign Up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @if(session('error'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{session('error')}}");
        </script>
    @endif
</body>

</html>
