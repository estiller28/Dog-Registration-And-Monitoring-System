@extends('layouts.main')

@section('content')

    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-sm-block">
                <h3><strong>Dashboard</strong> </h3>
            </div>
        </div>

        @livewire('admin.dashboard')

    </div>
@endsection
