@extends('user/app')

<!-- Pridaj obrazok-->

@section('title','Gallery')

@section('subheading','Check our work')

@section('main-content')
        <div class="container">
            <div class="row row-cols-3">
                @foreach($galleries as $gallery)
                    <div class="col">
                        <div class="card">
                            <img src= "{{Storage::disk('local')->url($gallery->image)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$gallery->title}}</h5>
                                <p class="card-text">{{$gallery->subtitle}}</p>
                                <div class="row">
                                    <div class="col">
                                        <small class="text" >{{$gallery->author}} </small>
                                    </div>
                                    <div class="col">
                                        <small class="text-muted" >{{$gallery->created_at}}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                @endforeach

                    @foreach($galleries as $gallery)
                        <img src="{{Storage::disk('local')->url($gallery->image)}}" data-bs-toggle="modal" class="img-thumbnail" alt="...">
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
             </div>
        </div>


@endsection

