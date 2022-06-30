@extends('front.layouts.master')
@section('style')
@endsection
@section('content')
	<section class="page_header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3>Gaming News</h3>
				</div>
			</div>
		</div>
	</section>
	<section class="feature_section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="heading">Latest Gaming News of Pakistan</h2>
				</div>
			</div>
		</div>
		<div class="padding_box">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="img_box">
							<img src="{{ asset('front/assets/images/player1.jpg') }}" alt="#">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="text_box">
							<span>
								<h3>Syed "SumaiL" Hassan Joins OG-Esports</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="padding_box">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 order">
						<div class="img_box">
							<img src="{{ asset('front/assets/images/player2.jpg') }}" alt="#">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="text_box">
							<span>
								<h3>Arslan "Arslan Ash" Siddique Signs with Red Bull</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="padding_box">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="img_box">
							<img src="{{ asset('front/assets/images/player3.jpg') }}" alt="#">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="text_box">
							<span>
								<h3>Yawar "Yawar" Hassan Signs with Newbee</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="padding_box">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 order">
						<div class="img_box">
							<img src="{{ asset('front/assets/images/player4.jpg') }}" alt="#">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="text_box">
							<span>
								<h3>Awais "Awais Honey" Iftikhar Wins another Major Tournament</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="padding_box">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="img_box">
							<img src="{{ asset('front/assets/images/player5.jpg') }}" alt="#">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="text_box">
							<span>
								<h3>Anas "traNz" Ayub, Pakistan's First CS:GO international player</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</span>
						</div>
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
