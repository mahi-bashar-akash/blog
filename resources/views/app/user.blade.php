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

            {{-- JQuery --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            {{-- Select2 --}}
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

            @vite('resources/scss/style-sheet.scss')
            @vite('resources/js/app/user/app.js')

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
