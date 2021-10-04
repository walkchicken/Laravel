@extends('layouts.appsssss')

@section('content')
<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
	<title>Login</title>
   <!--Made with love by Mutiullah Samim -->
   <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('public')}}/frontend/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <!-- <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script> -->
        <!-- Google fonts-->
        <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" /> -->
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.css')}}" >

	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/css/style.css')}}">
    </html>
<div class="container">
	<div class="d-flex justify-content-center h-100" style="margin-top:180px; ">
		<div class="card">
                <div class="card-header" style="color:white">{{ __('Login') }}
                    <div class="d-flex justify-content-end social_icon">
					    <span><i class="fab fa-facebook-square"></i></span>
					    <span><i class="fab fa-google-plus-square"></i></span>
					    <span><i class="fab fa-twitter-square"></i></span>
				    </div>         
                </div>
                <div class="card-body">
                    <form method="POST" style="margin-top: -30px"action="{{ route('login') }}">
                        @csrf

                        <div class="input-group form-group">
						    <div class="input-group-prepend" style="height : 50px;">
                                <span class="input-group-text" ><i class="fas fa-user"></i></span>
                            </div>
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color:white ; text-align: left!important; padding-top:2px;" style="height : 50px;">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" style="height : 50px;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group form-group">
						    <div class="input-group-prepend">
							    <span class="input-group-text"><i class="fas fa-key"></i></span>
						    </div>
                            <label for="password" class="col-md-4 col-form-label text-md-right"  style="color:white ; text-align: left!important;padding-top:11px; " style="height : 50px;">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" style="height : 50px;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-group form-group" style="padding-left:18px" >
                
                            <input  class="form-check-input" style="color:white" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label style="color:white">{{ __('Remember Me') }}</label>
            
                        </div>
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                        <div class="card-footer" style="height:50px ;padding-top:5px;">
					                Don't have an account?
                                    @if (Route::has('register'))
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                     {{ __('Register') }}
                                    </a>
                              
                                    @endif

                            </div>

                        </form>
                    </div>
				</div>
			</div>
            </div>
        </div>
    </div>
</div>
@endsection
