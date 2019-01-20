@extends('admin.layout')

@section('breadcrumbs')
    <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection

@section('content')
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create users</h4>
                    {!! Form::open(['route' => 'users.store', 'files' => true]) !!}
                        <div class="form-material m-t-40">
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" class="form-control form-control-line" value="{{old('name')}}" id="title" name="name">
                            </div>
                            <div class="form-group">
                                <label for="title">Email</label>
                                <input type="text" class="form-control form-control-line" value="{{old('email')}}" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" value="" name="password">
                            </div>

                            <div class="form-group">
                                <label>Image upload</label>
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                <input type="file" name="avatar"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                            </div>
                            <div class="button-group">
                                <a href="{{route('users.index')}}" class="btn waves-effect waves-light btn-outline-secondary">Back</a>
                                <button type="submit" class="btn waves-effect waves-light btn-outline-success">Created</button>
                            </div>
                        </div>
                    {!! Form::close() !!}

                    @include('admin.error')

                </div>
            </div>
        </div>
    </div>

@endsection