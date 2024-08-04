<!doctype html>
<html lang="en">
    <head>

        {{-- Meta --}}
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Website title --}}
        <title> Npvider </title>

        {{-- Website icon --}}
        <link rel="shortcut icon" href="{{asset('/images/logo.png')}}" type="image/x-icon">

        {{-- Bootstrap css & icons --}}
        <link rel="stylesheet" href="{{asset('/source-code/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/source-code/bootstrap-icons/font/bootstrap-icons.min.css')}}">

        @vite('resources/scss/style-sheet.scss')
        @vite('resources/js/app/admin/app.js')

    </head>

    <body id="app"></body>

    <script>
        window.core = {
            APP_NAME: 'Npvider',
            APP_URL: '{{env('APP_URL')}}'
        };
    </script>
    <script src="{{asset('/source-code/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

</html>
