@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <strong class="text-danger">  {{$error}}</strong>
            @endforeach
        </div>
    </div>
@endif
