@extends('admin.layout')

@section('breadcrumbs')
    <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-xlg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <h6 class="card-subtitle">Page create category</h6>
                    {!! Form::open(['route' => ['category.update', $category->id], 'method' => 'put']) !!}
                    <div class="form-material m-t-40">
                        <div class="form-group">
                            <label>Title category</label>
                            <input type="text" class="form-control form-control-line" value="{{$category->title}}" name="title">
                        </div>
                    </div>

                    <div class="button-group">
                        <a href="{{route('category.index')}}" class="btn waves-effect waves-light btn-outline-secondary">Back</a>
                        <button type="submit" class="btn waves-effect waves-light btn-outline-warning">Edit</button>
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