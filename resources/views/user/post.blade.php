@extends('user/app')

@section('bg-img',Storage::disk('local')->url($post->image))

@section('title',$post->title)

@section('subheading',$post->subtitle)

@section('main-content')
    <article>
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-10 mx-auto">
                    <small>Created at {{$post->created_at}}</small>
                    @foreach($post->tags as $tag)
                        <a href="{{ route('tag',$tag->id) }}">
                            <small id="boxTag">
                                {{$tag->name}}
                            </small>
                        </a>
                    @endforeach
                    <p></p>
                    {!! htmlspecialchars_decode($post->content) !!}
                </div>
            </div>
        </div>
    </article>
    <hr>
@endsection
