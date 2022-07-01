@extends('layouts.main')

@section('content')
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Create New User</h1>
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="d-flex">
                        <div>
                            <div class="card-title mb-0">
                                <h4>Add User
                                </h4>
                            </div>
                        </div>
                        <div class="d-flex ms-auto">
                            <a href="{{ route('users.index') }}" class="btn btn-primary" ><i class="align-middle me-1" data-feather="arrow-left"></i>Back</a>
                        </div>
                    </div>
                </div>

                @livewire('create-user-form')

            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ asset('dist/js/validation.js') }}"></script>
    @endpush

@endsection
