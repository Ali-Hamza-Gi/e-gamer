@extends('front.layouts.master')
@section('style')
@endsection
@section('content')
	<section class="page_header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3>Contact Us</h3>
				</div>
			</div>
		</div>
	</section>
	<section class="contact_section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<div class="white_box">
						<form method="post">
							<div class="row">
								<div class="col-12 col-md-6">
									<h5>First Name</h5>
									<input type="text" name="" placeholder="First Name" class="form-control">
								</div>
								<div class="col-12 col-md-6">
									<h5>Last Name</h5>
									<input type="text" name="" placeholder="Last Name" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<h5>Email</h5>
									<input type="text" name="" placeholder="Email" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<h5>Subject</h5>
									<input type="text" name="" placeholder="Subject" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<h5>Message</h5>
									<textarea placeholder="Message" class="form-control"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<button class="btn_send">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('script')
@endsection
