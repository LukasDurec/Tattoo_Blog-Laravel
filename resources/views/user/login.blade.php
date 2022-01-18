@extends("user.app")

@section('title','Login')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-6">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="nickname@google.com">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <p></p>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col">

            </div>
        </div>

    </div>



    </body>
@endsection
