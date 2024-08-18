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
            @vite('resources/js/app/user/app.js')

        </head>

        <body id="app"></body>

        <script>
            window.core = {
                APP_NAME: 'Npvider',
                APP_URL: '{{env('APP_URL')}}',
                @if(\Illuminate\Support\Facades\Auth::guard('users')->check())
                    UserInfo: {!! \Illuminate\Support\Facades\Auth::guard('users')->user() !!},
                @else
                    UserInfo: null,
                @endif
            };
        </script>

        <script src="{{asset('/source-code/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    </html>
