@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('/dist/css/dashboard.css') }}">
@endpush

@section('content')

    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>User Management</strong></h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4>All Users</h4>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex mb-3">
                            <div class="col-md-9">
                                <a href="{{ route('users.create') }}" type=""  class="btn btn-success btn-sm-block"><i class="align-middle me-2" data-feather="folder-plus"></i>Create New User</a>
                            </div>
                        </div>

                        <table id="myTable" class="table table-responsive table-striped" style="width:100%">
                            <thead style="background: #D0C9C0; ">
                            <tr>
                                <th>User ID</th>
                                <th>Barangay</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->barangay->barangay_name }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-info "><i class="align-middle me-2" data-feather="edit"></i>Edit</button>
                                        <button class="btn btn-sm btn-danger"><i class="align-middle me-2" data-feather="trash"></i>Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @push('js')
        <script src="{{ asset('dist/js/datatable.js') }}"></script>
    @endpush
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{--    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>--}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

@endsection
