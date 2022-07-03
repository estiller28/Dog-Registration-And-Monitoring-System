
@extends('layouts.main')

@section('content')

    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Hi! {{ Auth::user()->name }}</h1>
        <div class="col-12">
        </div>
    </div>
@endsection


