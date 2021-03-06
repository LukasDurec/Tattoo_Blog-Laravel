@extends("admin.layout.app")
@section("headSection")
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection
@section("main-content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Posts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Posts</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Posts list</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a class="btn btn-success" href="{{route("posts.create")}}" role="button"> Add post</a>
                                <table id="tabulkaPost" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Subitle</th>
                                        <th>Created</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->subtitle}}</td>
                                            <td>{{$post->created_at}}</td>
                                            <td><a href="{{route("posts.edit",$post->id)}}"><span class="fas fa-edit"></span></a></td>
                                            <td>
                                                <form id='delete-form-{{$post->id}}' method="post" action="{{route("posts.destroy",$post->id)}}" style="display: none">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a href="" onclick="
                                                    if (confirm('Are you sure u want to delete this magnificent post?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$post->id}}').submit();
                                                    }else{
                                                    event.preventDefault();}"
                                                ><span class="fas fa-trash"></span></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @section("footerSection")
    </div>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <script>
        $(function () {
            $("#tabulkaPost").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
<!-- /.content-wrapper -->

@endsection

