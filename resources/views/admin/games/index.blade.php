@extends('layouts.admin')
@section('title', 'Games')
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
                                        <h5>All Games</h5>
                                        <div class="float-right">
                                            <a class="btn  btn-primary text-white" href="{{ route('games.create') }}">Add New Game</a>
                                        </div>
                                        </div>
                                    <div class="card-body">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Image</th>
                                                        <th>Description</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($games as $game)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $game->title }}</td>
                                                        <td><img src="{{ asset($game->image) }}" alt="" srcset="" width="50px" height="50px"></td>
                                                        <td>{{ is_null($game->description) ? 'Null' : $game->description }}</td>
                                                        <td class="d-inline-flex">
                                                            <a type="button" class="btn btn-icon btn-outline-success" href="{{ route('games.edit',$game->id) }}"><i class="feather icon-edit"></i></a>
                                                            <form action="{{ route('games.destroy',$game->id) }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="button" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="5" class="text-center">No Record Found</td>
                                                    </tr>
                                                    @endforelse


                                                </tbody>


                                            </table>
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
                        window.location = "/delete-players/"  + id;
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
