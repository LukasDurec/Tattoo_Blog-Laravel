@extends("admin.layout.app")

@section("main-content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New picture</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">New picture</li>
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
            <form role="form" action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="title">Picture Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="title">Picture Subtitle</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Picure</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="author">Picture Author</label>
                                <input type="text" class="form-control" name="author" id="author" placeholder="Author">
                            </div>

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


                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="button" href="{{route("gallery.index")}}" class="btn btn-warning">Back</a>
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

