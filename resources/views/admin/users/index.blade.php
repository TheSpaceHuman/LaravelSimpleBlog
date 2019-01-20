@extends('admin.layout')

@section('breadcrumbs')
    <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin')}}"></a>Dashboard</li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
@endsection

@section('content')
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12 col-xlg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users</h4>
                    <h6 class="card-subtitle">Users created</h6>
                    <div class="button-group">
                        <a href="{{route('users.create')}}" class="btn waves-effect waves-light btn-primary">Add users</a>
                    </div>
                </div>
            </div>
        </div>
       <div class="col-12">
           <div class="card">
               <div class="card-body">
                   <h4 class="card-title">Table Users</h4>
                   <div class="table-responsive">
                       <table class="table color-table primary-table">
                           <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Name</th>
                                   <th>Email</th>
                                   <th>Avatar</th>
                                   <th>Actions</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($users as $user)
                               <tr>
                                   <td>{{$user->id}}</td>
                                   <td>{{$user->name}}</td>
                                   <td>{{$user->email}}</td>
                                   <td><img src="{{$user->getImage()}}" alt="user" class="photo-in-table"></td>
                                   <td class="text-nowrap">
                                       <a href="{{route('users.edit', $user)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>

                                       {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                                           <button type="submit" class="btn-reset" onclick="return confirm('Вы уверены?')">
                                               <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fas fa-window-close text-danger"></i> </a>
                                           </button>
                                       {!! Form::close() !!}
                                   </td>
                            @endforeach
                               </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
    </div>

@endsection