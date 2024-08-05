<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Template</title>

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="{{asset('./source-code/bootstrap/dist/css/bootstrap.min.css')}}">

</head>
<body class="w-100 bg-light">
<div class="container">
    <div class="vh-100 w-100 d-flex justify-content-center align-items-center">
        <div class="col-11 col-sm-10 col-md-9 col-lg-8 col-xl-7 col-xxl-6 shadow px-4 py-5">
            <h3 class="fs-3 text-center fw-bold">
                Med Academy
            </h3>
            <div class="fs-5 text-center mb-4">
                Reset password
            </div>
            <p>
                Hi {{$userInfo->name}},
                <br><br>
                Forget your password? <br>
                This is reset code. Use this into this side
                <br><br>
                {{$userInfo->reset_code}}
            </p>
        </div>
    </div>
</div>

</body>
</html>
