@extends("admin.layout.app")

@section("main-content")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New tag</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">New tag</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->


        <!-- Main content -->
        <div class="card card-primary">

            <!-- form start -->
            <form action="{{route("tags.update",$tag->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">

                    @if( count($errors)>0)
                        @foreach($errors -> all() as $error)
                            <p class="alert-danger">{{$error}}</p>
                        @endforeach
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Tag Name</label>
                                <input type="text" class="form-control" name="tagname" id="tag-name" value="{{$tag->name}}">
                            </div>

                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="button" href="{{route("tags.index")}}" class="btn btn-warning">Back</a>
                    </div>

                </div>

            </form>

        </div>

    </div>

@endsection

