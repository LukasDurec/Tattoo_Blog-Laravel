@extends("admin.layout.app")

@section("main-content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit picture</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Edit picture</li>
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
            <form role="form" action="{{route('gallery.update',$gallery->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="title">Picture Title</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{$gallery->title}}">
                            </div>

                            <div class="form-group">
                                <label for="title">Picture Subtitle</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$gallery->subtitle}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Picure</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="author">Picture Author</label>
                                <input type="text" class="form-control" name="author" id="author" value="{{$gallery->author}}">
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select tags</label>
                                    <select class="select2" multiple="multiple" data-placeholder="Tag" name="tags[]" style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}"
                                                    @foreach ($gallery->tags as $galleryTag)
                                                    @if ($galleryTag->id == $tag->id)
                                                    selected
                                                @endif
                                                @endforeach
                                            >{{$tag->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>


                    </div>


                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="button" href="{{route("gallery.index")}}" class="btn btn-warning">Back</a>
                    </div>

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

