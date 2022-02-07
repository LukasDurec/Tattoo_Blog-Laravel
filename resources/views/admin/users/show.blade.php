@extends("admin.layout.app")

@section("main-content")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card w-25" >
                    <div class="card-body" id="profileInfo">
                        <div class="row">
                            <div class="col">
                                <strong>Name:</strong>
                            </div>
                            <div class="col">
                                {{$user->name}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <strong>Email:</strong>
                            </div>
                            <div class="col">
                                {{$user->email}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#changePassword">
                                    Change password
                                </button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfile">
                                    Edit
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="changePassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Change password</h5>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editProfile" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit profile</h5>
                        </div>
                        <form action="{{route('users.update',$user->id)}}" method="post" id="edit-Profile">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <script>
                $.ajaxSetup({
                headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
                });

                //edituj meno a email
                $('#edit-Profile').on('submit', function(e){
                    e.preventDefault();
                    var form = this;
                    $.ajax({
                        url:$(form).attr('action'),
                        method:$(form).attr('method'),
                        data:new FormData(form),
                        processData:false,
                        dataType:'json',
                        contentType:false,
                        success: function(data){
                            if(data.code == 0){
                                $.each(data.error, function(prefix, val){
                                    $(form).find('span.'+prefix+'_error').text(val[0]);
                                });
                            }else{
                                $("#profileInfo").load(location.href + " #profileInfo");
                                $('#editProfile').modal('hide');
                            }
                        }
                    });
                });

            </script>


        </section>
    </div>


@endsection


