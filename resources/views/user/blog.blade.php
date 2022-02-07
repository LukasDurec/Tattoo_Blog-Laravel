@extends("user.app")
@section('bg-img',asset('user/img/blog.jpg'))
@section('title','Blog')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-2">
            </div>
                <div class="col-8">
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
                        <p class="post-meta">Posted on {{$post->created_at}}</p>
                    </div>
                @endforeach
                    <div class="col-2">
                    </div>
                <hr>
            </div>
        </div>
    </div>
    <hr>
@endsection
