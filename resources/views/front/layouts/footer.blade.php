<section class="newsletter_section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <h4>Subscribe to our newsletter</h4>
            </div>
            <div class="col-12 col-md-5">
                <form method="post">
                    <input type="text" name="" class="form-control" placeholder="email">
                    <button class="btn_subscribe">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <a href="{{ route('user.home') }}" class="logo">
                    <img src="{{ asset('front/assets/images/logo-black.png') }}">
                </a>
                <h4>Pakistan's Online Gaming Portal</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
            <div class="col-12 col-md-7">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h5>Links</h5>
                        <ul>
                            <li><a href="{{ route('user.home') }}">Home</a></li>
                            <li><a href="about_us.html">About Us</a></li>
                            <li><a href="top_players.html">Top Players</a></li>
                            <li><a href="news.html">Gaming News</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <ul>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5>Games</h5>
                        <ul>
                            <li><a href="#">Dota 2</a></li>
                            <li><a href="#">CS:GO</a></li>
                            <li><a href="#">League Of Legends</a></li>
                            <li><a href="#">Valorant</a></li>
                            <li><a href="#">COD: Warzone</a></li>
                            <li><a href="#">Player's Unknown Battleground</a></li>
                            <li><a href="#">Rocket League</a></li>
                            <li><a href="#">Tekken 7</a></li>
                            <li><a href="#">PUBG Mobile</a></li>
                            <li><a href="#">Street Fighters</a></li>
                            <ul>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5>Pages</h5>
                        <ul>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li><a href="terms.html">Terms & Conditions</a></li>
                            <ul>
                                <ul class="list-inline social">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-reddit"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-steam"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="fa fa-youtube-play"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitch"></i></a>
                                    </li>
                                </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ asset('front/assets/js/jquery-3.3.1.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
@yield('script')
</body>

</html>
