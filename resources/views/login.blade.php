{{-- @extends('layout') --}}
@section('content')
{{-- <main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    @if(\Session::has('message'))
                        <div class="alert alert-info">
                            {{\Session::get('message')}}
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('postlogin') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                                <br>
                                <button type="submit" class="btn btn-dark btn-block" ><a id="btn" href="/">annuler</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> --}}
@endsection


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>signin-signup</title>
</head>
<body>
    {{-- @if(\Session::has('message'))
    <div class="alert alert-info">
        {{\Session::get('message')}}
    </div>
@endif --}}
@if(\Session::has('message'))
    <script>
        swal("message","{{ session::get('message') }}",'error',{
            button:false,
            button:"ok",
        });
    </script>
@endif
    <div class="container">
        <div class="signin-signup">
                <form method="POST" action="{{ route('postlogin') }}"  class="sign-in-form">
                    @csrf
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="email">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="password" name="password">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <input type="submit" value="Login" class="btn">
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/abdelhadi.lahbouch" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/abdo__lahbouch/" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/abdo-ab-901728252/" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>
            <form action="{{ route('postsignup') }}" method="POST" class="sign-up-form">
                @csrf
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="name" autofocus>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email"  name="email" autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password"  name="password">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <input type="submit" value="Sign up" class="btn">
                <p class="social-text">Or Sign in Web site E-shopper</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/abdelhadi.lahbouch" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/abdo__lahbouch/" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/abdo-ab-901728252/" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <button><p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p></button>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Member of site Web E-shopper?</h3>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="{{ asset('img/img-produit/imm.png') }}" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New to account ?</h3>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="{{ asset('img/img-produit/login.webp') }}" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="js/javascript.js"></script>
</body>
</html>
