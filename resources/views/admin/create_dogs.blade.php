@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('/dist/css/form.css') }}">

@endpush

@section('content')

    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><b>Register Dogs</b></h1>
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="d-flex">
                        <div class="">
                            <i class="align-middle" data-feather="save"></i> <span class="align-middle fs-4">Add dog record</span>
                        </div>
                        <div class="d-flex ms-auto">
                            <a href="{{ route('dogs.index') }}" class="btn btn-primary" ><i class="align-middle me-1" data-feather="arrow-left"></i>Back</a>
                        </div>
                    </div>
                </div>
                @livewire('admin.create-dogs-form')
            </div>
        </div>
    </div>


    @push('js')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{ asset('/dist/js/form.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

        <script>

            $(document).ready(function () {
                $('#select2').select2();
            });

        </script>

    @endpush

@endsection
