<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bulan Dog Registration and Monitoring System">
    <meta name="author" content="Bulan">
    <meta name="keywords" content="Bulan, Bulan Dog Registration, Bulan Monitoring">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <title></title>
    @livewireStyles
    {{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>--}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    {{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">--}}
    @stack('css')
    <link href="{{ asset('dist/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>

<body>
<div class="wrapper">
    @include('admin.sidebar')

    <div class="main">
        @include('admin.navbar')

        <main class="content">
            @yield('content')
        </main>
    </div>
</div>

@livewireScripts
<script src="{{ asset('dist/js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@stack('js')

<script>
    window.addEventListener('toastr:info', event => {
        var type = event.detail.type;

        toastr.options.progressBar = true;
        switch (type){
            case 'info':
                toastr.info(event.detail.message);

                const imgPreview = document.getElementById("img-preview");
                const placeHolder = document.getElementById("placeholder");

                // placeHolder.style.display = "none";
                // imgPreview.style.display = "block";

                break;
            case 'success':
                toastr.success(event.detail.message);

                break;
            case 'warning':
                toastr.warning(event.detail.message);
                break;
            case 'error':
                toastr.error(event.detail.message);
                break;
        }

    });
</script>

<script type="text/javascript">
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'success') }}"
    toastr.options.progressBar = true;
    switch (type){
        case 'info':
            toastr.info("{{Session::get('message')}}");
            break;

        case 'success':
            toastr.success("{{Session::get('message')}}");

            break;
        case 'warning':
            toastr.warning("{{Session::get('message')}}");
            break;
        case 'error':
            toastr.error("{{Session::get('message')}}");
            break;
    }
    @endif
</script>
</body>
</html>
