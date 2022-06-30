@extends('layouts.admin')
@section('title', 'Brands')
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
                                        <h5>All Brands</h5>
                                        </div>
                                    <div class="card-body">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Game Name</th>
                                                        <th>DOB</th>
                                                        <th>City</th>
                                                        <th>Age</th>
                                                        <th>Address</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($all_brands as $all_brand)                                                    <tr>

                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <img src="{{ asset($all_brand->image) }}" width="40px"
                                                             onerror="this.src='{{ asset('front/assets/images/profile_user.jpg') }}'">
                                                        </td>
                                                        <td>{{ $all_brand->first_name. ' ' .$all_brand->last_name  }}</td>
                                                        <td>{{ $all_brand->gaming_name }}</td>
                                                        <td>{{ $all_brand->dob }}</td>
                                                        <td>{{ $all_brand->city }}</td>
                                                        <td>{{ $all_brand->age }}</td>
                                                        <td>{{ $all_brand->address }}</td>
                                                        <td>
                                                            {{-- <a href="" class="btn btn-icon btn-outline-success"><i class="feather icon-check-circle"></i></a> --}}
                                                            <button class="btn btn-icon btn-outline-danger delete" title="Delete"
                                                                title="delete" data-id="{{ $all_brand->id }}"><i class="feather icon-slash"></i></button>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                        <tr>
                                                            <th colspan="9" class="text-center">No Brand Found.</th>
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
                    text: "You want Delete This Brand!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: `${btn_txt}`
                })
                .then((result) => {
                    if (result.value) {
                        let id = $(this).data('id');
                        window.location = "/delete-brand/"  + id;
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
