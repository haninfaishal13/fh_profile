<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    @include('_layout.style')
    <title>Document</title>
    <style>
        .full-page{
            min-height:100vh;
        }
    </style>
</head>
<body>
    <div class="full-page d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">FH Profile Login</h3>
                            <hr>
                            <form id="login-form">
                                <div class="mb-3">
                                    <label for="login-email">Email</label>
                                    <input type="email" name="email" class="form-control" id="login-email" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="login-password">Password</label>
                                    <input type="password" name="password" class="form-control" id="login-password" placeholder="Password">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('_layout.script')
    <script src="{{asset('js/backsite/auth.js')}}"></script>
</body>
</html>
