@extends('layouts.main')

@section('content')
    <div class="container-fluid p-0">

        <h3 class="mb-3"><strong>My Profile</strong> </h3>
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="d-flex">
                        <div class="">
                            <i class="align-middle" data-feather="settings"></i> <span class="align-middle fs-4">Account Settings</span>
                        </div>
                        <div class="d-flex ms-auto">
                            <a href="{{ route('dashboard') }}" class="btn btn-primary" ><i class="align-middle me-1" data-feather="arrow-left"></i>Back</a>
                        </div>
                    </div>
                </div>
                @livewire('admin.admin-profile')
            </div>
        </div>

        @push('js')
            <script src="{{ asset('dist/js/validation.js') }}"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <script>
                window.addEventListener('swal:confirm', event => {
                    swal.fire({
                        title: event.detail.title,
                        text: event.detail.text,
                        icon: event.detail.type,
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, got it'

                    }) .then((result) => {
                        if (result.isConfirmed) {

                            window.livewire.emit('updatePassword', event.detail.id);
                        }
                    });
                });
            </script>
    @endpush

@endsection
