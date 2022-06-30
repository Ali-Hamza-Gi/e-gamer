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
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
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
                            <h3>Sign Up</h3>
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
                                <form method="post" action=" {{ route('register') }} ">
                                    @csrf
                                    <div class="text-center">
                                        <h4>Sign Up as a Player</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <input type="hidden" name="user_type" value="player" required>
                                            <h5>First Name</h5>
                                            <input type="text" name="first_name" value="{{ old('first_name') }}"
                                                placeholder="First Name" class="form-control" required>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <h5>Last Name</h5>
                                            <input type="text" name="last_name" value="{{ old('last_name') }}"
                                                placeholder="Last Name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Gaming Name</h5>
                                            <input type="text" name="gaming_name"
                                                value="{{ old('gaming_name') }}" placeholder="Gaming Name"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Email Address</h5>
                                            <input type="text" name="email" value="{{ old('email') }}"
                                                placeholder="Email Address" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Password</h5>
                                            <input type="password" name="password" placeholder="Password"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Confirm Password</h5>
                                            <input type="password" name="password_confirmation"
                                                placeholder="Confirm Password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <h5>Date Of Birth</h5>
                                            <input type="date" name="dob" value="{{ old('dob') }}"
                                                placeholder="DOB" class="form-control" required>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <h5>City</h5>
                                            <select class="form-control" name="city" required>
                                                <option value="lahore"
                                                    {{ old('city') == 'lahore' ? 'selected' : '' }}>Lahore</option>
                                                <option value="lahore"
                                                    {{ old('city') == 'islamabad' ? 'selected' : '' }}>Islamabad
                                                </option>
                                                <option value="lahore"
                                                    {{ old('city') == 'karachi' ? 'selected' : '' }}>Karachi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <h5>Age</h5>
                                            <select class="form-control" name="age" required>
                                                <option value="">Select Age</option>
                                                @for ($i = 10; $i <= 50; $i++)
                                                    <option value="{{ $i }}"
                                                        {{ old('age') == $i ? 'selected' : '' }}>{{ $i }}
                                                    </option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <h5>Zip Code</h5>
                                            <input type="text" name="zip_code" value="{{ old('zip_code') }}"
                                                placeholder="Zip Code" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Address</h5>
                                            <textarea type="text" name="address" placeholder="Address" class="form-control" required> {{ old('address') }} </textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <button class="btn_send" type="submit">Sign Up</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="brand" role="tabpanel" aria-labelledby="brand-tab">
                                <form method="post" action="{{ route('register') }}">
                                    @csrf
                                    <div class="text-center">
                                        <h4>Sign Up as a Brand</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Brand Name</h5>
                                            <input type="text" name="" placeholder="Brand Name"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Major Sponsor</h5>
                                            <input type="text" name="" placeholder="Major Sponsor"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Email Address</h5>
                                            <input type="text" name="" placeholder="Email Address"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Password</h5>
                                            <input type="text" name="" placeholder="Password"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Confirm Password</h5>
                                            <input type="text" name="" placeholder="Confirm Password"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Country</h5>
                                            <select class="form-control">
                                                <option>USA</option>
                                                <option>UK</option>
                                                <option>Malaysia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Linkedin Url</h5>
                                            <input type="text" name="" placeholder="Linkedin Url"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Address</h5>
                                            <textarea type="text" name="" placeholder="Address" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <button class="btn_send" type="submit">Sign Up</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-end">
                                <p>Already Signed Up? <a href="login.html" class="other_page">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <script type="text/javascript" src="{{ asset('front/assets/js/jquery-3.3.1.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        @foreach ($errors->all() as $error)
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ $error }}");
        </script>
    @endforeach
</body>

</html>
