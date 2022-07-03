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
                        @if($errors->has('input_array.*'))
                            <ul>
                            @foreach($errors->get('input_array.*') as $errors)
                                @foreach($errors as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            @endforeach
                            </ul>
                        @endif
						<form method="post" action="{{ route('user.contact.us.store') }}">
                            @csrf
							<div class="row">
								<div class="col-12 col-md-6">
									<h5>First Name</h5>
									<input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" class="form-control">
								</div>
								<div class="col-12 col-md-6">
									<h5>Last Name</h5>
									<input type="text" name="last_name" placeholder="Last Name" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<h5>Email</h5>
									<input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<h5>Subject</h5>
									<input type="text" name="subject" placeholder="Subject" {{ old('subject') }} class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<h5>Message</h5>
									<textarea placeholder="Message" class="form-control" name="messege">{{ old('messege') }}</textarea>
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
