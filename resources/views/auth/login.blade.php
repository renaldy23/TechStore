<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-white">
    <div class="container">
        <div class="row align-items-center content-login">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="{{ asset("img/signup.jpg") }}" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Login Into your Account</h1>
                <p class="font-italic text-muted mb-0">Make sure you already registered </p>
            </div>
    
            <!-- Login Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <a href="/" class="text-dark"><i class="fa fa-arrow-left"></i> Back</a>
                @if (Session::has("error"))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get("error") }}
                    </div>
                @endif
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="row mt-2">
                        <!-- Last Name -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Password -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md @error('password') is-invalid @enderror">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <button type="submit" class="btn btn-block py-2" id="btn-login"><span>Login</span></button>
                        </div>
    
                        <!-- Divider Text -->
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>
    
                        <!-- Social Login -->
                        <div class="social-content">
                            <a href="/auth/google" id="google"><i class="fa fa-google" aria-hidden="true"></i></a>
                            <a href="#" id="github"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="/auth/twitter" id="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                        
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Doesn't Have Account ? <a href="/register" class="text-primary ml-2">Register</a></p>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>