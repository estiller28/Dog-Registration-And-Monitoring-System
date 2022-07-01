@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('/dist/css/dashboard.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')

    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Dogs Management </strong></h1>
        <div class="row">
{{--            <div class="col-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header border-bottom">--}}
{{--                        <div class="d-flex">--}}
{{--                            <div>--}}
{{--                                <div class="card-title mb-0">--}}
{{--                                    <h4>{!! $dogCount !!} Registered Dogs--}}
{{--                                    </h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex ms-auto">--}}
{{--                                <input id="customSearch" type="search" class="form-control mr-2" placeholder="Enter Dog ID number">--}}
{{--                                <button class="btn btn-primary" href=""><i class="align-middle me-1" data-feather="search"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="post" action="{{ route('get.dogs') }}">--}}
{{--                            @csrf--}}
{{--                            <div class="row d-flex mb-3">--}}
{{--                                <div class="col-md-3 col-xs-3">--}}
{{--                                    <select class="form-select" name="barangay" id="" style="width: 100%;" required>--}}
{{--                                        <option selected="selected" value="">Select Barangay</option>--}}
{{--                                        <option value="1">Aquino</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <button type="submit"  class="btn btn-primary btn-sm-block"><i class="align-middle me-1" data-feather="filter"></i>Apply Filter</button>--}}
{{--                                    {!! $btn !!}--}}
{{--                                    <a href="{{ route('dogs.create') }}" class="btn btn-success btn-sm-block"><i class="align-middle me-2" data-feather="folder-plus"></i>Register Dogs</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                        {!! $html !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            @livewire('dog-management')
        </div>
    </div>

    @push('js')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

        <script>



            $(document).ready( function () {
                renderTable();
            } );


            function renderTable(){
                myTable =  $('#dogsTable').DataTable({
                    "responsive": true, "autoWidth": true, "scrollX": false, "pageLength": 10, "lengthChange": false,
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

                $('#customSearch').keyup(function (){
                    myTable.search($(this).val()).draw();
                })
            }



            document.addEventListener("DOMContentLoaded", () => {
                Livewire.hook('element.updated', (el, component) => {
                    $('#dogsTable').DataTable().destroy();
                })


                Livewire.hook('message.processed', (message, component) => {
                    renderTable();
                })
            });



        </script>


    @endpush



@endsection

