@extends('layouts.adminapp')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-sm-1">
    </div>
    <div class="col-sm-6" style="margin-top:20px">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border" style="margin-top:20px">
                <h3 class="box-title">Edit Post</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="card">

                <div class="card-body">
                    <form role="form" method="post" action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">post Name</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Title"
                                            name="title" value="{{ $post->title }}">
                                        @if($errors->has('title'))
                                        <strong class="text-danger">{{ $errors->first('title') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">post author</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter author"
                                            name="author" value="{{ $post->author  }}">
                                        @if($errors->has('author'))
                                        <strong class="text-danger">{{ $errors->first('author') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Thumbnail Image</label>
                                        <input type="file" class="form-control"  name="thumbnail_image" value="{{ old('thumbnail_image') }}">
                                        @if($errors->has('thumbnail_image'))
                                        <strong class="text-danger">{{ $errors->first('thumbnail_image') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">post Description</label>
                                        <textarea class="form-control" name="description">{{ $post->description }}</textarea>
                                        @if($errors->has('description'))
                                        <strong class="text-danger">{{ $errors->first('description') }}</strong>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>

<div class="col-md-2" style="margin-top:80px">
    <img src="/upload/{{ $post->thumbnail_image }}" width="200; height:300">    
</div>
</div>
<!-- /.box -->
</div>
<!--/.col (right) -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection