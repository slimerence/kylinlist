<!doctype html>
<html lang="en" dir="ltr">
@include('backend.layouts.head')
<body>
<div id="loading"></div>

<!--Page-->
<div class="page ">
    <div class="page-content z-index-10">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Login to your Account</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" id="loginform" action="{{ route('login') }}">
                                @csrf
                            <div class="form-group">
                                <label class="form-label text-dark">Email address</label>
                                <input type="email" class="form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label text-dark">Password</label>
                                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword1" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <a href="{{ route('password.request') }}" class="float-right small text-dark mt-1">I forgot password</a>
                                    <input type="checkbox" class="custom-control-input" name="remember">
                                    <span class="custom-control-label text-dark">Remember me</span>
                                </label>
                            </div>
                            <div class="form-footer mt-2">
                                <button type="submit" class="btn btn-primary btn-block">SignIn</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.layouts.js')
</body>
</html>
