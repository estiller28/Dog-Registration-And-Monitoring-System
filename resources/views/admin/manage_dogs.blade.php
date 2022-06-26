@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('/dist/css/dashboard.css') }}">
@endpush

@section('content')

    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Dogs Management</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="d-flex">
                            <div>
                                <div class="card-title mb-0">
                                    <h4>{!! $dogCount !!} Registered Dogs
                                    </h4>
                                </div>
                            </div>
                            <div class="d-flex ms-auto">
                                <input type="search" class="form-control mr-2" placeholder="Enter Dog ID number">
                                <button class="btn btn-primary" href=""><i class="align-middle me-1" data-feather="search"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('get.dogs') }}">
                            @csrf
                            <div class="row d-flex mb-3">
                                <div class="col-md-3 col-xs-3">
                                    <select class="form-select" name="barangay" id="" style="width: 100%;" required>
                                        <option selected="selected" value="">Select Barangay</option>
                                        <option value="1">Aquino</option>
                                    </select>
                                </div>
                                <div class="col-md-9">
                                    <button type="submit"  class="btn btn-primary btn-sm-block"><i class="align-middle me-1" data-feather="filter"></i>Apply Filter</button>
                                    {!! $btn !!}
                                    <a href="{{ route('dogs.create') }}" class="btn btn-success btn-sm-block"><i class="align-middle me-2" data-feather="folder-plus"></i>Register Dogs</a>
                                </div>
                            </div>
                        </form>
                        {!! $html !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ asset('dist/js/datatable.js') }}"></script>
    @endpush

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

@endsection

