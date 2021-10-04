@extends('layouts.appsssss')

@section('content')

	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.css')}}" >
    
    <!--Fontawesome CDN-->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->

	<!--Custom styles-->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('public/backend/css/style.css')}}"> -->
<link href="{{asset('public')}}/frontend/css/stylessssss.css" rel="stylesheet" />
<body class="usermanager">
<div class="container">
	<div class="d-flex justify-content-center h-100" style="margin-top:180px;">
		<div class="card">
            <div class="card-body">
                    <form action="{{route('admin.users.update', $user)}}" method="POST">
                        <div class="input-group form-group">
						    <div class="input-group-prepend" style="height : 50px;">
                                <span class="input-group-text" ><i class="fas fa-user"></i></span>
                            </div>
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color:black ; text-align: left!important; padding-top:12px;" style="height : 50px;">{{ __('E-Mail') }}</label>
                            <div class="col-md-6">
                                <input id="email" style="height : 50px;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
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
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color:black ; text-align: left!important; padding-top:12px;" style="height : 50px;">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" style="height : 50px;" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @csrf
                        {{ method_field('PUT')}}
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="height : 50px;">
                                <span class="input-group-text" ><i class="fas fa-user"></i></span>
                            </div>
                            <label for="roles" class="col-md-4 col-form-label text-md-right" style="color:black ; text-align: left!important; padding-top:12px;" style="height : 50px;">{{ __('Roles') }}</label>
                            <div class="col-md-6">
                                @foreach($roles as $role)
                                    <div class="form-check">
                                        <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                        @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                        <label>{{ $role->name }}</label>
                                    </div>
                                @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </form>
                    </div>
				</div>
			</div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
