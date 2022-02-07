@extends('user/app')

<!-- Pridaj obrazok-->

@section('title','Gallery')

@section('subheading','Check our work')

@section('main-content')
        <div class="container">
            <div class="row row-cols-3">

                @foreach($galleries as $gallery)
                    <div class="responsive">
                        <div class="gallery">
                                <img src="{{Storage::disk('local')->url($gallery->image)}}" alt="{{$gallery->author}}" width="600" height="400">
                            <div class="desc">
                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modalImage{{$gallery->id}}">
                                    {{$gallery->title}}
                                </button>
                            </div>
                        </div>
                    </div>
                        <!-- Modal -->
                        <div class="modal fade" id="modalImage{{$gallery->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">{{$gallery->title}}</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{Storage::disk('local')->url($gallery->image)}}" class="img-fluid" alt="...">
                                        <div class="row">
                                            <div class="col-8">
                                                <h5> {{$gallery->subtitle}}</h5>
                                            </div>
                                        </div>
                                        <div class="row">

                                        </div>
                                        <div class="row">
                                            @foreach($gallery->tags as $tag)
                                                <div class="col-3">
                                                    <p id="boxTag">
                                                        {{$tag->name}}
                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <p>Author: {{$gallery->author}}</p>
                                            </div>
                                            <div class="col-3">
                                            </div>
                                            <div class="col-4">
                                                <small class="text-muted">Last updated: {{$gallery->updated_at}}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                @endforeach

             </div>
        </div>


@endsection

