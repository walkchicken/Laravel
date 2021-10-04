@extends('layouts.appsssss')

@section('content')
<link href="{{asset('public')}}/frontend/css/stylessssss.css" rel="stylesheet" />
<body class="usermanager" >
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User') }}</div>

                <div class="card-body" style="margin-top:50px; ">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ implode(',', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                    @can('edit-users')
                                        <a href="{{ route('admin.users.edit', $user->id ) }}"><button type="button" class="btn btn-primary float-left ">Edit</button></a>
                                    @endcan
                                    @can('delete-users')
                                        <form action="{{ route('admin.users.destroy',$user)}}" method="POST" class="float-left">
                                        @csrf
                                        {{ method_field('DELETE')}}
                                        <button type="submit" class="btn btn-warning">Delete</button>
                                    </form>
                                    @endcan
                                </td>
                        </tr>
                    @endforeach      
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
