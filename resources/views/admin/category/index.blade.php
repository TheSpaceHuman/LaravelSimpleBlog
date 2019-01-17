@extends('admin.layout')

@section('sidebar')
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="nav-small-cap">BLOG</li>
            <li> <a class="waves-effect waves-dark " href="/admin"><i class="mdi mdi-gauge"></i><span
                            class="hide-menu">Dashboard</span></a>
            </li>
            <li> <a class="waves-effect waves-dark" href="#"><i class="mdi mdi-clipboard-text"></i><span
                            class="hide-menu">Post</span></a>
            </li>
            <li> <a class="waves-effect waves-dark active" href="/admin/category"><i class="mdi mdi-cards-variant"></i><span
                            class="hide-menu">Category</span></a>
            </li>
            <li> <a class="waves-effect waves-dark" href="#"><i class="mdi mdi-tag"></i><span
                            class="hide-menu">Tags</span></a>
            </li>
            <li> <a class="waves-effect waves-dark" href="#"><i class="mdi mdi-message-processing"></i><span
                            class="hide-menu">Comments</span></a>
            </li>
            <li> <a class="waves-effect waves-dark" href="#"><i class="mdi mdi-account"></i><span
                            class="hide-menu">Users</span></a>
            </li>
            <li> <a class="waves-effect waves-dark" href="#"><i class="mdi mdi-bookmark-check"></i><span
                            class="hide-menu">Subscribers</span></a>
            </li>
        </ul>
    </nav>
@endsection


@section('breadcrumbs')
    <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Category</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-xlg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <h6 class="card-subtitle">Page edit category</h6>
                    <div class="button-group">
                        <a href="{{route('category.create')}}" class="btn waves-effect waves-light btn-primary">Add category</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Table category</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->title}}</td>
                                        <td class="text-nowrap">
                                            <a href="{{route('category.edit', $category)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>

                                            {!! Form::open(['route' => ['category.destroy', $category->id], 'method' => 'delete']) !!}
                                            <button type="submit" class="btn-reset" onclick="return confirm('Вы уверены?')">
                                                <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fas fa-window-close text-danger"></i> </a>
                                            </button>
                                            {!! Form::close() !!}
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
@endsection
