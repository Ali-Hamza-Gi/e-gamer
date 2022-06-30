@extends('front.layouts.master')
@section('style')
@endsection
@section('content')
    <section class="header">
        <div id="home_slider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="flexer" style="background: url({{ asset('front/assets/images/header1.jpg') }});">
                        <div class="overlay"></div>
                        <span>
                            <div class="container">
                                <div class="row">
                                    <h1>Welcome To E-Gamerce</h1>
                                    <h3>Pakistan's First Online Gaming Portal</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                        ea commodo
                                        consequat.</p>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="flexer" style="background: url({{ asset('front/assets/images/header2.jpg') }});">
                        <div class="overlay"></div>
                        <span>
                            <div class="container">
                                <div class="row">
                                    <h1>Welcome To E-Gamerce</h1>
                                    <h3>Pakistan's First Online Gaming Portal</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                        ea commodo
                                        consequat.</p>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="flexer" style="background: url({{ asset('front/assets/images/header3.jpg') }});">
                        <div class="overlay"></div>
                        <span>
                            <div class="container">
                                <div class="row">
                                    <h1>Welcome To E-Gamerce</h1>
                                    <h3>Pakistan's First Online Gaming Portal</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                        ea commodo
                                        consequat.</p>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#home_slider" data-bs-slide="prev">
                <i class="fa fa-angle-left"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#home_slider" data-bs-slide="next">
                <i class="fa fa-angle-right"></i>
            </button>
        </div>
    </section>
    <section class="feature_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading">Our Goals</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="img_box">
                        <img src="{{ asset('front/assets/images/feature1.jpg') }}" alt="#">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="text_box">
                        <span>
                            <h3>Finding Local Talent Across Pakistan</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature_section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 order">
                    <div class="img_box">
                        <img src="{{ asset('front/assets/images/feature2.png') }}" alt="#">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="text_box">
                        <span>
                            <h3>Contacting Biggest Esports Organizations Across The World</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature_section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="img_box">
                        <img src="{{ asset('front/assets/images/feature3.png') }}" alt="#">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="text_box">
                        <span>
                            <h3>Giving Options In Top Games In ESports Right Now</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature_section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 order">
                    <div class="img_box">
                        <img src="{{ asset('front/assets/images/feature4.png') }}">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="text_box">
                        <span>
                            <h3>Helping Players Join The Organizations To Create History</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="game_select_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading">Top Games</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 col-md-6 p-0">
                    <a href="#" class="game_select">
                        <div class="img_box" style="background: url({{ asset('front/assets/images/game1.jpg') }});">
                            <div class="overlay"></div>
                            <h4>Dota 2</h4>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <a href="#" class="game_select">
                        <div class="img_box" style="background: url({{ asset('front/assets/images/game2.jpg') }});">
                            <div class="overlay"></div>
                            <h4>CS:GO</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-12 col-md-6 p-0">
                    <a href="#" class="game_select">
                        <div class="img_box" style="background: url({{ asset('front/assets/images/game3.png') }});">
                            <div class="overlay"></div>
                            <h4>League Of Legends</h4>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <a href="#" class="game_select">
                        <div class="img_box" style="background: url({{ asset('front/assets/images/game4.jpg') }});">
                            <div class="overlay"></div>
                            <h4>Valorant</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-12 col-md-6 p-0">
                    <a href="#" class="game_select">
                        <div class="img_box" style="background: url({{ asset('front/assets/images/game5.jpg') }});">
                            <div class="overlay"></div>
                            <h4>COD: Warzone</h4>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <a href="#" class="game_select">
                        <div class="img_box" style="background: url({{ asset('front/assets/images/game6.jpg') }});">
                            <div class="overlay"></div>
                            <h4>Player's Unknown Battleground</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-12 col-md-6 p-0">
                    <a href="#" class="game_select">
                        <div class="img_box" style="background: url({{ asset('front/assets/images/game7.jpg') }});">
                            <div class="overlay"></div>
                            <h4>Rocket League</h4>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <a href="#" class="game_select">
                        <div class="img_box" style="background: url({{ asset('front/assets/images/game8.jpg') }});">
                            <div class="overlay"></div>
                            <h4>Tekken 7</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-12 col-md-6 p-0">
                    <a href="#" class="game_select">
                        <div class="img_box" style="background: url({{ asset('front/assets/images/game9.jpg') }});">
                            <div class="overlay"></div>
                            <h4>PUBG Mobile</h4>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <a href="#" class="game_select">
                        <div class="img_box" style="background: url({{ asset('front/assets/images/game10.jpg') }});">
                            <div class="overlay"></div>
                            <h4>Street Fighters</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')

@endsection
