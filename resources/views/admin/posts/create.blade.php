@extends("admin.layout.app")
@section("main-content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New post</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">New post</li>
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
            <form role="form" action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Post Subtitle</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Title image</label>
                                <input type="file" class="form-control-file" id="image" name="image" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select tags</label>
                                <select class="select2" multiple="multiple" data-placeholder="Tag" name="tags[]" style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <label for="title">Post Body</label>
                        <textarea id="summernote" name="body" >
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

