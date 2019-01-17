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
            <li> <a class="waves-effect waves-dark active" href="{{route('category.index')}}"><i class="mdi mdi-cards-variant"></i><span
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
        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-xlg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <h6 class="card-subtitle">Page create category</h6>
                    {!! Form::open(['route' => 'category.store']) !!}
                    <div class="form-material m-t-40">
                        <div class="form-group">
                            <label>Title category</label>
                            <input type="text" class="form-control form-control-line" value="" name="title">
                        </div>
                    </div>

                    <div class="button-group">
                        <a href="{{route('category.index')}}" class="btn waves-effect waves-light btn-outline-secondary">Back</a>
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
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
@endsection
