<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{route('index')}}">OLD DOG TATOO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('index')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('blog')}}">Blog</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('gallery')}}">Gallery</a></li>

                @if(Auth::user())
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('admin.home')}}">Admin</a></li>
                @else
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('login')}}">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header-->
<header class="masthead"style="background-image: url(@yield ('bg-img'))" > <!-- sem dopln obrazok-->
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>@yield("title")</h1>
                    <span class="subheading">@yield("subheading")</span>
                </div>
            </div>
        </div>
    </div>
</header>
