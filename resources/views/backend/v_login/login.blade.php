<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <link rel="stylesheet" href="{{ asset('matrix-admin/dist/css/style.min.css') }}">

</head>
<body>
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
        <div class="auth-box bg-dark border-top border-secondary">
            <div id="loginform">
                <div class="text-center p-t-20 p-b-20">
                    <span class="db"><img src="{{ asset('matrix-admin/assets/images/logo.png') }}" alt="logo" /></span>
                </div>
                <h3 class="text-center text-white"> {{$judul}} </h3>
                <!-- error -->
                @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>{{ session('error') }}</strong>
                </div>
                @endif
                <!-- error end -->

                <form action="{{ route('backend.login') }}" method="post" class="form-horizontal m-t-20">
                    @csrf 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                        </div>
                        <input type="text" name="email" id="" value="{{old('email')}}" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Masukkan Email" aria-label="Email" aria-describedby="basic-addon1">
                        @error('email')
                        <span class="invalid-feedback alert-danger" role="alert">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                        </div>
                        <input type="password" name="password" id="" value="{{old('password')}}" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Masukkan Password" aria-label="Password" aria-describedby="basic-addon2">
                        @error('password')
                        <span class="invalid-feedback alert-danger" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>