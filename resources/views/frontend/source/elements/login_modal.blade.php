<!-- Message Modal -->
<div class="modal fade" id="quick-login" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Supplier Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST"  action="{{ url('supplier/login') }}">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label text-dark" for="buyerEmail">Email address</label>
                    <input type="email" id="buyerEmail" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Enter email" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="form-label text-dark" for="buyerPassword1">Password</label>
                    <input type="password" class="form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="buyerPassword1" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <a href="{{ url('/password/reset') }}" class="float-right small text-dark mt-1">I forgot password</a>
                        <input type="checkbox" class="custom-control-input" name="remember">
                        <span class="custom-control-label text-dark">Remember me</span>
                    </label>
                </div>
                <div class="text-center mt-3 text-dark">
                    Don't have account yet? <a href="{{ url('supplier/join-us') }}">SignUp</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">SignIn</button>
            </div>
            </form>
        </div>
    </div>
</div>
