@extends('layouts.admin')
@section('title', 'Games - Edit')
@section('content')

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add New Game</h5>
                                            <div class="float-right">
                                                <a class="btn  btn-primary text-white"
                                                    href="{{ route('games.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form enctype="multipart/form-data" method="POST" action="{{ route('games.update',$game->id) }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="form-label" for="">Title</label>
                                                    <input type="text" class="form-control" value="{{ $game->title }}" name="title"
                                                        placeholder="Game Title"  required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="">Image</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="file" name="image" class="form-control"  required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <img src="{{ asset($game->image) }}" alt="" width="100" height="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="inputAddress2">Description (Optional)</label>
                                                    <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Game Description ....">{{ $game->description }}</textarea>
                                                </div>
                                                <button type="submit" class="btn  btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        // delete player
        $(document).on('click', ".delete", function() {
            let status = $(this).data('status');
            status = parseInt(status);
            switch (status) {
                case 1:
                    btn_txt = 'Completed!';
                    break;
                case 2:
                    btn_txt = 'Cancel!';
                    break;
                default:
                    btn_txt = 'Continue!';
                    break;
            }
            Swal.fire({
                    title: "Are you sure?",
                    text: "You want Delete This Player!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: `${btn_txt}`
                })
                .then((result) => {
                    if (result.value) {
                        let id = $(this).data('id');
                        window.location = "/delete-players/" + id;
                    } else {
                        Swal.fire(
                            'Cancelled!',
                            'Operation Cancelled!',
                            'info'
                        )
                    }
                });
        });
    </script>

@endsection
