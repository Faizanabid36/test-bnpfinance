<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Homepage</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/utils.css') }}">


    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        html,body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
    <div class="limiter" id="react_app"></div>
</body>

{{-- <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script> --}}
{{-- <script src="{{ asset('vendor/select2/select2.min.js') }}"></script> --}}
<script>
    window.baseUrl = "{{ url()->current() }}"
</script>
<script src="{{ asset('js/app.js') }}"></script>

</html>
