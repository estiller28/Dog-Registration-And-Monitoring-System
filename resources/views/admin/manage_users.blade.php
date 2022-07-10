@extends('layouts.main')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('/dist/css/dashboard.css') }}">
@endpush

@section('content')

    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>User Management</strong></h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle fs-4">Users</span>
                        </div>
                    </div>
                    <div class="card-body">

                        @livewire('admin.manage-users')

                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('js')
        <script src="{{ asset('dist/js/datatable.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

        <script>
            function renderTable() {
                myTable = $('#myTable').DataTable({
                    "responsive": false, "autoWidth": true, "scrollX": true, "pageLength": 10, "lengthChange": false,
                    "search": {
                        "caseInsensitive": true,
                    },
                    "": false,
                    "columnDefs": [{
                        "className": "dt-left",
                        "targets": "_all"
                    }
                    ],
                    "dom": "lrtip" //t

                });
            }

            document.addEventListener("DOMContentLoaded", () => {
                Livewire.hook('message.received', (message, component) => {
                    $('#myTable').DataTable().destroy();
                })

                Livewire.hook('message.processed', (message, component) => {
                    renderTable();
                })
            });
        </script>
    @endpush

@endsection
