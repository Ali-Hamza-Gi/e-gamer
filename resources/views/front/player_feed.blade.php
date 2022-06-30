@extends('front.layouts.master')
@section('style')
@endsection
@section('content')
	<section class="page_header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3>Find The Talent Here</h3>
				</div>
			</div>
		</div>
	</section>
	<section class="feed_section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ul class="nav nav-tabs" id="game" role="tablist">
					  <li class="nav-item" role="presentation">
					    <button class="nav-link active" id="dota2-tab" data-bs-toggle="tab" data-bs-target="#dota2" type="button" role="tab" aria-controls="dota2" aria-selected="true">Dota 2</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="csgo-tab" data-bs-toggle="tab" data-bs-target="#csgo" type="button" role="tab" aria-controls="csgo" aria-selected="false">CS:GO</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="lol-tab" data-bs-toggle="tab" data-bs-target="#lol" type="button" role="tab" aria-controls="lol" aria-selected="false">League of Legends</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="valorant-tab" data-bs-toggle="tab" data-bs-target="#valorant" type="button" role="tab" aria-controls="valorant" aria-selected="false">Valorant</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="warzone-tab" data-bs-toggle="tab" data-bs-target="#warzone" type="button" role="tab" aria-controls="warzone" aria-selected="false">COD: Warzone</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="pubg-tab" data-bs-toggle="tab" data-bs-target="#pubg" type="button" role="tab" aria-controls="pubg" aria-selected="false">Player's Unknown Battlegrounds</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="rocketleague-tab" data-bs-toggle="tab" data-bs-target="#rocketleague" type="button" role="tab" aria-controls="rocketleague" aria-selected="false">Rocket League</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="tekken7-tab" data-bs-toggle="tab" data-bs-target="#tekken7" type="button" role="tab" aria-controls="tekken7" aria-selected="false">Tekken 7</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="pubgm-tab" data-bs-toggle="tab" data-bs-target="#pubgm" type="button" role="tab" aria-controls="pubgm" aria-selected="false">PUBG Mobile</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="streetfighterv-tab" data-bs-toggle="tab" data-bs-target="#streetfighterv" type="button" role="tab" aria-controls="streetfighterv" aria-selected="false">Street Fighter V</button>
					  </li>
					</ul>
					<div class="tab-content" id="gameContent">
					  <div class="tab-pane fade show active" id="dota2" role="tabpanel" aria-labelledby="dota2-tab">
					  	<h3>Top Dota 2 Players</h3>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">Dota 2 Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">Dota 2 Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  </div>
					  <div class="tab-pane fade" id="csgo" role="tabpanel" aria-labelledby="csgo-tab">
					  	<h3>Top Counter Strike: Global Offensive Players</h3>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">CS:GO Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">CS:GO Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  </div>
					  <div class="tab-pane fade" id="lol" role="tabpanel" aria-labelledby="lol-tab">
					  	<h3>Top League Of Legends Players</h3>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">League of Legends Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">League of Legends Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  </div>
					  <div class="tab-pane fade" id="valorant" role="tabpanel" aria-labelledby="valorant-tab">
					  	<h3>Top Valorant Players</h3>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">Valorant Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">Valorant Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  </div>
					  <div class="tab-pane fade" id="warzone" role="tabpanel" aria-labelledby="warzone-tab">
					  	<h3>Top COD: Warzone Players</h3>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">COD: Warzone Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">COD: Warzone Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  </div>
					  <div class="tab-pane fade" id="pubg" role="tabpanel" aria-labelledby="pubg-tab">
					  	<h3>Top Player's Unknown Battlegrounds Players</h3>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">PUBG Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">PUBG Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  </div>
					  <div class="tab-pane fade" id="rocketleague" role="tabpanel" aria-labelledby="rocketleague-tab">
					  	<h3>Top Rocket League Players</h3>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">Rocket League Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">Rocket League Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  </div>
					  <div class="tab-pane fade" id="tekken7" role="tabpanel" aria-labelledby="tekken7-tab">
					  	<h3>Top Tekken 7 Players</h3>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">Tekken 7 Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">Tekken 7 Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  </div>
					  <div class="tab-pane fade" id="pubgm" role="tabpanel" aria-labelledby="pubgm-tab">
					  	<h3>Top PUBG Mobile Players</h3>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">PUBG Mobile Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">PUBG Mobile Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  </div>
					  <div class="tab-pane fade" id="streetfighterv" role="tabpanel" aria-labelledby="streetfighterv-tab">
					  	<h3>Top Street Fighter V Players</h3>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">Street Fighter V Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  	<div class="player_feed">
					  		<div class="player_prof">
					  			<a href="#" class="img_box"><img src="./assets/images/profile_user.jpg" alt="#"></a>
					  			<div class="text-box">
					  				<a href="#" class="name">John Doe</a>
					  				<p class="grey_text">Street Fighter V Player</p>
					  			</div>
					  		</div>
						  	<div class="play_vids">
						  		<div class="row">
						  			<div class="col-12 col-md-6">
						  				<iframe width="560" height="315" src="https://www.youtube.com/embed/F4lWmZW1l04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  			</div>
						  			<div class="col-12 col-md-6">
						  				<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGSiXPlays%2Fvideos%2F558562945638560%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
						  			</div>
						  		</div>
						  	</div>
					  	</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('script')

@endsection
