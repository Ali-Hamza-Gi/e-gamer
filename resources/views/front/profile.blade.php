@extends('front.layouts.master')
@section('style')
    <style>
        .image-upload>input {
            display: none;
        }

        .image-upload label {
            cursor: pointer;
        }
        .image-upload22 > input {
            display: none;
        }

        .image-upload22 label {
            cursor: pointer;
        }
    </style>
@endsection
@section('content')
    <section class="profile_section">
        <div class="upper_profile">
            <div class="cover_img">
                <div class="main_img">
                    <img src="{{ asset($user->cover_image) }}" alt="#"
                        onerror="this.src='{{ asset('front/assets/images/cover_demo.jpg') }}'">
                </div>
                <div class="image-upload">
                    <label for="file-input">
                        <span class="edit_img"><i class="fa fa-pencil"></i></span>
                    </label>
                    <input id="file-input" type="file" name="upload_cover_image" class="background-image-upload" />
                </div>
            </div>
            <div class="profile_info">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="profile_box">
                                <div class="img_box">

                                    <img src="{{ asset($user->image) }}" width="100px"
                                        height="100px" onerror="this.src='{{ asset('front/assets/images/profile_user.jpg') }}'">
                                    <div class="image-upload22" style="background-color: transparent;">
                                        <label for="file-input">
                                            <span class="edit_img change-pencil-dir"><i class="fa fa-pencil"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <input type="file" name="upload_profile_image" class="profile-image-upload">
                                <div class="text-box">
                                    <a href="#" class="name">{{ $user->first_name . ' ' . $user->last_name }}</a>
                                    <p class="grey_text">{{ $user->gaming_name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <form method="post" action="{{ route('user.profile.update') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <h5>First Name</h5>
                                        <input type="text" value="{{ $user->first_name }}" name="first_name"
                                            placeholder="First Name" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h5>Last Name</h5>
                                        <input type="text" value="{{ $user->first_name }}" name="last_name"
                                            placeholder="Last Name" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Gaming Name</h5>
                                        <input type="text" name="gaming_name" value="{{ $user->gaming_name }}"
                                            placeholder="Gaming Name" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <h5>Date Of Birth</h5>
                                        <input type="date" name="dob" value="{{ $user->dob }}" placeholder="DOB"
                                            class="form-control">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h5>City</h5>
                                        <select class="form-control" name="city">
                                            <option value="" disabled>Select City</option>
                                            <option value="lahore" {{ $user->city == 'lahore' ? 'selected' : '' }}>Lahore
                                            </option>
                                            <option value="islamabad" {{ $user->city == 'islamabad' ? 'selected' : '' }}>
                                                Islamabad</option>
                                            <option value="karachi" {{ $user->city == 'karachi' ? 'selected' : '' }}>
                                                Karachi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn_send">Edit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="play_posting">
                            <form method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>Post your best plays here</h3>
                                        <div class="upload-btn-wrapper">
                                            <button class="btn">Upload Your Plays</button>
                                            <input type="file" name="myfile" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <button class="btn_send">Share From Facebook</button>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <button class="btn_send">Share From Youtube</button>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <button class="btn_send">Share From Reddit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(document).on('change', '.background-image-upload', function() {
                var name = document.getElementsByClassName("background-image-upload")[0].files[0].name;
                var form_data = new FormData();
                var ext = name.split('.').pop().toLowerCase();
                if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    alert("Invalid Image File");
                }
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementsByClassName("background-image-upload")[0].files[
                    0]);
                var f = document.getElementsByClassName("background-image-upload")[0].files[0];
                var fsize = f.size || f.fileSize;
                if (fsize > 2000000) {
                    alert("Image File Size is very big");
                } else {
                    form_data.append("file", document.getElementsByClassName("background-image-upload")[0]
                        .files[0]);
                    form_data.append("_token", "{{ csrf_token() }}");
                    $.ajax({
                        method: "post",
                        url: "{{ route('user.cover.image') }}",
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            if (response.status) {
                                location.reload();
                            }
                        }
                    });
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('change', '.profile-image-upload', function() {
                var name = document.getElementsByClassName("profile-image-upload")[0].files[0].name;
                var form_data = new FormData();
                var ext = name.split('.').pop().toLowerCase();
                if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    alert("Invalid Image File");
                }
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementsByClassName("profile-image-upload")[0].files[
                    0]);
                var f = document.getElementsByClassName("profile-image-upload")[0].files[0];
                var fsize = f.size || f.fileSize;
                if (fsize > 2000000) {
                    alert("Image File Size is very big");
                } else {
                    form_data.append("file", document.getElementsByClassName("profile-image-upload")[0]
                        .files[0]);
                    form_data.append("_token", "{{ csrf_token() }}");
                    $.ajax({
                        method: "post",
                        url: "{{ route('user.profile.image.upload') }}",
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            if (response.status) {
                                location.reload();
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
