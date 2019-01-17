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
            <li> <a class="waves-effect waves-dark" href="{{route('category.index')}}"><i class="mdi mdi-cards-variant"></i><span
                            class="hide-menu">Category</span></a>
            </li>
            <li> <a class="waves-effect waves-dark active" href="{{route('tags.index')}}"><i class="mdi mdi-tag"></i><span
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
        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('tags.index')}}">Tags</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-xlg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tags</h4>
                    <h6 class="card-subtitle">Page create tag</h6>
                    {!! Form::open(['route' => 'tags.store']) !!}
                    <div class="form-material m-t-40">
                        <div class="form-group">
                            <label>Title tags</label>
                            <input type="text" class="form-control form-control-line" value="" name="title">
                        </div>
                    </div>

                    <div class="button-group">
                        <a href="{{route('tags.index')}}" class="btn waves-effect waves-light btn-outline-secondary">Back</a>
                        <button type="submit" class="btn waves-effect waves-light btn-outline-success">Created</button>
                    </div>
                    {!! Form::close() !!}

                    @include('admin.error')
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

    </div>
@endsection
