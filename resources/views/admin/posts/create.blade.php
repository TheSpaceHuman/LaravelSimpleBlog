@extends('admin.layout')

@section('breadcrumbs')
    <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Posts</a></li>
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
                    <h4 class="card-title">Create posts</h4>
                    {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
                        <div class="form-material m-t-40">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control form-control-line" value="{{old('title')}}" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                {{Form::select('category_id',
                                ['1' => 'Large', '2' => 'Small'],
                                null,
                                ['class' => 'form-control'])
                                }}
                            </div>

                                <label >Tags</label>
                                <div class="qtagselect">
                                   {{-- {{Form::select('tags[]',
                                    ['1' => 'Large', '2' => 'Small'],
                                    null,
                                    ['class' => 'qtagselect__select', 'multiple' => 'multiple'])
                                    }}--}}
                                    <select class="qtagselect__select" multiple>
                                        <option value="1" class="ispurple" selected>jQuery</option>
                                        <option value="2" class="isblue" selected>Script</option>
                                        <option value="3" class="isblue" disabled="true">.Net</option>
                                        <option value="4" class="isblue">CSS</option>
                                        <option value="5" class="isblue">HTML</option>
                                        <option value="6" class="isblue">JavaScript</option>
                                        <option value="7" class="isblue">Ruby</option>
                                        <option value="8" class="isblue">Python</option>
                                        <option value="9" class="isblue">Golang</option>
                                        <option value="10" class="isblue">Object C</option>
                                        <option value="11" class="ispurple">Angular</option>
                                        <option value="12" class="isblue">React</option>
                                        <option value="13" class="isblue">Vue</option>
                                        <option value="14" class="isblue">PHP</option>
                                        <option value="15" class="isblue">C++</option>
                                        <option value="16" class="isblue">C#</option>
                                    </select>
                                </div>

                            <div class="card-body">
                                <h4 class="card-title">Material Date picker</h4>
                                <h6 class="card-subtitle">Use
                                    <code>.bootstrapMaterialDatePicker</code> to create it.</h6>
                                <div class="row form-material">
                                    <div class="col-md-6">
                                        <label class="m-t-20">Default Material Date Picker</label>
                                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                                        <label class="m-t-40">Default Material Date Timepicker</label>
                                        <input type="text" id="date-format" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Image upload</label>
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                <input type="file" name="avatar"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                            </div>


                            <div class="form-group">
                                <input type="checkbox" id="is_featured" name="is_featured" class="filled-in chk-col-purple" checked="">
                                <label for="is_featured">Recommend</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="status" name="status" class="filled-in chk-col-purple" checked="">
                                <label for="status">Draft</label>
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                {{--<textarea class="form-control" rows="6" id="content" name="content"></textarea>--}}
                                <textarea class="textarea_editor form-control" id="content" name="content" rows="15" placeholder="Content"></textarea>
                            </div>

                            <div class="button-group">
                                <a href="{{route('posts.index')}}" class="btn waves-effect waves-light btn-outline-secondary">Back</a>
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