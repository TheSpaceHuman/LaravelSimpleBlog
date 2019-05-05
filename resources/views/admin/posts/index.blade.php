@extends('admin.layout')

@section('breadcrumbs')
    <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin')}}"></a>Dashboard</li>
        <li class="breadcrumb-item active">Posts</li>
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
                    <h4 class="card-title">posts</h4>
                    <h6 class="card-subtitle">posts created</h6>
                    <div class="button-group">
                        <a href="{{route('posts.create')}}" class="btn waves-effect waves-light btn-primary">Add post</a>
                    </div>
                </div>
            </div>
        </div>
       <div class="col-12">
           {{--<div class="card">
               <div class="card-body">
                   <h4 class="card-title">Table posts</h4>
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
                           @foreach($posts as $post)
                               <tr>
                                   <td>{{$post->id}}</td>
                                   <td>{{$post->name}}</td>
                                   <td>{{$post->email}}</td>
                                   <td><img src="{{$post->getImage()}}" alt="user" class="photo-in-table"></td>
                                   <td class="text-nowrap">
                                       <a href="{{route('posts.edit', $post)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>

                                       {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
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
           </div>--}}

           <div class="card">
               <div class="card-body">
                   <h4 class="card-title">Posts Table</h4>
                   <div class="table-responsive m-t-40">
                       <table id="myTable" class="table table-bordered table-striped">
                           <thead>
                           <tr>
                               <th>ID</th>
                               <th>Title</th>
                               <th>Category</th>
                               <th>Tags</th>
                               <th>Img</th>
                               <th>Action</th>
                           </tr>
                           </thead>
                           <tbody>
                               @foreach($posts as $post)
                                   <tr>
                                       <td>{{$post->id}}</td>
                                       <td>{{$post->title}}</td>
                                       <td>{{$post->category}}</td>
                                       <td>{{$post->tags}}</td>
                                       <td><img src="{{$post->getImage()}}" alt="user" class="photo-in-table"></td>
                                       <td class="text-nowrap">
                                           <a href="{{route('posts.edit', $post)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>

                                           {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                                           <button type="submit" class="btn-reset" onclick="return confirm('Вы уверены?')">
                                               <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fas fa-window-close text-danger"></i> </a>
                                           </button>
                                           {!! Form::close() !!}
                                       </td>
                               @endforeach

                               {{--<tr>
                                   <td>1</td>
                                   <td>Title 1</td>
                                   <td>Category 1</td>
                                   <td>Tag 1</td>
                                   <td>Img 1</td>
                                   <td>
                                       <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>
                                       <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fas fa-window-close text-danger"></i> </a>
                                   </td>
                               </tr>--}}

                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
    </div>

@endsection