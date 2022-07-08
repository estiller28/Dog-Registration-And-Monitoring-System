@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('/dist/css/form.css') }}">
@endpush

@section('content')

    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><b>Dog Profile</b></h1>
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="d-flex">
                        <div class="">
                            <i class="align-middle" data-feather="check-square"></i> <span class="align-middle fs-4">Update Dog Record</span>
                        </div>
                        <div class="d-flex ms-auto">
                            <a href="{{ route('dogs.index') }}" class="btn btn-primary" ><i class="align-middle me-1" data-feather="arrow-left"></i>Back</a>
                        </div>
                    </div>
                </div>

                @livewire('dog-edit', ['dog' => $dog])
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ asset('/dist/js/form.js') }}"></script>
    @endpush

@endsection
