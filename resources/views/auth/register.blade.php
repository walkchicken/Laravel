@extends('layouts.appsssss')

@section('content')

<html>
	<title>Register</title>
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
	<div class="d-flex justify-content-center h-100" style="margin-top:180px;">
		<div class="card">
                <div class="card-header" style="color:white">{{ __('Register') }}
                    <div class="d-flex justify-content-end social_icon">
					    <span><i class="fab fa-facebook-square"></i></span>
					    <span><i class="fab fa-google-plus-square"></i></span>
					    <span><i class="fab fa-twitter-square"></i></span>
				    </div>         
                </div>
                <div class="card-body">
                    <form method="POST" style="margin-top:-60px" action="{{ route('register') }}">
                        @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="height : 50px;">
                                <span class="input-group-text" ><i class="fas fa-user"></i></span>
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color:white ; text-align: left!important; padding-top:13px;" style="height : 50px;">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" style="height : 50px;" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-group form-group">
						    <div class="input-group-prepend" style="height : 50px;">
                                <span class="input-group-text" ><i class="fas fa-user"></i></span>
                            </div>
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color:white ; text-align: left!important; padding-top:2px;" style="height : 50px;">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" style="height : 50px;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-group form-group" style="padding-top:0px;">
						    <div class="input-group-prepend">
							    <span class="input-group-text"><i class="fas fa-key"></i></span>
						    </div>
                            <label for="password" class="col-md-4 col-form-label text-md-right"  style="color:white ; text-align: left!important;padding-top:11px; " style="height : 50px;">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" style="height : 50px;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"  style="color:white ; text-align: left!important;padding-top:2px; " style="height : 50px;">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" style="height : 50px;" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

                            </div>
                        </div>

                        <div class="form-group row" style="padding-left:16px; padding-top:8px;" >
                                <button type="submit" class="btn btn-primary" >
                                    {{ __('Register') }}
                                </button>
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
<!-- <div class="form-group row">
                            <div class="input-group-prepend" style="height : 50px;">
                                <span class="input-group-text" ><i class="fas fa-user"></i></span>
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color:white ; text-align: left!important; padding-top:2px;" style="height : 50px;">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


<div class="form-group row">
						    <div class="input-group-prepend">
							    <span class="input-group-text"><i class="fas fa-key"></i></span>
						    </div>
                            <label for="password" class="col-md-4 col-form-label text-md-right"  style="color:white ; text-align: left!important;padding-top:11px; " style="height : 50px;">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" style="height : 50px;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            </div>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                        </div> -->

