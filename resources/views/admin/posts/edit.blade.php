@extends("admin.layout.app")

@section("main-content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit post</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href=>Home</a></li>
                        <li class="breadcrumb-item active">Edit Post</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->


        <!-- Main content -->
        <div class="card card-primary">
            <div class="card-body">
                @if( count($errors)>0)
                    @foreach($errors -> all() as $error)
                        <p class="alert-danger">{{$error}}</p>
                    @endforeach
                @endif
            </div>

            <!-- form start -->
            <form role="form" action="{{route('posts.update',$post->id)}}" method="post"enctype="multipart/form-data" >
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" class="form-control" name="title" id="title"  value="{{$post->title}}">
                            </div>

                            <div class="form-group">
                                <label for="title">Post Subtitle</label>
                                <input type="text" class="form-control" id="subtitle"name="subtitle" value="{{$post->subtitle}}">
                            </div>


                           <!-- <div class="form-group">
                                <label for="exampleInputFile">Title image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            -->

                        </div>

                        <div class="col-md-6">





                        </div>

                    </div>

                    <div class="card-body">
                        <label for="title">Post Body</label>
                        <textarea id="summernote" name="body" >{{$post->content}}
                         </textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="button" href="{{route("posts.index")}}" class="btn btn-warning">Back</a>
                    </div>

                </div>

            </form>

        </div>

    </div>

@endsection
@section("footerSection")
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()});
    </script>
@endsection
