@extends("user.app")
@section('title',($tag->name))
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($posts as $post)
                    <div class="post-preview">
                        <a href="{{route('post',$post->id)}}">
                            <h2 class="post-title">
                                {{$post->title}}
                            </h2>
                            <h3 class="post-subtitle">
                                {{$post->subtitle}}
                            </h3>
                        </a>
                        <p class="post-meta">Posted by
                            <a href="#">Lukas Durec</a>
                            on {{$post->created_at}}</p>
                    </div>
                @endforeach
                <hr>
            </div>
        </div>
    </div>
    <hr>
@endsection



