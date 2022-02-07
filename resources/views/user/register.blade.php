@extends("user.app")

@section('title','Register')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-6">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="name" required autocomplete="name" autofocus>
                        <label for="floatingInput">Name/Login</label>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" placeholder="email" required autocomplete="email" >
                        <label for="floatingInput">Email address</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"  required autocomplete="new-password" placeholder="password">
                        <label for="floatingPassword">Password</label>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" id="password-confirm"  class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                        <label for="floatingPassword">Confirm Password</label>
                    </div>
                    <p></p>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
@endsection

