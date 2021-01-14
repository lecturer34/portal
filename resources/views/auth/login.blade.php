@extends("layouts.login")
@section("content")
    <div class="signup-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Member Login</h2>
            <div class="form-group">
                <input id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block signup-btn">Login</button>
            </div>
        </form>
        <div class="text-center">Dont have an account? <a href="#">Register here</a></div>
    </div>
@endsection